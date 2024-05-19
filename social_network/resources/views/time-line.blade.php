
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
							@if(auth()->check() && $user->user_id == auth()->user()->user_id)
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
                <x-loadposts :posts=$posts></x-loadposts>

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