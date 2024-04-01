    @extends('layouts.default')

    @section('content')
    <section>
        <div class="feature-photo">
            <figure><img src="images/resources/timeline-1.jpg" alt=""></figure>
            <div class="add-btn">
                <span>1205 followers</span>
                <a href="#" title="" data-ripple="">Add Friend</a>
            </div>
            <form class="edit-phto">
                <i class="fa fa-camera-retro"></i>
                <label class="fileContainer">
                    Edit Cover Photo
                <input type="file"/>
                </label>
            </form>
            <div class="container-fluid">
                <div class="row merged">
                    <div class="col-lg-2 col-sm-3">
                        <div class="user-avatar">
                            <figure>
                                <img src="images/resources/user-avatar.jpg" alt="">
                                <form class="edit-phto">
                                    <i class="fa fa-camera-retro"></i>
                                    <label class="fileContainer">
                                        Edit Display Photo
                                        <input type="file"/>
                                    </label>
                                </form>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-10 col-sm-9">
                        <div class="timeline-info">
                            <ul>
                                <li class="admin-name">
                                  <h5>Janice Griffith</h5>
                                  <span>Group Admin</span>
                                </li>
                                <li>
                                    <a class="" href="time-line" title="" data-ripple="">time line</a>
                                    <a class="" href="timeline-photos" title="" data-ripple="">Photos</a>
                                    <a class="" href="timeline-videos" title="" data-ripple="">Videos</a>
                                    <a class="" href="timeline-friends" title="" data-ripple="">Friends</a>
                                    <a class="active" href="groups" title="" data-ripple="">Groups</a>
                                    <a class="" href="about" title="" data-ripple="">about</a>
                                    <a class="" href="#" title="" data-ripple="">more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- top area -->

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
                                </div><!-- Shortcuts -->
                                <div class="widget">
                                    <h4 class="widget-title">Profile intro</h4>
                                    <ul class="short-profile">
                                        <li>
                                            <span>about</span>
                                            <p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company. </p>
                                        </li>
                                        <li>
                                            <span>fav tv show</span>
                                            <p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company. </p>
                                        </li>
                                        <li>
                                            <span>favourit music</span>
                                            <p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company. </p>
                                        </li>
                                    </ul>
                                </div><!-- profile intro widget -->

</head>
<body>
<!--<div class="se-pre-con"></div>-->
@extends('/layouts.header')
	@section('content')
	@endsection<!-- topbar -->
	
	<section>
			<div class="feature-photo">
				<figure><img src="images/resources/timeline-1.jpg" alt=""></figure>
				<div class="add-btn">
					<span>1205 followers</span>
					<a href="#" title="" data-ripple="">Add Friend</a>
				</div>
				<form class="edit-phto">
					<i class="fa fa-camera-retro"></i>
					<label class="fileContainer">
						Edit Cover Photo
					<input type="file"/>
					</label>
				</form>
				<div class="container-fluid">
					<div class="row merged">
						<div class="col-lg-2 col-sm-3">
							<div class="user-avatar">
								<figure>
									<img src="images/resources/user-avatar.jpg" alt="">
									<form class="edit-phto">
										<i class="fa fa-camera-retro"></i>
										<label class="fileContainer">
											Edit Display Photo
											<input type="file"/>
										</label>
									</form>
								</figure>
							</div>
						</div>
						<div class="col-lg-10 col-sm-9">
							<div class="timeline-info">
								<ul>
									<li class="admin-name">
									  <h5>Janice Griffith</h5>
									  <span>Group Admin</span>
									</li>
									<li>
										<a class="" href="{{ url('time-line') }}" title="" data-ripple="">time line</a>
										<a class="" href="timeline-photos" title="" data-ripple="">Photos</a>
										<a class="" href="timeline-videos" title="" data-ripple="">Videos</a>
										<a class="" href="timeline-friends" title="" data-ripple="">Friends</a>
										<a class="active" href="groups" title="" data-ripple="">Groups</a>
										<a class="" href="about" title="" data-ripple="">about</a>
										<a class="" href="#" title="" data-ripple="">more</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- top area -->
		
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
												<i class="ti-image"></i>
												<a href="{{ url('timeline-photos') }}" title="">images</a>
											</li>
											<li>
												<i class="ti-video-camera"></i>
												<a href="{{ url('timeline-videos') }}" title="">videos</a>
											</li>
											<li>
												<i class="ti-comments-smiley"></i>
												<a href="{{ url('messages') }}" title="">Messages</a>
											</li>
											<li>
												<i class="ti-bell"></i>
												<a href="{{ url('notifications') }}" title="">Notifications</a>
											</li>
											<li>
												<i class="ti-share"></i>
												<a href="{{ url('people-nearby') }}" title="">People Nearby</a>
											</li>
											<li>
												<i class="fa fa-bar-chart-o"></i>
												<a href="{{ url('insights') }}" title="">insights</a>
											</li>
											<li>
												<i class="ti-power-off"></i>
												<a href="{{ url('landing') }}" title="">Logout</a>
											</li>
										</ul>
									</div><!-- Shortcuts -->
									<div class="widget">
										<h4 class="widget-title">Profile intro</h4>
										<ul class="short-profile">
											<li>
												<span>about</span>
												<p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company. </p>
											</li>
											<li>
												<span>fav tv show</span>
												<p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company. </p>
											</li>
											<li>
												<span>favourit music</span>
												<p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company. </p>
											</li>
										</ul>
									</div><!-- profile intro widget -->

								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="groups">
										<span><i class="fa fa-users"></i> joined Groups</span>
									</div>
									<ul class="nearby-contct">
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/group1.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">funparty</a></h4>
													<span>public group</span>
													<em>32k Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/group2.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">ABC News</a></h4>
													<span>Private group</span>
													<em>5M Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/group3.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">SEO Zone</a></h4>
													<span>Public group</span>
													<em>32k Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/group4.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">Max Us</a></h4>
													<span>Public group</span>
													<em> 756 Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/group5.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">Banana Group</a></h4>
													<span>Friends Group</span>
													<em>32k Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/group6.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">Bad boys n Girls</a></h4>
													<span>Public group</span>
													<em>32k Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/group7.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">Bachelor's fun</a></h4>
													<span>Public Group</span>
													<em>500 Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/group4.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">Max Us</a></h4>
													<span>Public group</span>
													<em> 756 Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
									</ul>
									<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
								</div><!-- photos -->
							</div><!-- centerl meta -->
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget friend-list stick-widget">
										<h4 class="widget-title">Friends</h4>
										<div id="searchDir"></div>
										<ul id="people-list" class="friendz-list">
											<li>
												<figure>
													<img src="images/resources/friend-avatar.jpg" alt="">
													<span class="status f-online"></span>
												</figure>
												<div class="friendz-meta">
													<a href="{{ url('time-line') }}">bucky barnes</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c2b5abacb6a7b0b1adaea6a7b082a5afa3abaeeca1adaf">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/resources/friend-avatar2.jpg" alt="">
													<span class="status f-away"></span>
												</figure>
												<div class="friendz-meta">
													<a href="{{ url('time-line') }}">Sarah Loren</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2f4d4e5d414a5c6f48424e4643014c4042">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/resources/friend-avatar3.jpg" alt="">
													<span class="status f-off"></span>
												</figure>
												<div class="friendz-meta">
													<a href="{{ url('time-line') }}">jason borne</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="90faf1e3fffef2d0f7fdf1f9fcbef3fffd">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/resources/friend-avatar4.jpg" alt="">
													<span class="status f-off"></span>
												</figure>
												<div class="friendz-meta">
													<a href="{{ url('time-line') }}">Cameron diaz</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f19b90829e9f93b1969c90989ddf929e9c">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar5.jpg" alt="">
													<span class="status f-online"></span>
												</figure>
												<div class="friendz-meta">
													<a href="{{ url('time-line') }}">daniel warber</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="88e2e9fbe7e6eac8efe5e9e1e4a6ebe7e5">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar6.jpg" alt="">
													<span class="status f-away"></span>
												</figure>
												<div class="friendz-meta">
													<a href="{{ url('time-line') }}">andrew</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e882899b87868aa88f85898184c68b8785">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar7.jpg" alt="">
													<span class="status f-off"></span>
												</figure>
												<div class="friendz-meta">
													<a href="{{ url('time-line') }}">amy watson</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e58f84968a8b87a58288848c89cb868a88">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar5.jpg" alt="">
													<span class="status f-online"></span>
												</figure>
												<div class="friendz-meta">
													<a href="{{ url('time-line') }}">daniel warber</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4b212a382425290b2c262a222765282426">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar2.jpg" alt="">
													<span class="status f-away"></span>
												</figure>
												<div class="friendz-meta">
													<a href="{{ url('time-line') }}">Sarah Loren</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="97f5f6e5f9f2e4d7f0faf6fefbb9f4f8fa">[email&#160;protected]</a></i>
												</div>
											</li>
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

                                            <figure>
                                                <img src="images/resources/friend-avatar6.jpg" alt="">
                                                <span class="status f-away"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line">andrew</a>
                                                <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e882899b87868aa88f85898184c68b8785">[email&#160;protected]</a></i>
                                            </div>
                                        </li>
                                        <li>

                                            <figure>
                                                <img src="images/resources/friend-avatar7.jpg" alt="">
                                                <span class="status f-off"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line">amy watson</a>
                                                <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e58f84968a8b87a58288848c89cb868a88">[email&#160;protected]</a></i>
                                            </div>
                                        </li>
                                        <li>

                                            <figure>
                                                <img src="images/resources/friend-avatar5.jpg" alt="">
                                                <span class="status f-online"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line">daniel warber</a>
                                                <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4b212a382425290b2c262a222765282426">[email&#160;protected]</a></i>
                                            </div>
                                        </li>
                                        <li>

                                            <figure>
                                                <img src="images/resources/friend-avatar2.jpg" alt="">
                                                <span class="status f-away"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line">Sarah Loren</a>
                                                <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="97f5f6e5f9f2e4d7f0faf6fefbb9f4f8fa">[email&#160;protected]</a></i>
                                            </div>
                                        </li>
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

