<?php
	use App\Models\Follow;
	use Illuminate\Support\Facades\Session;

	Session::put("url",url()->current());
	
?>
@extends('/layouts.app')
@section('content')		
@if ($errors->any())
<div class="alert alert-danger position-fixed z-1 countdown">
	<ul class="p-0 m-0">
		@foreach ($errors->all() as $error)
		<li style="list-style: none"><i class="fa-solid fa-circle-exclamation pe-2"></i> {{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
	<section>
		<div class="feature-photo">
			<figure><img src="{{ asset('images/resources/timeline-4.jpg')}}" alt=""></figure>
			<div class="add-btn">
				<a href="#" title="" data-ripple="">Joined</a>
				@if($userRole->role_id_fk == !0)
					<form action="{{ route('leave-group', $group->group_id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to leave this group?');">
						@csrf
						@method('DELETE')
						<button type="submit" title="" data-ripple="" class="delete-group">Leave</button>
					</form>
				@else
					<form action="{{ route('disband-groups', $group->group_id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this group?');">
						@csrf
						@method('DELETE')
						<button type="submit" title="" data-ripple="" class="delete-group">Delete group</button>
					</form>
				@endif
			</div>
			<form class="edit-phto" @if($userRole->role_id_fk == 2) style="display: none;" @endif >
				<i class="fa fa-camera-retro"></i>
				<label class="fileContainer">
					Edit Cover Photo
					<input type="file"/>
				</label>
			</form>
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						<!-- <div class="user-avatar">
							<figure>
								<img src="images/resources/user-avatar2.jpg" alt="">
								<form class="edit-phto" style="display: none;">
									<i class="fa fa-camera-retro"></i>
									<label class="fileContainer">
										Edit Display Photo
										<input type="file"/>
									</label>
								</form>
							</figure>
						</div> -->
					</div>
					<div class="col-lg-10 col-sm-9">
						<div class="timeline-info">
							<ul>
								<li class="admin-name">
								  <h5>{{ $group->name_group }}</h5>	
								  <span>{{ $memberCount }} members</span>							  
								</li>
								<li>
									<a class="active" href="{{ url('group-view') }}" title="" data-ripple="">Posts</a>
									<a class="" href="{{ url('group-member', $group->group_id) }}" title="" data-ripple="">Members</a>
									@if($userRole->role_id_fk != 2)
									<a class="" href="{{ url('edit-group-2', $group->group_id) }}" title="" data-ripple="">Edit group</a>	
									@endif							
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
 
	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
							<aside class="sidebar static">
									<div class="widget">
										<h4 class="widget-title">Shortcuts</h4>
										<ul class="naves">
												<li>
													<i class="ti-clipboard"></i>
													<a href="{{ url('newsfeed') }}" title="">News feed</a>
												</li>
												<li>
													<i class="ti-mouse-alt"></i>
													<a href="{{ url('inbox') }}" title="">Inbox</a>
												</li>
												<li>
													<i class="ti-files"></i>
													<a href="{{ url('fav-page') }}" title="">My pages</a>
												</li>
												<li>
													<i class="ti-user"></i>
													<a href="{{ url('timeline-friends') }}" title="">friends</a>
												</li>
												<li>
													<i class="fa fa-users"></i>
													<a href="{{ url('groups') }}" title="">Groups</a>
												</li>
												<li>
													<form method="POST" action="{{ route('logout') }}">
														@csrf
														<i class="ti-power-off"></i>
														<x-dropdown-link style="padding-left:0px!important;font-size:15px" :href="route('logout')" onclick="event.preventDefault();
														this.closest('form').submit();">
															{{ __('Log Out') }}
														</x-dropdown-link>
													</form>
												</li>											
											</ul>
									</div><!-- Shortcuts -->
									<div class="widget">
										<h4 class="widget-title">Recent Activity</h4>
										<ul class="activitiez">
											<li>
												<div class="activity-meta">
													<i>10 hours Ago</i>
													<span><a href="#" title="">Commented on Video posted </a></span>
													<h6>by <a href="{{ url('time-line') }}">black demon.</a></h6>
												</div>
											</li>
											<li>
												<div class="activity-meta">
													<i>30 Days Ago</i>
													<span><a href="#" title="">Posted your status. “Hello guys, how are you?”</a></span>
												</div>
											</li>
											<li>
												<div class="activity-meta">
													<i>2 Years Ago</i>
													<span><a href="#" title="">Share a video on her timeline.</a></span>
													<h6>"<a href="#">you are so funny mr.been.</a>"</h6>
												</div>
											</li>
										</ul>
									</div><!-- recent activites -->					
								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
					<div class="central-meta">
						<div class="new-postbox">
							<figure>
								<?php

								use Illuminate\Support\Facades\Auth;

								$avtUser = Auth::user()->avatar;
								?>
								<!-- <img src="{{ asset('images/resources/' . $avtUser) }}" alt=""> -->
								<x-user-avt>
								</x-user-avt>

							</figure>
							<div class="newpst-input">
								<form method="post" action="{{ url('post') }}" enctype="multipart/form-data">
									@csrf
									@method('post')
									<input type="hidden" name=group_id value="{{$group->group_id}}">
									<textarea rows="2" name="content" placeholder="write something"></textarea>
									<div class="attachments">
										<ul>
											<!-- ###Task: viet js cho size input -->
											<li>
												<i class="fa fa-image"></i>
												<label class="fileContainer">
													<input type="file" name="imgFileSelected[]" id="imgFileSelected" multiple accept="image/*">
												</label>
											</li>
											<li>
												<i class="fa fa-video-camera"></i>
												<label class="fileContainer">
													<input type="file" name="vdFileSelected[]" id="vdFileSelected" multiple accept="video/*">
												</label>
											</li>

											<li>
												<button type="submit">Post</button>
											</li>
										</ul>
									</div>
								</form>

							</div>
						</div>
					</div><!-- add post new box #loadpost-->
					<div class="loadMore">
						@foreach ($posts as $post)
						{{-- Kiểm tra trong mảng và render ra cái phù hợp --}}
						@if (class_basename($post) === 'Posts')
						{{-- @if (false)  --}}
						<div class="central-meta item rounded-5 {{isset($firstPost) && $firstPost == true ? 'firstPost': ''}}">
							<div class="user-post">
								<div class="friend-info">
									<figure>
 											<img src="{{ asset('storage/images/' . $post->user->avatar) }}" alt="" style="width:100%;height:100%">

 									</figure>
									<div class="friend-name">
									@if(auth()->check() && $post->user_id_fk== auth()->user()->user_id)
														<div class="dropdown" style="position: absolute; right: 5%;">
																<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: none;">
																	<i class="fa-solid fa-ellipsis-vertical"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-{{$post->id}}">
																	<a class="dropdown-item" href="{{url('edit-post/'. $post->id)}}" style="display:flex; align-items: center;font-size: 0.8125rem " >	
																	<i class="far fa-edit" 
																		style="margin-right:10px; width: 1rem"></i>Update</a>
																	
																	<form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="POST" style="display: inline;">
																		@csrf
																		@method('DELETE')
																		<button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this post?');" style="display:flex; align-items: center;;font-size: 0.8125rem"> 	
																		<i class="fas fa-trash-alt"
																				style="margin-right: 10px; width: 1rem"></i> Delete</button>
																	</form>
																</div>
															</div>
															@endif
										<ins><a href="{{ url('time-line') . '/user-profile/' . $post->user->user_id }}" title="">
												{{ ucwords($post->user->last_name . ' ' . $post->user->first_name) }}
											</a></ins>

										<span>published:
											{{ date_format($post->created_at, 'H:i d/m/Y') }}</span>
									</div>
									<div class="post-meta">
										<!-- <img src="images/resources/user-post.jpg" alt=""> -->
										<!-- Print content if not null -->
										<!-- {{ $post->id }} -->
										@if (!empty($post->content))
										<div class="description pb-2">
											{{ $post->content }}
										</div>
										@endif


										@php
										$totalMedia = count($post->image) + count($post->video);

										@endphp
										<!-- Display imgs  -->
										@if ($totalMedia != 0)
										<div class="container-fluied">
											<div class="row">
												@foreach ($post->image as $img)
												<a href="{{ asset('storage/images/' . $img->url) }}" class="{{ $loop->index < 3 ? 'col-4 p-1' : 'd-none' }} {{ $loop->index == 2 ? 'position-relative' : '' }}" data-fancybox="gallery{{ $post->id }}" data-caption="{{ $post->user->last_name . ' ' . $post->user->first_name . '\'s images' }}">
													<img src="{{ asset('storage/images/' . $img->url) }}" alt="failed to display" class="d-block" />
													@if ($loop->index == 2 && $loop->count - 3 != 0)
													<div style='position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content: center;align-items: center;font-size:2rem'>
														+{{ $totalMedia - 2 }}
													</div>
													@endif
												</a>
												@endforeach

												@if (!empty($post->video) && count($post->video) != 0)
												@foreach ($post->video as $video)
												<a href="{{ asset('storage/videos/' . $video->url) }}" data-fancybox="gallery{{ $post->id }}" style="max-height:50rem" class="{{ count($post->image) > 3 || $loop->iteration + count($post->image) > 3 ? 'd-none' : 'col-3 p-1' }}{{ count($post->image) > 3 || $loop->iteration + count($post->image) == 3 ? ' position-relative' : '' }}" style="display:block;height: 100%">
													<video controls style="height:100%;width:100%" src="{{ asset('storage/videos/' . $video->url) }}"></video>
													@if (count($post->image) > 3 || $loop->iteration + count($post->image) == 3)
													<div style='position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content: center;align-items: center;font-size:2rem'>
														+{{ $totalMedia - 2 }}
													</div>
													@endif
												</a>
												@endforeach
												@endif
											</div>

										</div>
										@endif



										<!-- views, like,dislike, comment, share -->
										<div class="we-video-info border-top my-3">
											<ul style="display: flex;align-items: center;">
												<li style="margin-right:15px">
												<span id="like-count-container-{{ $post->id }}" title="Likes" data-type="{{ $post->isLikedByCurrentUser() }}" data-post="{{ $post->id }}" data-clicked="false" class="mr-2 btn btn-sm d-inline font-weight-bold saveLikeDislike" style="border: 1px solid #c4c4c4;color: #c4c4c4;display:flex!important;align-items: center;">
												<i class="fa-regular fa-thumbs-up mr-2"></i>
													<span id="like-count-{{ $post->id }}" >
														@php
															$count = $post->sumLikes()
														@endphp
														
														<x-format_number :number=$count	/>
													</span>
												</span>
												</li>

												{{-- @foreach ($post->likePosts as $likePost)
                                                                @if ($likePost->post_id_fk == $post->id)
                                                                <form method="post" action="{{ route('like.store') }}"
												class="like-form">
												@csrf
												<input type="hidden" name="likepost-id" value={{ $likePost->likepost_id }} />
												<button class="like" data-toggle="tooltip" title="like">
													<i class="ti-heart"></i>
												</button>
												</form>
												@elseif($likePost->user_id_fk == $post->user_id_fk)
												<form method="post" action="{{ route('like.store') }}" class="like-form">
													@csrf
													<input type="hidden" name="like-status" value="{{ $likePost->likepost_id ? 'like' : 'done like' }}">
													<input type="hidden" name="post-id" value={{ $post->id }} />
													<input type="hidden" name="likepost-id" value={{ $likePost->likepost_id }} />
													<button class="like" data-toggle="tooltip" title="like">
														<i class="ti-heart"></i>
													</button>
												</form>
												@endif
												@endforeach --}}
												{{-- </li> --}}
												{{-- <li>
                                                                    <span class="dislike" data-toggle="tooltip"
                                                                        title="dislike">
                                                                        <i class="ti-heart-broken"></i>
                                                                        <ins>200</ins>
                                                                    </span>
                                                                </li> --}}
												<li>
													<span class="comment" data-toggle="tooltip" title="Comments">
														<i class="fa fa-comments-o"></i>
														<ins>
														@php
															$count = count($post->comments)
														@endphp
														
														<x-format_number :number=$count	/>
														</ins>
													</span>
												</li>
												<li class="social-media">
													<x-share-btn>{{ $post->id }}</x-share-btn>
												</li>

											</ul>
										</div>


									</div>
								</div>
								<div class="coment-area p-1 post-cmt post-cmt-{{ $post->id }}">
									<ul class="we-comet comment">
										<!-- hiện commment cho mỗi bình luận tại đây -->
										@php
										$count = 0;
										@endphp
										@foreach ($post->comments as $comment)
										@php
										$flag = $count >= 3 ? true : false;
										@endphp
										<x-comment :commenter=$comment :isHidden=$flag></x-comment>
										@php
										$count++;
										@endphp
										@endforeach

									</ul> <!-- list of comments-->
									<ul class="we-comet">
										<li>
											@php
											$count_of_cmt = count($post->comments);
											@endphp
											@if ($count_of_cmt > 3)
											<a title="" class="showmore underline btnshow-{{ $post->id }}">more
												comments</a>
											@endif
										</li>
										<li class="post-comment">
											<div class="comet-avatar">
											<div class="parent" style="width: 2rem; height: 2rem; border-radius: 50%;overflow:hidden">
												<x-user-avt>
												</x-user-avt>
											</div>
												
											</div>
											<div class="post-comt-box {{ $post->id }}">
												<form method="post" action="#" id="form-{{ $post->id }}" enctype="multipart/form-data">
													@csrf
													@method('POST')
													<input type="hidden" name="post_id" value="{{ $post->id }}">
													<textarea placeholder="Post your comment" name="content"></textarea>
													<div class="add-smiles">
														<span class="em em-expressionless" title="add icon"></span>
													</div>
													<div class="attachments">
														<ul class="m-0 d-flex align-items-center">
															<li>
																<i class="fa fa-image"></i>
																<label class="fileContainer">
																	<input type="file" name="imgFileSelected[]" id="imgFileSelected" multiple accept="image/*">
																</label>
															</li>
															<li>
																<i class="fa fa-video-camera"></i>
																<label class="fileContainer">
																	<input type="file" name="vdFileSelected[]" id="vdFileSelected" multiple accept="video/*">
																</label>
															</li>

															<li>
																<button type="submit" class="bg-dark btnComment" value={{ $post->id }}>Post</button>
															</li>
														</ul>
													</div>
													{{-- <div class="smiles-bunch">
																		<i class="em em---1"></i>
																		<i class="em em-smiley"></i>
																		<i class="em em-anguished"></i>
																		<i class="em em-laughing"></i>
																		<i class="em em-angry"></i>
																		<i class="em em-astonished"></i>
																		<i class="em em-blush"></i>
																		<i class="em em-disappointed"></i>
																		<i class="em em-worried"></i>
																		<i class="em em-kissing_heart"></i>
																		<i class="em em-rage"></i>
																		<i class="em em-stuck_out_tongue"></i>
																	</div> --}}
												</form>
											</div>

										</li>
									</ul>
								</div>
							</div>
						</div>
						@elseif (class_basename($post) === 'Share')

						@php
						$created_at = $post->created_at;
						$sharer = $post->user;
						$post = $post->post;
						@endphp

						<div class="sharer {{isset($firstPost) && $firstPost == true ? 'firstPost': ''}}">
							<div class="user-shared">
								<div class="avatar">
									<img src="{{asset('storage/images/$sharer->avatar')}}" alt="error">

								</div>
								<div class="content pl-3">
									<div class="text">
										<b>{{ ucwords($sharer->last_name . ' ' . $sharer->first_name) }}</b> shared an article <i class="fa-solid fa-earth-americas"></i>
									</div>
									<div class="publicTime">
										At: {{ date_format($created_at, 'H:i d/m/Y') }}
									</div>
								</div>
							</div>
							<div class="central-meta item rounded-5 border-share">
								<div class="user-post">
									<div class="friend-info">
										<figure>
										<img src="{{ asset('storage/images/' . $post->user->avatar) }}" alt="">
										</figure>
										<div class="friend-name">
											<ins><a href="{{ url('time-line') . '/user-profile/' . $post->user->user_id }}" title="">
													{{ ucwords($post->user->last_name . ' ' . $post->user->first_name) }}
												</a></ins>

											<span>published:
												{{ date_format($post->created_at, 'H:i d/m/Y') }}</span>
										</div>
										<div class="post-meta">
											<!-- <img src="images/resources/user-post.jpg" alt=""> -->
											<!-- Print content if not null -->
											<!-- {{ $post->id }} -->
											@if (!empty($post->content))
											<div class="description pb-2">
												{{ $post->content }}
											</div>
											@endif


											@php
											$totalMedia = count($post->image) + count($post->video);

											@endphp
											<!-- Display imgs  -->
											@if ($totalMedia != 0)
											<div class="container-fluied">
												<div class="row">
													@foreach ($post->image as $img)
													<a href="{{ asset('storage/images/' . $img->url) }}" class="{{ $loop->index < 3 ? 'col-4 p-1' : 'd-none' }} {{ $loop->index == 2 ? 'position-relative' : '' }}" data-fancybox="gallery{{ $post->id }}" data-caption="{{ $post->user->last_name . ' ' . $post->user->first_name . '\'s images' }}">
														<img src="{{ asset('storage/images/' . $img->url) }}" alt="failed to display" class="d-block" />
														@if ($loop->index == 2 && $loop->count - 3 != 0)
														<div style='position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content: center;align-items: center;font-size:2rem'>
															+{{ $totalMedia - 2 }}
														</div>
														@endif
													</a>
													@endforeach

													@if (!empty($post->video) && count($post->video) != 0)
													@foreach ($post->video as $video)
													<a href="{{ asset('storage/videos/' . $video->url) }}" data-fancybox="gallery{{ $post->id }}" style="max-height:50rem" class="{{ count($post->image) > 3 || $loop->iteration + count($post->image) > 3 ? 'd-none' : 'col-3 p-1' }}{{ count($post->image) > 3 || $loop->iteration + count($post->image) == 3 ? ' position-relative' : '' }}" style="display:block;height: 100%">
														<video controls style="height:100%;width:100%" src="{{ asset('storage/videos/' . $video->url) }}"></video>
														@if (count($post->image) > 3 || $loop->iteration + count($post->image) == 3)
														<div style='position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content: center;align-items: center;font-size:2rem'>
															+{{ $totalMedia - 2 }}
														</div>
														@endif
													</a>
													@endforeach
													@endif
												</div>

											</div>
											@endif



											<!-- views, like,dislike, comment, share -->
											<div class="we-video-info border-top my-3">
												<ul>
													<li>
														<span class="like" data-toggle="tooltip" title="like">
															<i class="ti-heart"></i>
															<ins>2.2k</ins>
														</span>
													</li>
													<li>
														<span class="dislike" data-toggle="tooltip" title="dislike">
															<i class="ti-heart-broken"></i>
															<ins>200</ins>
														</span>
													</li>
													<li>
														<span class="comment" data-toggle="tooltip" title="Comments">
															<i class="fa fa-comments-o"></i>
															<ins>{{ count($post->comments) }}</ins>
														</span>
													</li>

													@if (Auth::user()->user_id != $post->user_id_fk)
													<li class="social-media">
														<x-share-btn>{{ $post->id }}</x-share-btn>
													</li>
													@endif

												</ul>
											</div>

										</div>
									</div>
									<div class="coment-area p-1 post-cmt post-cmt-{{ $post->id }}">
										<ul class="we-comet comment">
											<!-- hiện commment cho mỗi bình luận tại đây -->
											@php
											$count = 0;
											@endphp
											@foreach ($post->comments as $comment)
											@php
											$flag = $count >= 3 ? true : false;
											@endphp
											<x-comment :commenter=$comment :isHidden=$flag></x-comment>
											@php
											$count++;
											@endphp
											@endforeach

										</ul> <!-- list of comments-->
										<ul class="we-comet">
											<li>
												@php
												$count_of_cmt = count($post->comments);
												@endphp
												@if ($count_of_cmt > 3)
												<a title="" class="showmore underline btnshow-{{ $post->id }}">more
													comments</a>
												@endif
											</li>
											<li class="post-comment">
												<div class="comet-avatar">
													<x-user-avt>
													</x-user-avt>
												</div>
												<div class="post-comt-box {{ $post->id }}">
													<form method="post" action="comment" id="form-{{ $post->id }}" enctype="multipart/form-data">
														@csrf
														@method('POST')
														<input type="hidden" name="post_id" value="{{ $post->id }}">
														<textarea placeholder="Post your comment" name="content"></textarea>
														<div class="add-smiles">
															<span class="em em-expressionless" title="add icon"></span>
														</div>
														<div class="attachments">
															<ul class="m-0 d-flex align-items-center">
																<li>
																	<i class="fa fa-image"></i>
																	<label class="fileContainer">
																		<input type="file" name="imgFileSelected[]" id="imgFileSelected" multiple accept="image/*">
																	</label>
																</li>
																<li>
																	<i class="fa fa-video-camera"></i>
																	<label class="fileContainer">
																		<input type="file" name="vdFileSelected[]" id="vdFileSelected" multiple accept="video/*">
																	</label>
																</li>

																<li>
																	<button type="submit" class="bg-dark btnComment" value={{ $post->id }}>Post</button>
																</li>
															</ul>
														</div>
														{{-- <div class="smiles-bunch">
																			<i class="em em---1"></i>
																			<i class="em em-smiley"></i>
																			<i class="em em-anguished"></i>
																			<i class="em em-laughing"></i>
																			<i class="em em-angry"></i>
																			<i class="em em-astonished"></i>
																			<i class="em em-blush"></i>
																			<i class="em em-disappointed"></i>
																			<i class="em em-worried"></i>
																			<i class="em em-kissing_heart"></i>
																			<i class="em em-rage"></i>
																			<i class="em em-stuck_out_tongue"></i>
																		</div> --}}
													</form>
												</div>

											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						@endif
						@php
						if (isset($firstPost) && $firstPost == true) {
						$firstPost = false;
						}
						@endphp
						@endforeach
					</div>					

				</div><!-- centerl meta -->
							<div class="col-lg-3">
								<aside class="sidebar static">	
								<div class="widget">
										<h4 class="widget-title">Description</h4>
										<div class="group-description">
											<h6 class="">{{ $group->description }}</h6>
										</div>
									</div>								
									<div class="widget">
										<h4 class="widget-title">Members</h4>
										<ul class="invition">
											@foreach($members as $member)								
											<li>
												<figure>
													<img style="width: 45px; height: 45px; overflow: hidden" src="{{ asset('storage/images/' . $member->user->avatar) }}" alt="">
												</figure>
												<div class="friend-meta">
													<h4><a href="{{ url('group-members') }}" class="underline" title="">{{$member->user->first_name.' '.$member->user->last_name }}</a></h4>
													<a href="#" title="" class="invite" data-ripple="">
														@if($member->role_id_fk == 0) Super admin
														@elseif($member->role_id_fk == 1) Admin
														@else Member
														@endif
													</a>
												</div>
											</li>
											@endforeach									
										</ul>
									</div>
								
								</aside>
							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>
	
	@endsection