<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Winku Social Network Toolkit</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/strip.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">

	<div class="responsive-header">
		<div class="mh-head first Sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
			<span class="mh-text">
			<a href="{{ url ('newsfeed') }}" title=""><img src="images/logo2.png" alt=""></a>
			</span>
			<span class="mh-btns-right">
				<a class="fa fa-sliders" href="#shoppingbag"></a>
			</span>
		</div>
		<div class="mh-head second">
			<form class="mh-form">
				<input placeholder="search" />
				<a href="#/" class="fa fa-search"></a>
			</form>
		</div>
		<nav id="menu" class="res-menu">
		<ul>
			<li><span>Home</span>
				<ul>
					<li><a href="{{ url('index-2') }}" title="">Home Social</a></li>
					<li><a href="{{ url('index2') }}" title="">Home Social 2</a></li>
					<li><a href="{{ url('index-company') }}" title="">Home Company</a></li>
					<li><a href="{{ url('landing') }}" title="">Login page</a></li>
					<li><a href="{{ url('logout') }}" title="">Logout Page</a></li>
					<li><a href="{{ url('newsfeed') }}" title="">news feed</a></li>
				</ul>
			</li>
			<li><span>Time Line</span>
				<ul>
					<li><a href="{{ url('time-line') }}" title="">timeline</a></li>
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
			<li><span>Account Setting</span>
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
			<li><span>forum</span>
				<ul>
					<li><a href="{{ url('forum') }}" title="">Forum Page</a></li>
					<li><a href="{{ url('forums-category') }}" title="">Fourm Category</a></li>
					<li><a href="{{ url('forum-open-topic') }}" title="">Forum Open Topic</a></li>
					<li><a href="{{ url('forum-create-topic') }}" title="">Forum Create Topic</a></li>
				</ul>
			</li>
			<li><span>Our Shop</span>
				<ul>
					<li><a href="{{ url('shop') }}" title="">Shop Products</a></li>
					<li><a href="{{ url('shop-masonry') }}" title="">Shop Masonry Products</a></li>
					<li><a href="{{ url('shop-single') }}" title="">Shop Detail Page</a></li>
					<li><a href="{{ url('shop-cart') }}" title="">Shop Product Cart</a></li>
					<li><a href="{{ url('shop-checkout') }}" title="">Product Checkout</a></li>
				</ul>
			</li>
			<li><span>Our Blog</span>
				<ul>
					<li><a href="{{ url('blog-grid-wo-sidebar') }}" title="">Our Blog</a></li>
					<li><a href="{{ url('blog-grid-right-sidebar') }}" title="">Blog with R-Sidebar</a></li>
					<li><a href="{{ url('blog-grid-left-sidebar') }}" title="">Blog with L-Sidebar</a></li>
					<li><a href="{{ url('blog-masonry') }}" title="">Blog Masonry Style</a></li>
					<li><a href="{{ url('blog-list-wo-sidebar') }}" title="">Blog List Style</a></li>
					<li><a href="{{ url('blog-list-right-sidebar') }}" title="">Blog List with R-Sidebar</a>
					</li>
					<li><a href="{{ url('blog-list-left-sidebar') }}" title="">Blog List with L-Sidebar</a></li>
					<li><a href="{{ url('blog-detail') }}" title="">Blog Post Detail</a></li>
				</ul>
			</li>
			<li><span>Portfolio</span>
				<ul>
					<li><a href="{{ url('portfolio-2colm') }}" title="">Portfolio 2col</a></li>
					<li><a href="{{ url('portfolio-3colm') }}" title="">Portfolio 3col</a></li>
					<li><a href="{{ url('portfolio-4colm') }}" title="">Portfolio 4col</a></li>
				</ul>
			</li>
			<li><span>Support & Help</span>
				<ul>
					<li><a href="{{ url('support-and-help') }}" title="">Support & Help</a></li>
					<li><a href="{{ url('support-and-help-detail') }}" title="">Support & Help Detail</a></li>
					<li><a href="{{ url('support-and-help-search-result') }}" title="">Support & Help Search
							Result</a></li>
				</ul>
			</li>
			<li><span>More pages</span>
				<ul>
					<li><a href="{{ url('careers') }}" title="">Careers</a></li>
					<li><a href="{{ url('career-detail') }}" title="">Career Detail</a></li>
					<li><a href="{{ url('404') }}" title="">404 error page</a></li>
					<li><a href="{{ url('404-2') }}" title="">404 Style2</a></li>
					<li><a href="{{ url('faq') }}" title="">faq's page</a></li>
					<li><a href="{{ url('insights') }}" title="">insights</a></li>
					<li><a href="{{ url('knowledge-base') }}" title="">knowledge base</a></li>
				</ul>
			</li>
			<li><a href="{{ url('about') }}" title="">about</a></li>
			<li><a href="{{ url('about-company') }}" title="">About Us2</a></li>
			<li><a href="{{ url('contact') }}" title="">contact</a></li>
			<li><a href="{{ url('contact-branches') }}" title="">Contact Us2</a></li>
			<li><a href="{{ url('widgets') }}" title="">Widgets</a></li>
		</ul>
		</nav>
		<nav id="shoppingbag">
			<div>
				<div class="">
					<form method="post">
						<div class="setting-row">
							<span>use night mode</span>
							<input type="checkbox" id="nightmode"/>
							<label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Notifications</span>
							<input type="checkbox" id="switch2"/>
							<label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Notification sound</span>
							<input type="checkbox" id="switch3"/>
							<label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>My profile</span>
							<input type="checkbox" id="switch4"/>
							<label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Show profile</span>
							<input type="checkbox" id="switch5"/>
							<label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
						</div>
					</form>
					<h4 class="panel-title">Account Setting</h4>
					<form method="post">
						<div class="setting-row">
							<span>Sub users</span>
							<input type="checkbox" id="switch6" />
							<label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>personal account</span>
							<input type="checkbox" id="switch7" />
							<label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Business account</span>
							<input type="checkbox" id="switch8" />
							<label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Show me online</span>
							<input type="checkbox" id="switch9" />
							<label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Delete history</span>
							<input type="checkbox" id="switch10" />
							<label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Expose author name</span>
							<input type="checkbox" id="switch11" />
							<label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
						</div>
					</form>
				</div>
			</div>
		</nav>
	</div>
<!-- responsive header -->

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
						<li><a href="{{ url('time-line') }}" title="">timeline</a></li>
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
	</div>
	<!-- topbar -->

		<section>
			<div class="gap no-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="g-map">
								<div id="map-canvas"></div>
								<div class="map-meta">
									<h1>get in touch</h1>
									<p>this is a google map. you may see our location, or using street view you may the original look of our office.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- google map -->

		<section>
			<div class="gap no-top overlap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="contct-info">
								<div class="contact-form">
									<div class="cnt-title">
										<span>Send us a message</span>
										<i><img src="images/envelop.png" alt=""></i>
									</div>
									<form method="post">
										<div class="form-group">
										  <input type="text" id="input" required="required"/>
										  <label class="control-label" for="input">First & Last Name</label><i class="mtrl-select"></i>
										</div>
										<div class="form-group">
										  <input type="text" required="required"/>
										  <label class="control-label" for="input"><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5e1b333f37321e">[email&#160;protected]</a></label><i class="mtrl-select"></i>
										</div>
										<div class="form-group">
										  <input type="text" required="required"/>
										  <label class="control-label" for="input">Phone No.</label><i class="mtrl-select"></i>
										</div>
										<div class="form-group">
										  <input type="text" required="required"/>
										  <label class="control-label" for="input">Company</label><i class="mtrl-select"></i>
										</div>
										<div class="form-group">
										  <textarea rows="4" id="textarea" required="required"></textarea>
										  <label class="control-label" for="textarea">Message</label><i class="mtrl-select"></i>
										</div>
										<div class="submit-btns">
											<button class="mtr-btn signup" type="button"><i class="fa fa-paper-plane"></i></button>
										</div>
									</form>
								</div>
								<div class="cntct-adres">
									<h3>contact info</h3>
									<ul>
										<li>
											<i class="ti-location-pin"></i>
											<span>360 king street feasterville trevose, PA 19054</span>
										</li>
										<li>
											<i class="fa fa-mobile-phone"></i>
											<span>(800) 900-200-300</span>
										</li>
										<li>
											<i class="fa fa-envelope-o"></i>
											<span><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cba2a5ada48bb2a4beb9a6aaa2a7e5a8a4a6">[email&#160;protected]</a></span>
										</li>
									</ul>
									<ul class="social-media">
										<li>
											<a href="#" title=""><i class="fa fa-facebook-square"></i></a>
										</li>
										<li>
											<a href="#" title=""><i class="fa fa-google-plus-square"></i></a>
										</li>
										<li>
											<a href="#" title=""><i class="fa fa-pinterest-square"></i></a>
										</li>
										<li>
											<a href="#" title=""><i class="fa fa-twitter-square"></i></a>
										</li>
									</ul>
									<h1 class="bg-cntct">Winku</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- contact info -->

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
	<script href="{{ asset('js/strip.pkgd.min.js') }}"></script>
	<script href="{{ asset('js/script.js') }}"></script>
	<script href="{{ asset('js/map-init.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

</body>

</html>
