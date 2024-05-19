<?php
	use Illuminate\Support\Facades\Auth;
	use App\Models\Follow; 
	use Illuminate\Support\Str;
	use Illuminate\Support\Facades\Session;
	Session::put("url",url()->current());
?>
@extends('layouts.app')
@section('content')

{{-- top area uses component 'personal_nav' and pass 2 arguments,
	 (note: don't SPACE after attributes, ex: :user = $friend (error))
--}}
<!-- top area -->
<x-personal_nav :user=$user :friend=$friend></x-personal_nav>

<section>
	<div class="gap gray-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="row" id="page-contents">
						<div class="col-lg-3">
							<aside class="sidebar static">
								<!-- <div class="widget">
									<h4 class="widget-title">Socials</h4>
									<ul class="socials">
										<li class="facebook">
											<a title="" href="#"><i class="fa fa-facebook"></i> <span>facebook</span>
												<ins>45 likes</ins></a>
										</li>
										<li class="twitter">
											<a title="" href="#"><i class="fa fa-twitter"></i>
												<span>twitter</span><ins>25 likes</ins></a>
										</li>
										<li class="google">
											<a title="" href="#"><i class="fa fa-google"></i> <span>google</span><ins>35
													likes</ins></a>
										</li>
									</ul>
								</div> -->
								<!-- <div class="widget">
										<h4 class="widget-title">Shortcuts</h4>
										<ul class="naves">
											<li>
												<i class="ti-clipboard"></i>
												<a href="newsfeed" title="">News feed</a>
											</li>
											<li>
												<i class="ti-mouse-alt"></i>
												<a href="inbox" title="">Inbox</a>
											</li>
											<li>
												<i class="ti-files"></i>
												<a href="fav-page" title="">My pages</a>
											</li>
											<li>
												<i class="ti-user"></i>
												<a href="timeline-friends" title="">friends</a>
											</li>
											<li>
												<i class="ti-image"></i>
												<a href="timeline-photos" title="">images</a>
											</li>
											<li>
												<i class="ti-video-camera"></i>
												<a href="timeline-videos" title="">videos</a>
											</li>
											<li>
												<i class="ti-comments-smiley"></i>
												<a href="messages" title="">Messages</a>
											</li>
											<li>
												<i class="ti-bell"></i>
												<a href="notifications" title="">Notifications</a>
											</li>
											<li>
												<i class="ti-share"></i>
												<a href="people-nearby" title="">People Nearby</a>
											</li>
											<li>
												<i class="fa fa-bar-chart-o"></i>
												<a href="insights" title="">insights</a>
											</li>
											<li>
												<i class="ti-power-off"></i>
												<a href="landing" title="">Logout</a>
											</li>
										</ul>
									</div>Shortcuts -->
								<div class="widget">
									<h4 class="widget-title">Recent Activity</h4>
									<ul class="activitiez">
										<li>
											<div class="activity-meta">
												<i>10 hours Ago</i>
												<span><a href="#" title="">Commented on Video posted </a></span>
												<h6>by <a href="{{ url('newsfeed') }}">black demon.</a></h6>
											</div>
										</li>
										<li>
											<div class="activity-meta">
												<i>30 Days Ago</i>
												<span><a href="{{ url('newsfeed') }}" title="">Posted your status.
														“Hello guys, how are you?”</a></span>
											</div>
										</li>
										<li>
											<div class="activity-meta">
												<i>2 Years Ago</i>
												<span><a href="#" title="">Share a video on her timeline.</a></span>
												<h6>"<a href="{{ url('newsfeed') }}">you are so funny mr.been.</a>"</h6>
											</div>
										</li>
									</ul>
								</div><!-- recent activites -->
								<div class="widget stick-widget">
									<h4 class="widget-title">Who's follownig</h4>
									<ul class="followers">
										<li>
											<figure><img src="images/resources/friend-avatar2.jpg" alt=""></figure>
											<div class="friend-meta">
												<h4><a href="{{ url('time-line') }}" title="">Kelly Bill</a></h4>
												<a href="#" title="" class="underline">Add Friend</a>
											</div>
										</li>
										<li>
											<figure><img src="images/resources/friend-avatar4.jpg" alt=""></figure>
											<div class="friend-meta">
												<h4><a href="{{ url('time-line') }}" title="">Issabel</a></h4>
												<a href="#" title="" class="underline">Add Friend</a>
											</div>
										</li>
										<li>
											<figure><img src="images/resources/friend-avatar6.jpg" alt=""></figure>
											<div class="friend-meta">
												<h4><a href="{{ url('time-line') }}" title="">Andrew</a></h4>
												<a href="#" title="" class="underline">Add Friend</a>
											</div>
										</li>
										<li>
											<figure><img src="images/resources/friend-avatar8.jpg" alt=""></figure>
											<div class="friend-meta">
												<h4><a href="{{ url('time-line') }}" title="">Sophia</a></h4>
												<a href="#" title="" class="underline">Add Friend</a>
											</div>
										</li>
										<li>
											<figure><img src="images/resources/friend-avatar3.jpg" alt=""></figure>
											<div class="friend-meta">
												<h4><a href="{{ url('time-line') }}" title="">Allen</a></h4>
												<a href="#" title="" class="underline">Add Friend</a>
											</div>
										</li>
									</ul>
								</div><!-- who's following -->
							</aside>
						</div><!-- sidebar -->
						<div class="col-lg-6">
							<div class="loadMore">
								<div class="central-meta item">
									<div class="new-postbox">
										<figure>
											<img src="{{asset('storage/images/' . $user->avatar)}}" alt="">
										</figure>
										<div class="newpst-input">
										<form method="post" action="{{ url('post') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('post')
                                                <textarea rows="2" name="content" placeholder="write something"></textarea>
                                                <div class="attachments">
                                                    <ul>
                                                        <!-- ###Task: viet js cho size input -->
                                                        <li>
                                                            <i class="fa fa-image"></i>
                                                            <label class="fileContainer">
                                                                <input type="file" name="imgFileSelected[]"
                                                                    id="imgFileSelected" multiple accept="image/*">
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-video-camera"></i>
                                                            <label class="fileContainer">
                                                                <input type="file" name="vdFileSelected[]"
                                                                    id="vdFileSelected" multiple accept="video/*">
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
								</div><!-- add post new box -->
								@foreach ($posts as $post)
										{{-- Kiểm tra trong mảng và render ra cái phù hợp --}}
										@if (class_basename($post) === 'Posts')
											{{-- @if (false)  --}}
											<div class="central-meta item rounded-5">
												<div class="user-post">
													<div class="friend-info">
														<figure>
															<img src="{{ asset('storage/images/' . $post->user->avatar) }}"
																alt="">
														</figure>
														<div class="friend-name">
															
														@if(auth()->check() && $user->user_id == auth()->user()->user_id)
														<div class="dropdown" style="position: absolute; right: 5%;">
																<button class="btn  dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: none;background:#f4f2f2">
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
															<ins><a href="{{ url('time-line') . '/user-profile/' . $post->user->user_id }}"
																	title="">
																	{{ ucwords($post->user->last_name . ' ' . $post->user->first_name) }}
																</a></ins>
								
															<span>published:
																{{ date_format($post->created_at, 'H:i d/m/Y') }}</span>
														</div>
														<div class="post-meta">
															<!-- <img src="images/resources/user-post.jpg" alt=""> -->
															<!-- Print content if not null -->
															<!-- {{ $post->id }} -->
															@php  
															$content = $post->content;
															@endphp
															<x-format_string :content="$content"></x-format_string>

								
															@php
																$totalMedia = count($post->image) + count($post->video);
								
															@endphp
															<!-- Display imgs  -->
															@if ($totalMedia != 0)
																<div class="container-fluied">
																	<div class="row">
																		@foreach ($post->image as $img)
																			<a href="{{ asset('storage/images/' . $img->url) }}"
																				class="{{ $loop->index < 3 ? 'col-4 p-1' : 'd-none' }} {{ $loop->index == 2 ? 'position-relative' : '' }}"
																				data-fancybox="gallery{{ $post->id }}"
																				data-caption="{{ $post->user->last_name . ' ' . $post->user->first_name . '\'s images' }}">
																				<img src="{{ asset('storage/images/' . $img->url) }}"
																					alt="failed to display"
																					class="d-block" />
																				@if ($loop->index == 2 && $loop->count - 3 != 0)
																					<div
																						style='position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content: center;align-items: center;font-size:2rem'>
																						+{{ $totalMedia - 2 }}
																					</div>
																				@endif
																			</a>
																		@endforeach
								
																		@if (!empty($post->video) && count($post->video) != 0)
																			@foreach ($post->video as $video)
																				<a href="{{ asset('storage/videos/' . $video->url) }}"
																					data-fancybox="gallery{{ $post->id }}"
																					style="max-height:50rem"
																					class="{{ count($post->image) > 3 || $loop->iteration + count($post->image) > 3 ? 'd-none' : 'col-3 p-1' }}{{ count($post->image) > 3 || $loop->iteration + count($post->image) == 3 ? ' position-relative' : '' }}"
																					style="display:block;height: 100%">
																					<video controls
																						style="height:100%;width:100%"
																						src="{{ asset('storage/videos/' . $video->url) }}"></video>
																					@if (count($post->image) > 3 || $loop->iteration + count($post->image) == 3)
																						<div
																							style='position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content: center;align-items: center;font-size:2rem'>
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
																		<span class="like" data-toggle="tooltip"
																			title="like">
																			<i class="ti-heart"></i>
																			<ins>2.2k</ins>
																		</span>
																	</li>
																	<li>
																		<span class="dislike" data-toggle="tooltip"
																			title="dislike">
																			<i class="ti-heart-broken"></i>
																			<ins>200</ins>
																		</span>
																	</li>
																	<li>
																		<span class="comment" data-toggle="tooltip"
																			title="Comments">
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
																	<a title=""
																		class="showmore underline btnshow-{{ $post->id }}">more
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
																	<form method = "post" action="comment"
																		id="form-{{ $post->id }}"
																		enctype="multipart/form-data">
																		@csrf
																		@method('POST')
																		<input type="hidden" name="post_id"
																			value="{{ $post->id }}">
																		<textarea placeholder="Post your comment" name = "content"></textarea>
																		<div class="add-smiles">
																			<span class="em em-expressionless"
																				title="add icon"></span>
																		</div>
																		<div class="attachments">
																			<ul class="m-0 d-flex align-items-center">
																				<li>
																					<i class="fa fa-image"></i>
																					<label class="fileContainer">
																						<input type="file"
																							name="imgFileSelected[]"
																							id="imgFileSelected" multiple
																							accept="image/*">
																					</label>
																				</li>
																				<li>
																					<i class="fa fa-video-camera"></i>
																					<label class="fileContainer">
																						<input type="file"
																							name="vdFileSelected[]"
																							id="vdFileSelected" multiple
																							accept="video/*">
																					</label>
																				</li>
								
																				<li>
																					<button type="submit"
																						class="bg-dark btnComment"
																						value={{ $post->id }}>Post</button>
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
												
											<div class="sharer">
												<div class="user-shared"
												
												>
												<div class="avatar">
													<img src="{{asset("storage/images/$sharer->avatar")}}" alt="error">

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
																<img src="{{ asset('storage/images/' . $post->user->avatar) }}"
																	alt="">
															</figure>
															<div class="friend-name">
																<ins><a href="{{ url('time-line') . '/user-profile/' . $post->user->user_id }}"
																		title="">
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
																				<a href="{{ asset('storage/images/' . $img->url) }}"
																					class="{{ $loop->index < 3 ? 'col-4 p-1' : 'd-none' }} {{ $loop->index == 2 ? 'position-relative' : '' }}"
																					data-fancybox="gallery{{ $post->id }}"
																					data-caption="{{ $post->user->last_name . ' ' . $post->user->first_name . '\'s images' }}">
																					<img src="{{ asset('storage/images/' . $img->url) }}"
																						alt="failed to display"
																						class="d-block" />
																					@if ($loop->index == 2 && $loop->count - 3 != 0)
																						<div
																							style='position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content: center;align-items: center;font-size:2rem'>
																							+{{ $totalMedia - 2 }}
																						</div>
																					@endif
																				</a>
																			@endforeach
									
																			@if (!empty($post->video) && count($post->video) != 0)
																				@foreach ($post->video as $video)
																					<a href="{{ asset('storage/videos/' . $video->url) }}"
																						data-fancybox="gallery{{ $post->id }}"
																						style="max-height:50rem"
																						class="{{ count($post->image) > 3 || $loop->iteration + count($post->image) > 3 ? 'd-none' : 'col-3 p-1' }}{{ count($post->image) > 3 || $loop->iteration + count($post->image) == 3 ? ' position-relative' : '' }}"
																						style="display:block;height: 100%">
																						<video controls
																							style="height:100%;width:100%"
																							src="{{ asset('storage/videos/' . $video->url) }}"></video>
																						@if (count($post->image) > 3 || $loop->iteration + count($post->image) == 3)
																							<div
																								style='position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content: center;align-items: center;font-size:2rem'>
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
																			<span class="like" data-toggle="tooltip"
																				title="like">
																				<i class="ti-heart"></i>
																				<ins>2.2k</ins>
																			</span>
																		</li>
																		<li>
																			<span class="dislike" data-toggle="tooltip"
																				title="dislike">
																				<i class="ti-heart-broken"></i>
																				<ins>200</ins>
																			</span>
																		</li>
																		<li>
																			<span class="comment" data-toggle="tooltip"
																				title="Comments">
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
																		<a title=""
																			class="showmore underline btnshow-{{ $post->id }}">more
																			comments</a>
																	@endif
																</li>
																<li class="post-comment">
																	<div class="comet-avatar">
																		<x-user-avt>
																		</x-user-avt>
																	</div>
																	<div class="post-comt-box {{ $post->id }}">
																		<form method = "post" action="comment"
																			id="form-{{ $post->id }}"
																			enctype="multipart/form-data">
																			@csrf
																			@method('POST')
																			<input type="hidden" name="post_id"
																				value="{{ $post->id }}">
																			<textarea placeholder="Post your comment" name = "content"></textarea>
																			<div class="add-smiles">
																				<span class="em em-expressionless"
																					title="add icon"></span>
																			</div>
																			<div class="attachments">
																				<ul class="m-0 d-flex align-items-center">
																					<li>
																						<i class="fa fa-image"></i>
																						<label class="fileContainer">
																							<input type="file"
																								name="imgFileSelected[]"
																								id="imgFileSelected" multiple
																								accept="image/*">
																						</label>
																					</li>
																					<li>
																						<i class="fa fa-video-camera"></i>
																						<label class="fileContainer">
																							<input type="file"
																								name="vdFileSelected[]"
																								id="vdFileSelected" multiple
																								accept="video/*">
																						</label>
																					</li>
									
																					<li>
																						<button type="submit"
																							class="bg-dark btnComment"
																							value={{ $post->id }}>Post</button>
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
									@endforeach
							 

							</div>
						</div><!-- centerl meta -->
						<div class="col-lg-3">
							<aside class="sidebar static">
								<div class="widget">

									<h4 class="widget-title">Information Basic</h4>

									<div class="your-page">

									<div class="page-meta" style="font-family: Arial, sans-serif; color: #333; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width:100%;">
									<span style="font-size: 14px; color: #777; display: flex; align-items: center; margin-bottom: 5px;">
        									<i class="fa-solid fa-info-circle" style="margin-right: 5px; color: #007bff;"></i>
        									DESCRIPTION
  											  </span>
										@if (!empty($user->description))
										<a href="#" title="" class="underline" style="word-wrap: break-word; display: block; font-size: 16px; color: #007bff; text-decoration: none; margin-bottom: 10px; margin-left:1.2rem">
											{{$user->description}}
										</a>
										@endif
										
										<span style="display: flex; align-items: center; margin-bottom: 10px; font-size: 14px; color: #555;">
											<i class="fa-solid fa-cake-candles" style="padding-right: 5px; color: #ff6347;"></i>
											<a href="{{ url('insight') }}" title="" style="color: inherit; text-decoration: none;">
											{{ date_format(date_create($user->DOB), 'M d, Y') }}
											</a>
										</span>

										<span style="display: flex; align-items: center; font-size: 14px; color: #555; text-overflow:clip">
											<i class="fa-solid fa-envelope" style="padding-right: 5px; color: #1e90ff;"></i>
											<a href="#" title="" style="color: inherit; text-decoration: none;">
												{{$user->email}}
											</a>
										</span>
									</div>
								</div><!-- page like widget -->
								<!-- <div class="widget">
									<div class="banner medium-opacity bluesh">
										<div class="bg-image"
											style="background-image: url(images/resources/baner-widgetbg.jpg)"></div>
										<div class="baner-top">
											<span><img alt="" src="images/book-icon.png"></span>
											<i class="fa fa-ellipsis-h"></i>
										</div>
										<div class="banermeta">
											<p>
												create your own favourit page.
											</p>
											<span>like them all</span>
											<a data-ripple="" title="" href="#">start now!</a>
										</div>
									</div>
								</div> -->
								<div class="widget friend-list stick-widget">
									<h4 class="widget-title">Friends</h4>
									<div id="searchDir"></div>
									<ul id="people-list" class="friendz-list">

									</ul>
									<div class="chat-box">
										<div class="chat-head">
											<span class="status f-online"></span>
											<h6>Bucky Barnes</h6>
											<div class="more">
												<span><i class="ti-more-alt"></i></span>
												<span class="close-mesage"><i class="ti-close"></i></span>
											</div>
										</div>
										<div class="chat-list">
											<ul>
												<li class="me">
													<div class="chat-thumb"><img src="images/resources/chatlist1.jpg"
															alt=""></div>
													<div class="notification-event">
														<span class="chat-message-item">
															Hi James! Please remember to buy the food for tomorrow! I’m
															gonna be handling the gifts and Jake’s gonna get the drinks
														</span>
														<span class="notification-date"><time
																datetime="2004-07-24T18:18"
																class="entry-date updated">Yesterday at
																8:10pm</time></span>
													</div>
												</li>
												<li class="you">
													<div class="chat-thumb"><img src="images/resources/chatlist2.jpg"
															alt=""></div>
													<div class="notification-event">
														<span class="chat-message-item">
															Hi James! Please remember to buy the food for tomorrow! I’m
															gonna be handling the gifts and Jake’s gonna get the drinks
														</span>
														<span class="notification-date"><time
																datetime="2004-07-24T18:18"
																class="entry-date updated">Yesterday at
																8:10pm</time></span>
													</div>
												</li>
												<li class="me">
													<div class="chat-thumb"><img src="images/resources/chatlist1.jpg"
															alt=""></div>
													<div class="notification-event">
														<span class="chat-message-item">
															Hi James! Please remember to buy the food for tomorrow! I’m
															gonna be handling the gifts and Jake’s gonna get the drinks
														</span>
														<span class="notification-date"><time
																datetime="2004-07-24T18:18"
																class="entry-date updated">Yesterday at
																8:10pm</time></span>
													</div>
												</li>
											</ul>
											<form class="text-box">
												<textarea placeholder="Post enter to post..."></textarea>
												<div class="add-smiles">
													<span title="add icon" class="em em-expressionless"></span>
												</div>
												<div class="smiles-bunch">
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
												</div>
												<button type="submit"></button>
											</form>
										</div>
									</div>
								</div>
								<!-- friends list sidebar -->

							</aside>
						</div><!-- sidebar -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection<!-- responsive header -->