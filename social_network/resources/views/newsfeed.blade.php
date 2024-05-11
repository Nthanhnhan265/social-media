<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;
?>
@extends('layouts.app')
@section('content')
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
											<a href="{{ url('timeline-friends/'.Auth::user()->user_id) }}" title="">friends</a>
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
                                    <div class="widget stick-widget">
                                        <h4 class="widget-title">Who's follownig</h4>
                                        <ul class="followers">
                                            <li>
                                                <figure><img src="images/resources/friend-avatar2.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="{{ url('time-line') }}" title="">Kelly Bill</a></h4>
                                                    <a href="#" title="" class="underline">Add Friend</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar4.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="{{ url('time-line') }}" title="">Issabel</a></h4>
                                                    <a href="#" title="" class="underline">Add Friend</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar6.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="{{ url('time-line') }}" title="">Andrew</a></h4>
                                                    <a href="#" title="" class="underline">Add Friend</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar8.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="{{ url('time-line') }}" title="">Sophia</a></h4>
                                                    <a href="#" title="" class="underline">Add Friend</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar3.jpg" alt="">
                                                </figure>
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
                                </div><!-- add post new box #loadpost-->
                                <div class="loadMore">
                                    @foreach ($posts as $post)
                                        <!-- loop to find owner's post -->

                                        <div class="central-meta item rounded-5">
                                            <div class="user-post">
                                                <div class="friend-info">
                                                    <figure>
                                                        <img src="{{ asset('images/resources/' . $post->user->avatar) }}"
                                                            alt="">
                                                    </figure>
                                                    <div class="friend-name">
                                                        <ins><a href="{{ url('time-line') . '/user-profile/' . $post->user->user_id }}"
                                                                title="">
                                                                {{ $post->user->last_name . ' ' . $post->user->first_name }}
                                                            </a></ins>

                                                        <span>published: {{ $post->created_at }}</span>
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
																<a href="{{asset('storage/images/'.$img->url)}}" class="{{$loop->index<3? 'col-4 p-1': 'd-none'}} {{$loop->index == 2 ? 'position-relative': ''}}"  data-fancybox="gallery{{$post->id}}" data-caption="{{$post->user->last_name.' '.$post->user->first_name.'\'s images' }}">
																	<img src="{{asset('storage/images/'.$img->url)}}" alt="failed to display" class="d-block" />
																	@if($loop->index == 2 && $loop->count - 3!=0)
																	 <div style='position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content: center;align-items: center;font-size:2rem'>
																		 +{{$totalMedia - 2}}
																	</div>
																	@endif
																</a>
																@endforeach
	
																@if(!empty($post->video) && count($post->video) !=0 )
																	@foreach ($post->video as $video)
																	<a href="{{asset('storage/videos/'.$video->url)}}" data-fancybox="gallery{{$post->id}}" style="max-height:50rem" class="{{
																		count($post->image)>3 || $loop->iteration + count($post->image) > 3?'d-none':'col-3 p-1'}}{{
																		count($post->image)>3 || $loop->iteration + count($post->image) == 3?' position-relative':''}}" style="display:block;height: 100%">
																		<video controls style="height:100%;width:100%" src="{{asset('storage/videos/'.$video->url)}}" ></video>
																		@if(count($post->image)>3 || $loop->iteration + count($post->image) == 3)
																		 <div style='position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content: center;align-items: center;font-size:2rem'>
																			 +{{$totalMedia - 2}}
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
																<ins>{{count($post->comments)}}</ins>
															</span>
														</li>
														<li class="social-media">
															<x-share-btn>{{ $post->id }}</x-share-btn>
														</li>
                                                
													</ul>
												</div>

                                                    </div>
                                                </div>
                                                <div class="coment-area p-1">
                                                    <ul class="we-comet">
                                                        <!-- hiện commment cho mỗi bình luận tại đây -->
                                                        @foreach ($post->comments as $comment)
                                                            <x-comment :commenter=$comment></x-comment>
                                                        @endforeach
                                                        <li>
                                                            <a href="#" title=""
                                                                class="showmore underline">more comments</a>
                                                        </li>
                                                        <li class="post-comment">
                                                            <div class="comet-avatar">
                                                                <x-user-avt>
                                                                </x-user-avt>
                                                            </div>
                                                            <div class="post-comt-box">
                                                                <form method="post" action = "comment"
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
                                                                        <ul class="m-0 d-flex">
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
                                                                                    class="bg-dark">Post</button>
                                                                            </li>
                                                                        </ul>
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
												</li>
											</ul>
										</div>
									</div>
								</div>
								@endforeach
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
											<!-- Tab panes -->
											<div class="tab-content">
												<div class="tab-pane active fade show " id="link1">
													<span><i class="ti-heart"></i>884</span>
													<a href="#" title="weekly-likes">35 new likes this week</a>
													<div class="users-thumb-list">
														<a href="#" title="Anderw" data-toggle="tooltip">
															<img src="images/resources/userlist-1.jpg" alt="">
														</a>
														<a href="#" title="frank" data-toggle="tooltip">
															<img src="images/resources/userlist-2.jpg" alt="">
														</a>
														<a href="#" title="Sara" data-toggle="tooltip">
															<img src="images/resources/userlist-3.jpg" alt="">
														</a>
														<a href="#" title="Amy" data-toggle="tooltip">
															<img src="images/resources/userlist-4.jpg" alt="">
														</a>
														<a href="#" title="Ema" data-toggle="tooltip">
															<img src="images/resources/userlist-5.jpg" alt="">
														</a>
														<a href="#" title="Sophie" data-toggle="tooltip">
															<img src="images/resources/userlist-6.jpg" alt="">
														</a>
														<a href="#" title="Maria" data-toggle="tooltip">
															<img src="images/resources/userlist-7.jpg" alt="">
														</a>
													</div>
												</div>
												<div class="tab-pane fade" id="link2">
													<span><i class="ti-eye"></i>440</span>
													<a href="#" title="weekly-likes">440 new views this week</a>
													<div class="users-thumb-list">
														<a href="#" title="Anderw" data-toggle="tooltip">
															<img src="images/resources/userlist-1.jpg" alt="">
														</a>
														<a href="#" title="frank" data-toggle="tooltip">
															<img src="images/resources/userlist-2.jpg" alt="">
														</a>
														<a href="#" title="Sara" data-toggle="tooltip">
															<img src="images/resources/userlist-3.jpg" alt="">
														</a>
														<a href="#" title="Amy" data-toggle="tooltip">
															<img src="images/resources/userlist-4.jpg" alt="">
														</a>
														<a href="#" title="Ema" data-toggle="tooltip">
															<img src="images/resources/userlist-5.jpg" alt="">
														</a>
														<a href="#" title="Sophie" data-toggle="tooltip">
															<img src="images/resources/userlist-6.jpg" alt="">
														</a>
														<a href="#" title="Maria" data-toggle="tooltip">
															<img src="images/resources/userlist-7.jpg" alt="">
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- page like widget -->
							
								<div class="widget friend-list stick-widget">
									<h4 class="widget-title">Friends</h4>
									<div id="searchDir"></div>
									<ul id="people-list" class="friendz-list">
										@foreach($friends as $friend)
										<x-friendlist :friend=$friend></x-friendlist>

										@endforeach
										
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
													<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
													<div class="notification-event">
														<span class="chat-message-item">
															Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
														</span>
														<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
													</div>
												</li>
												<li class="you">
													<div class="chat-thumb"><img src="images/resources/chatlist2.jpg" alt=""></div>
													<div class="notification-event">
														<span class="chat-message-item">
															Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
														</span>
														<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
													</div>
												</li>
												<li class="me">
													<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
													<div class="notification-event">
														<span class="chat-message-item">
															Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
														</span>
														<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
													</div>
												</li>
												<li class="me">
													<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
													<div class="notification-event">
														<span class="chat-message-item">
															Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
														</span>
														<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
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
												<button ty
												="submit"></button>
											</form>
										</div>
									</div>
								</div><!-- friends list sidebar -->
							</aside>
						</div><!-- sidebar -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
