<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Winku Social Network Toolkit</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="{{asset('css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<!-- responsive header -->
@extends('/layouts.header')
	@section('content')
	@endsection
	<div class="topbar stick">
		<div class="logo">
			<a title="" href="{{ url('newsfeed') }}"><img src="images/logo.png" alt=""></a>
		</div>

		<div class="top-area">
			<ul class="main-menu">
				<li>
					<a href="#" title="">Home</a>
					<ul>
						<li><a href="{{ url('index-2') }}" title="">Home Social</a></li>
						<li><a href="{{ url('index2') }}" title="">Home Social 2</a></li>
						<li><a href="{{ url('index-company') }}" title="">Home Company</a></li>
						<li><a href="{{ url('landing') }}" title="">Login page</a></li>
						<li><a href="{{ url('logout') }}" title="">Logout Page</a></li>
						<li><a href="{{ url('newsfeed') }}" title="">news feed</a></li>
					</ul>
				</li>
				<li>
					<a href="#" title="">timeline</a>
					<ul>
						<li><a href="{{ url('time-line')  }}" title="">timeline</a></li>
						<li><a href="{{ url('timeline-friends') }}" title="">timeline friends</a></li>
						<li><a href="{{ url('timeline-groups') }}" title="">timeline groups</a></li>
						<li><a href="{{ url('timeline-pages') }}" title="">timeline pages</a></li>
						<li><a href="{{ url('timeline-photos') }}" title="">timeline photos</a></li>
						<li><a href="{{ url('timeline-videos') }}" title="">timeline videos</a></li>
						<li><a href="{{ url('fav-page') }}" title="">favourit page</a></li>
						<li><a href="{{ url('groups') }}" title="">groups page</a></li>
						<li><a href="{{ url('page-likers') }}" title="">Likes page</a></li>
						<li><a href="{{ url('people-nearby') }}" title="">people nearby</a></li>
					</ul>
				</li>
				<li>
					<a href="#" title="">account settings</a>
					<ul>
						<li><a href="{{ url('create-fav-page') }}" title="">create fav page</a></li>
						<li><a href="{{ url('edit-account-setting') }}" title="">edit account setting</a></li>
						<li><a href="{{ url('edit-interest') }}" title="">edit-interest</a></li>
						<li><a href="{{ url('edit-password') }}" title="">edit-password</a></li>
						<li><a href="{{ url('edit-profile-basic') }}" title="">edit profile basics</a></li>
						<li><a href="{{ url('edit-work-eductation') }}" title="">edit work educations</a></li>
						<li><a href="{{ url('messages') }}" title="">message box</a></li>
						<li><a href="{{ url('inbox') }}" title="">Inbox</a></li>
						<li><a href="{{ url('notifications') }}" title="">notifications page</a></li>
					</ul>
				</li>
				<li>
					<a href="#" title="">more pages</a>
					<ul>
						<li><a href="{{ url('404') }}" title="">404 error page</a></li>
						<li><a href="{{ url('about') }}" title="">about</a></li>
						<li><a href="{{ url('contact') }}" title="">contact</a></li>
						<li><a href="{{ url('faq') }}" title="">faq's page</a></li>
						<li><a href="{{ url('insights') }}" title="">insights</a></li>
						<li><a href="{{ url('knowledge-base') }}" title="">knowledge base</a></li>
						<li><a href="{{ url('widgets') }}" title="">Widgts</a></li>
					</ul>
				</li>
			</ul>
			<ul class="setting-area">
				<li>
					<a href="#" title="Home" data-ripple=""><i class="ti-search"></i></a>
					<div class="searched">
						<form method="post" class="form-search">
							<input type="text" placeholder="Search Friend">
							<button data-ripple><i class="ti-search"></i></button>
						</form>
					</div>
				</li>
				<li><a href="{{ url('newsfeed') }}" title="Home" data-ripple=""><i class="ti-home"></i></a></li>
				<li>
					<a href="#" title="Notification" data-ripple="">
						<i class="ti-bell"></i><span>20</span>
					</a>
					<div class="dropdowns">
						<span>4 New Notifications</span>
						<ul class="drops-menu">
							<li>
								<a href="{{ url('notifications') }}" title="">
									<img src="images/resources/thumb-1.jpg" alt="">
									<div class="mesg-meta">
										<h6>sarah Loren</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag green">New</span>
							</li>
							<li>
								
							<a href="{{ url('notifications') }}" title="">
									<img src="images/resources/thumb-2.jpg" alt="">
									<div class="mesg-meta">
										<h6>Jhon doe</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag red">Reply</span>
							</li>
							<li>
								
							<a href="{{ url('notifications') }}" title="">
									<img src="images/resources/thumb-3.jpg" alt="">
									<div class="mesg-meta">
										<h6>Andrew</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag blue">Unseen</span>
							</li>
							<li>
							
							<a href="{{ url('notifications') }}" title="">
									<img src="images/resources/thumb-4.jpg" alt="">
									<div class="mesg-meta">
										<h6>Tom cruse</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
							<li>
								
							<a href="{{ url('notifications') }}" title="">
									<img src="images/resources/thumb-5.jpg" alt="">
									<div class="mesg-meta">
										<h6>Amy</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
						</ul>
						<a href="{{ url('notifications') }}" title="" class="more-mesg">view more</a>
					</div>
				</li>
				<li>
					<a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
					<div class="dropdowns">
						<span>5 New Messages</span>
						<ul class="drops-menu">
							<li>
							
							<a href="{{ url('notifications') }}" title="">
									<img src="images/resources/thumb-1.jpg" alt="">
									<div class="mesg-meta">
										<h6>sarah Loren</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag green">New</span>
							</li>
							<li>
				
							<a href="{{ url('notifications') }}" title="">
									<img src="images/resources/thumb-2.jpg" alt="">
									<div class="mesg-meta">
										<h6>Jhon doe</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag red">Reply</span>
							</li>
							<li>
							
							<a href="{{ url('notifications') }}" title="">
									<img src="images/resources/thumb-3.jpg" alt="">
									<div class="mesg-meta">
										<h6>Andrew</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag blue">Unseen</span>
							</li>
							<li>
								
							<a href="{{ url('notifications') }}" title="">
									<img src="images/resources/thumb-4.jpg" alt="">
									<div class="mesg-meta">
										<h6>Tom cruse</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
							<li>
							
							<a href="{{ url('notifications') }}" title="">
									<img src="images/resources/thumb-5.jpg" alt="">
									<div class="mesg-meta">
										<h6>Amy</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
						</ul>
						<a href="{{ url('messages') }}" title="" class="more-mesg">view more</a>
					</div>
				</li>
				<li><a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>
					<div class="dropdowns languages">
						<a href="#" title=""><i class="ti-check"></i>English</a>
						<a href="#" title="">Arabic</a>
						<a href="#" title="">Dutch</a>
						<a href="#" title="">French</a>
					</div>
				</li>
			</ul>
			<div class="user-img">
				<img src="images/resources/admin.jpg" alt="">
				<span class="status f-online"></span>
				<div class="user-setting">
					<a href="#" title=""><span class="status f-online"></span>online</a>
					<a href="#" title=""><span class="status f-away"></span>away</a>
					<a href="#" title=""><span class="status f-off"></span>offline</a>
					<a href="#" title=""><i class="ti-user"></i> view profile</a>
					<a href="#" title=""><i class="ti-pencil-alt"></i>edit profile</a>
					<a href="#" title=""><i class="ti-target"></i>activity log</a>
					<a href="#" title=""><i class="ti-settings"></i>account setting</a>
					<a href="#" title=""><i class="ti-power-off"></i>log out</a>
				</div>
			</div>
			<span class="ti-menu main-menu" data-ripple=""></span>
		</div>
	</div><!-- topbar -->	
		
	<section>
		<div class="page-header">
			<div class="header-inner">
				<h2>People Nearby</h2>
				<nav class="breadcrumb">
				  <a href="{{ url('index-2') }}" class="breadcrumb-item"><i class="fa fa-home"></i></a>
				  <span class="breadcrumb-item active">People Nearby</span>
				</nav>
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
										<h4 class="widget-title">Profile intro</h4>
										<ul class="short-profile">
											<li>
												<span>about</span>
												<p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company. </p>
											</li>
											<li>
												<span>fav tv show</span>
												<p>spartcus blood, sacred games </p>
											</li>
											<li>
												<span>favourit music</span>
												<p>Shakira, Justin biber</p>
											</li>
										</ul>
									</div><!-- profile intro widget -->
									<div class="widget stick-widget">
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
									

								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="nearby-pepl">
										<div class="nearby-map">
											<div id="map-canvas"></div>
										</div>
									</div><!-- near by map -->
									<ul class="nearby-contct">
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/friend-avatar9.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">jhon kates</a></h4>
													<span>ftv model</span>
													<em><i class="fa fa-map-marker"></i>400m away</em>
													<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/nearly1.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">sophia Gate</a></h4>
													<span>ftv model</span>
													<em><i class="fa fa-map-marker"></i>800mm away</em>
													<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/nearly2.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">sara grey</a></h4>
													<span>ftv model</span>
													<em><i class="fa fa-map-marker"></i>1km away</em>
													<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/nearly3.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">Sexy cat</a></h4>
													<span>ftv model</span>
													<em><i class="fa fa-map-marker"></i>1.3km away</em>
													<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/nearly4.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">Sara grey</a></h4>
													<span>ftv model</span>
													<em><i class="fa fa-map-marker"></i>2km away</em>
													<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/nearly5.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">Amy watson</a></h4>
													<span>ftv model</span>
													<em><i class="fa fa-map-marker"></i>2km away</em>
													<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/nearly6.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">caty lasbo</a></h4>
													<span>ftv model</span>
													<em><i class="fa fa-map-marker"></i>2.5km away</em>
													<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
												</div>
											</div>
										</li>

									</ul>
								</div><!-- photos -->
							</div><!-- centerl meta -->
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
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
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="addac4c3d9c8dfdec2c1c9c8dfedcac0ccc4c183cec2c0">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/resources/friend-avatar2.jpg" alt="">
													<span class="status f-away"></span>
												</figure>
												<div class="friendz-meta">
													<a href="{{ url('time-line') }}">Sarah Loren</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5d3f3c2f33382e1d3a303c3431733e3230">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/resources/friend-avatar3.jpg" alt="">
													<span class="status f-off"></span>
												</figure>
												<div class="friendz-meta">
													<a href="{{ url('time-line') }}">jason borne</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="741e15071b1a16341319151d185a171b19">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/resources/friend-avatar4.jpg" alt="">
													<span class="status f-off"></span>
												</figure>
												<div class="friendz-meta">
													<a href="{{ url('time-line') }}">Cameron diaz</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f993988a96979bb99e94989095d79a9694">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar5.jpg" alt="">
													<span class="status f-online"></span>
												</figure>
												<div class="friendz-meta">
													<a href="{{ url('time-line') }}">daniel warber</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="157f74667a7b77557278747c793b767a78">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar6.jpg" alt="">
													<span class="status f-away"></span>
												</figure>
												<div class="friendz-meta">
													<a href="{{ url('time-line') }}">andrew</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f09a91839f9e92b0979d91999cde939f9d">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar7.jpg" alt="">
													<span class="status f-off"></span>
												</figure>
												<div class="friendz-meta">
													<a href="{{ url('time-line') }}">amy watson</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e38982908c8d81a3848e828a8fcd808c8e">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar5.jpg" alt="">
													<span class="status f-online"></span>
												</figure>
												<div class="friendz-meta">
													<a href="{{ url('time-line') }}">daniel warber</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="274d465448494567404a464e4b0944484a">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar2.jpg" alt="">
													<span class="status f-away"></span>
												</figure>
												<div class="friendz-meta">
													<a href="{{ url('time-line') }}">Sarah Loren</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0b696a79656e784b6c666a626725686466">[email&#160;protected]</a></i>
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

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="widget">
						<div class="foot-logo">
							<div class="logo">
								<a href="{{ url('index-2') }}" title=""><img src="images/logo.png" alt=""></a>
							</div>	
							<p>
								The trio took this simple idea and built it into the world’s leading carpooling platform.
							</p>
						</div>
						<ul class="location">
							<li>
								<i class="ti-map-alt"></i>
								<p>33 new montgomery st.750 san francisco, CA USA 94105.</p>
							</li>
							<li>
								<i class="ti-mobile"></i>
								<p>+1-56-346 345</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4">
					<div class="widget">
						<div class="widget-title"><h4>follow</h4></div>
						<ul class="list-style">
							<li><i class="fa fa-facebook-square"></i> <a href="https://web.facebook.com/shopcircut/" title="">facebook</a></li>
							<li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en" title="">twitter</a></li>
							<li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en" title="">instagram</a></li>
							<li><i class="fa fa-google-plus-square"></i> <a href="https://plus.google.com/discover" title="">Google+</a></li>
							<li><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/" title="">Pintrest</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4">
					<div class="widget">
						<div class="widget-title"><h4>Navigate</h4></div>
						<ul class="list-style">
						<li><a href="{{ url('about') }}" title="">about us</a></li>
							<li><a href="{{ url('contact') }}" title="">contact us</a></li>
							<li><a href="{{ url('terms') }}" title="">terms & Conditions</a></li>
							<li><a href="#" title="">RSS syndication</a></li>
							<li><a href="{{ url('sitemap') }}" title="">Sitemap</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4">
					<div class="widget">
						<div class="widget-title"><h4>useful links</h4></div>
						<ul class="list-style">
							<li><a href="#" title="">leasing</a></li>
							<li><a href="#" title="">submit route</a></li>
							<li><a href="#" title="">how does it work?</a></li>
							<li><a href="#" title="">agent listings</a></li>
							<li><a href="#" title="">view All</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4">
					<div class="widget">
						<div class="widget-title"><h4>download apps</h4></div>
						<ul class="colla-apps">
							<li><a href="https://play.google.com/store?hl=en" title=""><i class="fa fa-android"></i>android</a></li>
							<li><a href="https://www.apple.com/lae/ios/app-store/" title=""><i class="ti-apple"></i>iPhone</a></li>
							<li><a href="https://www.microsoft.com/store/apps" title=""><i class="fa fa-windows"></i>Windows</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- footer -->
	<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span class="copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span>
					<i><img src="images/credit-cards.png" alt=""></i>
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="side-panel">
			<h4 class="panel-title">General Setting</h4>
			<form method="post">
				<div class="setting-row">
					<span>use night mode</span>
					<input type="checkbox" id="nightmode1"/> 
					<label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Notifications</span>
					<input type="checkbox" id="switch22" /> 
					<label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Notification sound</span>
					<input type="checkbox" id="switch33" /> 
					<label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>My profile</span>
					<input type="checkbox" id="switch44" /> 
					<label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Show profile</span>
					<input type="checkbox" id="switch55" /> 
					<label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
				</div>
			</form>
			<h4 class="panel-title">Account Setting</h4>
			<form method="post">
				<div class="setting-row">
					<span>Sub users</span>
					<input type="checkbox" id="switch66" /> 
					<label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>personal account</span>
					<input type="checkbox" id="switch77" /> 
					<label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Business account</span>
					<input type="checkbox" id="switch88" /> 
					<label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Show me online</span>
					<input type="checkbox" id="switch99" /> 
					<label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Delete history</span>
					<input type="checkbox" id="switch101" /> 
					<label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Expose author name</span>
					<input type="checkbox" id="switch111" /> 
					<label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
				</div>
			</form>
		</div><!-- side panel -->	
	
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/main.min.js"></script>
	<script src="{{ asset('js/script.js') }}"></script>
	<script src="{{ asset('js/map-init.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

</body>	


</html>