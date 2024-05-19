<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;
?>
@extends('layouts.app')
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
	<div class="gap gray-bg pt-2">
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
											<a href="{{ url('timeline-friends/' . Auth::user()->user_id) }}" title="">friends</a>
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
										{{-- $activityHistorys --}}
										@foreach ($postActivityHistors as $postActivityHistor)
										<li>
											<div class="activity-meta">
												<i>{{ $postActivityHistor->created_at }}</i> 
												<span><a href="#" title="">Posted your status.
														“{{ $postActivityHistor->content }}”</a></span>
											</div>
										</li>
										@endforeach

										@foreach ($commentsActivityHistorys as $commentsActivityHistory)
										<li>
											<div class="activity-meta">
												<i>{{ $commentsActivityHistory->created_at }}</i>
												<span><a href="#" title="">Commented on Video posted
													</a></span>
												<h6>by <a href="{{ url('time-line') }}">
														{{ $commentsActivityHistory->user_first_name }}
														{{ $commentsActivityHistory->user_last_name }} </a></h6>
											</div>
										</li>
										@endforeach

										@foreach ($shareActivityHistorys as $shareActivityHistory)
										<li>
											<div class="activity-meta">
												<i>{{ $shareActivityHistory->created_at }}</i>
												<span><a href="#" title="">Share a @if ($shareActivityHistory->status === 0)
														privary
														@else
														public
														@endif
														video on your timeline.</a></span>
											</div>
										</li>
										@endforeach
									</ul>
								</div><!-- recent activites -->
								{{-- <div class="widget stick-widget">
                                        <h4 class="widget-title">Who's follownig</h4>
                                        <ul class="followers">
                                            <li>
                                                <figure><img src="images/resources/friend-avatar2.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="{{ url('time-line') }}" title="">Kelly Bill</a></h4>

								<a href="#" title="" class="underline">Add Friend</a>
						</div>

					</div><!-- who's following --> --}}
					</aside>
				</div><!-- sidebar -->
				<div class="col-lg-6">
					<div class="central-meta">
						<div class="new-postbox">
							<figure>
								<?php
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
					<?php 
						$countPost = 0; 
						$MAX_POST = 3; 
					?> 
					<div class="loadMore" id="news-container">
						@foreach ($posts as $post)
						{{-- Kiểm tra trong mảng và render ra cái phù hợp --}}
						@if (class_basename($post) === 'Posts')
						{{-- @if (false)  --}}
						<div class="central-meta newpost item {{$countPost >$MAX_POST? 'd-none': ''}} rounded-5 {{isset($firstPost) && $firstPost == true ? 'firstPost': ''}}">
							<div class="user-post">
								<div class="friend-info">
									<figure>
										<img src="{{ asset('storage/images/' . $post->user->avatar) }}" alt="" class="border-avt">
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
						<div class="sharer newpost {{$countPost >$MAX_POST? 'd-none': ''}} {{isset($firstPost) && $firstPost == true ? 'firstPost': ''}}">
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
												<div class="comet-avatar">
												<div class="parent" style="width: 2rem; height: 2rem; border-radius: 50%;overflow:hidden">
													<x-user-avt>
													</x-user-avt>
												</div>
													
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
						$countPost++; 
					 
						@endphp
						@endforeach
					</div>
					<div style="height:1rem">
						<div id="loading-spinner" >
							<img src="{{asset('images/ZKZg.gif')}}" alt="Loading..." />
						</div>

					</div>

				</div><!-- centerl meta -->
				<div class="col-lg-3">
					<aside class="sidebar static">
						<div class="widget">
							<h4 class="widget-title">Your page</h4>
							<div class="your-page">
								<figure>
									<a href="#" title=""><img src="images/resources/friend-avatar9.jpg" alt=""></a>
								</figure>
								<div class="page-meta">
									<a href="#" title="" class="underline">My page</a>
									<span><i class="ti-comment"></i><a href="{{ url('insight') }}" title="">Messages <em>9</em></a></span>
									<span><i class="ti-bell"></i><a href="{{ url('insight') }}" title="">Notifications <em>2</em></a></span>
								</div>
								<div class="page-likes">
									<ul class="nav nav-tabs likes-btn">
										<li class="nav-item"><a class="active" href="#link1" data-toggle="tab">likes</a></li>
										<li class="nav-item"><a class="" href="#link2" data-toggle="tab">views</a></li>
									</ul>

								</div>
							</div>
						</div>
						<div class="widget friend-list stick-widget">
							<h4 class="widget-title">Friends</h4>
							<div id="searchDir"></div>
							<ul id="people-list" class="friendz-list">
								@foreach ($friends as $friend)
								<x-friendlist :friend=$friend></x-friendlist>
								@endforeach

							</ul>

						</div><!-- friends list sidebar -->
					</aside>
				</div>
			</div>
</section>
@endsection