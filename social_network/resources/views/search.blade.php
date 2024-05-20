<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;
?>
@extends('layouts.app')
@section('content')
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
												<span><a href="#" title="">Posted your status. “Hello guys, how are
														you?”</a></span>
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
						

							<!-- resources/views/search.blade.php -->

							
							<div class="container">
   				 <!-- Tabs for Groups, Posts, and Everyone -->
   				 <div class="tabs">
					<button class="tab-link active" onclick="openTab(event, 'Groups')">Groups</button>
					<button class="tab-link" onclick="openTab(event, 'Posts')">Posts</button>
					<button class="tab-link" onclick="openTab(event, 'Everyone')">Everyone</button>
				</div>

   				 <!-- Groups Section -->
					<div id="Groups" class="tab-content active">
						@if($groups->isNotEmpty())
							<div class="search-results-groups">
								<h3 class="tab-heading">Groups</h3>
								@foreach ($groups as $group)
									<div class="central-meta">
										<div class="groups">
										<span style="font-size: 1rem">
 									   <i class="fa fa-users"></i>{{ $group->memberCount }}</span>
										</div>
										<ul class="nearby-contct">
											<li>
												<!-- Kiểm tra xem user đã tham gia vào group hay chưa? -->
												<div class="nearly-pepls">
													<figure>
														<a href="{{ url('group-view/' . $group->group_id) }}" title=""><img src="images/resources/group1.jpg" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="{{ url('group-view/' . $group->group_id) }}" title="">{{$group->name_group}}</a></h4>
														@if($group->status == 1)
														<span>Active groups</span>
														@else
														<span>Deactive groups</span>
														@endif																																
														@if($group->status === 'Join')
														<form action="{{ route('join-request', $group->group_id )}}" method="POST" style="display: inline;" onsubmit="">
															@csrf
															@method("POST")
															<button type="submit" title="" data-ripple="" class="request-join">Join</button>
														</form>
														@elseif($group->status === 'Delete request')						
															<form action="{{ route('search-delete-request', $group->group_id) }}" method="POST" style="display: inline;" onsubmit="">
															@csrf
															@method('DELETE')
															<button type="submit" title="" data-ripple="" class="request-join" style="width: 140px;">Delete request</button>
													</form>									
														@else
															<button type="" title="" data-ripple="" class="request-join" style="background-color: #088dcd">Joined</button>
														@endif													
													</div>
												</div>
											</li>
										</ul>
									</div>
								@endforeach
							</div>
						@else
							<p>No groups found.</p>
						@endif
					</div>

    				<!-- Posts Section -->
					<div id="Posts" class="tab-content">
						@if($posts->isNotEmpty())
							<div class="search-results-posts">
								<h3 class="tab-heading">Posts</h3>
								<x-loadposts :posts=$posts></x-loadposts>
							</div>
						@else
							<p>No posts found.</p>
						@endif
					</div>

						<!-- Everyone Section -->
						<div id="Everyone" class="tab-content">
							@if($users->isNotEmpty())
								<div class="search-results-everyone">
									<h3 class="tab-heading">Everyone</h3>
									@foreach ($users as $user)
										<div class="central-meta">
											<div class="groups">
												<span><i class="fa fa-user"></i> {{$user->last_name}}</span>
											</div>
											<ul class="nearby-contct">
												<li>
													<div class="nearly-pepls">
														<figure class='border-avt'>
															<img src="{{ asset('storage/images/' . $user->avatar) }}" alt="" style="width:100%; height:auto;">
														</figure>
														<div class="pepl-info">
															<h4><a href="{{ url('time-line/user-profile/' . $user->user_id) }}" title="">{{$user->last_name}} {{$user->first_name}}</a></h4>
																<a href="#" title="" class="add-butn" data-ripple="">Follow</a>
														</div>
													</div>
												</li>
											</ul>
										</div>
									@endforeach
								</div>
							@else
								<p>No users found.</p>
							@endif
						</div>
				</div>





						</div><!-- centerl meta -->
						<div class="col-lg-3">
							<aside class="sidebar static">
								<div class="widget">
									<h4 class="widget-title">Your page</h4>
									<div class="your-page">
										<figure>
											<a href="#" title=""><img src="images/resources/friend-avatar9.jpg"
													alt=""></a>
										</figure>
										<div class="page-meta">
											<a href="#" title="" class="underline">My page</a>
											<span><i class="ti-comment"></i><a href="{{ url('insight') }}"
													title="">Messages <em>9</em></a></span>
											<span><i class="ti-bell"></i><a href="{{ url('insight') }}"
													title="">Notifications <em>2</em></a></span>
										</div>
										<div class="page-likes">
											<ul class="nav nav-tabs likes-btn">
												<li class="nav-item"><a class="active" href="#link1"
														data-toggle="tab">likes</a></li>
												<li class="nav-item"><a class="" href="#link2"
														data-toggle="tab">views</a></li>
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
								<div class="widget">
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
								</div>
								<div class="widget friend-list stick-widget">
									<h4 class="widget-title">Friends</h4>
									<div id="searchDir"></div>
									<ul id="people-list" class="friendz-list">
										<!-- <li>
											<figure>
												<img src="images/resources/friend-avatar.jpg" alt="">
												<span class="status f-online"></span>
											</figure>
											<div class="friendz-meta">
												<a href="{{ url('time-line') }}">bucky barnes</a>
												<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f2859b9c869780819d9e969780b2959f939b9edc919d9f">[email&#160;protected]</a></i>
											</div>
										</li>
										<li>
											<figure>
												<img src="images/resources/friend-avatar2.jpg" alt="">
												<span class="status f-away"></span>
											</figure>
											<div class="friendz-meta">
												<a href="{{ url('time-line') }}">Sarah Loren</a>	
												<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ea888b98848f99aa8d878b8386c4898587">[email&#160;protected]</a></i>
											</div>
										</li>
										<li>
											<figure>
												<img src="images/resources/friend-avatar3.jpg" alt="">
												<span class="status f-off"></span>
											</figure>
											<div class="friendz-meta">
												<a href="{{ url('time-line') }}">jason borne</a>
												<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2d474c5e42434f6d4a404c4441034e4240">[email&#160;protected]</a></i>
											</div>
										</li>
										<li>
											<figure>
												<img src="images/resources/friend-avatar4.jpg" alt="">
												<span class="status f-off"></span>
											</figure>
											<div class="friendz-meta">
												<a href="{{ url('time-line') }}">Cameron diaz</a>
												<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6802091b07060a280f05090104460b0705">[email&#160;protected]</a></i>
											</div>
										</li>
										<li>

											<figure>
												<img src="images/resources/friend-avatar5.jpg" alt="">
												<span class="status f-online"></span>
											</figure>
											<div class="friendz-meta">
												<a href="{{ url('time-line') }}">daniel warber</a>
												<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4e242f3d21202c0e29232f2722602d2123">[email&#160;protected]</a></i>
											</div>
										</li>
										<li>

											<figure>
												<img src="images/resources/friend-avatar6.jpg" alt="">
												<span class="status f-away"></span>
											</figure>
											<div class="friendz-meta">
												<a href="{{ url('time-line') }}">andrew</a>
												<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1872796b77767a587f75797174367b7775">[email&#160;protected]</a></i>
											</div>
										</li>
										<li>

											<figure>
												<img src="images/resources/friend-avatar7.jpg" alt="">
												<span class="status f-off"></span>
											</figure>
											<div class="friendz-meta">
												<a href="{{ url('time-line') }}">amy watson</a>
												<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="711b10021e1f1331161c10181d5f121e1c">[email&#160;protected]</a></i>
											</div>
										</li>
										<li>

											<figure>
												<img src="images/resources/friend-avatar5.jpg" alt="">
												<span class="status f-online"></span>
											</figure>
											<div class="friendz-meta">
												<a href="{{ url('time-line') }}">daniel warber</a>
												<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="234942504c4d4163444e424a4f0d404c4e">[email&#160;protected]</a></i>
											</div>
										</li>
										<li>

											<figure>
												<img src="images/resources/friend-avatar2.jpg" alt="">
												<span class="status f-away"></span>
											</figure>
											<div class="friendz-meta">
												<a href="{{ url('time-line') }}">Sarah Loren</a>
												<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d5b7b4a7bbb0a695b2b8b4bcb9fbb6bab8">[email&#160;protected]</a></i>
											</div>
										</li> -->
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