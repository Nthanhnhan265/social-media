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
<li><a href="{{ url('support-and-help-search-result') }}" title="">Support & Help Search Result</a></li>

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
								<input type="checkbox" id="nightmode" />
								<label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
							</div>
							<div class="setting-row">
								<span>Notifications</span>
								<input type="checkbox" id="switch2" />
								<label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
							</div>
							<div class="setting-row">
								<span>Notification sound</span>
								<input type="checkbox" id="switch3" />
								<label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
							</div>
							<div class="setting-row">
								<span>My profile</span>
								<input type="checkbox" id="switch4" />
								<label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
							</div>
							<div class="setting-row">
								<span>Show profile</span>
								<input type="checkbox" id="switch5" />
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
		</div><!-- responsive header -->

		<div class="topbar transparent">
			<div class="logo">
			<a title="" href="{{ url('newsfeed') }}"><img src="images/logo2.png" alt=""></a>

			</div>
			<div class="menu-container" id="toggle">
				<a href="#" class="canvas-menu">
					<i class="fa fa-times fa-bars" aria-hidden="true"></i></a>
			</div>
			<div class="overlay" id="overlay">
				<nav class="overlay-menu">
					<ul class="offcanvas-menu">
						<li class="menu-item-has-children">
							<a href="#" title="">Home</a>
							<ul>
							<li><a href="{{ url('index-2') }}" title="">Home Social</a></li>
<li><a href="{{ url('index2') }}" title="">Home Social 2</a></li>
<li><a href="{{ url('index-company') }}" title="">Home Company</a></li>

							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Our Blog</a>
							<ul>
							<li><a href="{{ url('blog-grid-wo-sidebar') }}" title="">Our Blog</a></li>
<li><a href="{{ url('blog-grid-right-sidebar') }}" title="">Blog with R-Sidebar</a></li>
<li><a href="{{ url('blog-grid-left-sidebar') }}" title="">Blog with L-Sidebar</a></li>
<li><a href="{{ url('blog-masonry') }}" title="">Blog Masonry Style</a></li>
<li><a href="{{ url('blog-list-wo-sidebar') }}" title="">Blog List Style</a></li>
<li><a href="{{ url('blog-list-right-sidebar') }}" title="">Blog List with R-Sidebar</a></li>
<li><a href="{{ url('blog-list-left-sidebar') }}" title="">Blog List with L-Sidebar</a></li>
<li><a href="{{ url('blog-detail') }}" title="">Blog Post Detail</a></li>

							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Shop Pages</a>
							<ul>
							<li><a href="{{ url('shop') }}" title="">Shop Products</a></li>
<li><a href="{{ url('shop-masonry') }}" title="">Shop Masonry Products</a></li>
<li><a href="{{ url('shop-single') }}" title="">Shop Detail Page</a></li>
<li><a href="{{ url('shop-cart') }}" title="">Shop Product Cart</a></li>
<li><a href="{{ url('shop-checkout') }}" title="">Product Checkout</a></li>

							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Our Portfolio</a>
							<ul>
							<li><a href="{{ url('portfolio-2colm') }}" title="">Portfolio 2col</a></li>
<li><a href="{{ url('portfolio-3colm') }}" title="">Portfolio 3col</a></li>
<li><a href="{{ url('portfolio-4colm') }}" title="">Portfolio 4col</a></li>

							</ul>
						</li>
						<li class="menu-item-has-children">
    <a href="#" title="">Support & Help</a>
    <ul>
        <li><a href="{{ url('support-and-help') }}" title="">Support & Help</a></li>
        <li><a href="{{ url('support-and-help-detail') }}" title="">Support & Help Detail</a></li>
        <li><a href="{{ url('support-and-help-search-result') }}" title="">Support & Help Search Result</a></li>
    </ul>
</li>
<li class="menu-item-has-children">
    <a href="#" title="">Company Forum</a>
    <ul>
        <li><a href="{{ url('forum') }}" title="">Forum Page</a></li>
        <li><a href="{{ url('forums-category') }}" title="">Fourm Category</a></li>
        <li><a href="{{ url('forum-open-topic') }}" title="">Forum Open Topic</a></li>
        <li><a href="{{ url('forum-create-topic') }}" title="">Forum Create Topic</a></li>
    </ul>
</li>
<li class="menu-item-has-children">
    <a href="#" title="">Featured Pages</a>
    <ul>
        <li><a href="{{ url('careers') }}" title="">Careers</a></li>
        <li><a href="{{ url('career-detail') }}" title="">Career Detail</a></li>
        <li><a href="{{ url('logout') }}" title="">Logout Page</a></li>
        <li><a href="{{ url('404-2') }}" title="">404 Error Page</a></li>
        <li><a href="{{ url('about-company') }}" title="">About Us</a></li>
        <li><a href="{{ url('contact-branches') }}" title="">Contact Us</a></li>
    </ul>
</li>

					</ul>
				</nav>
			</div>
		</div><!-- topbar transparent header -->

		<section>
			<div class="ext-gap bluesh high-opacity">
				<div class="content-bg-wrap" style="background: url(images/resources/animated-bg2.png)"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="top-banner">
								<h1>About Our Company</h1>
								<nav class="breadcrumb">
								<a class="breadcrumb-item" href="{{ url('index-2') }}">

									<span class="breadcrumb-item active">About us</span>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- top area animated -->

		<section>
			<div class="gap100 no-bottom">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="about-winku">
								<h4>Welcome to Winku</h4>
								<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
									exercitation</span>
								<p>But I must explain to you how all this mistaken idea of denouncing pleasure and
									praising pain was born and I will give you a complete account of the system, and
									expound the actual teachings of the great explorer of the truth, the master-builder
									of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it
									is pleasure</p>
								<div class="fonder">
									<h4>william gates <i>founder</i></h4>
									<i>winku inc</i>
								</div>
								<figure class="sign-author">
									<img src="images/welcome-sign.png" alt="">
								</figure>
							</div>
						</div>
						<div class="col-lg-6">
							<figure class="about-picture">
								<img src="images/resources/about-comapny.jpg" alt="">
							</figure>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="gap100">
				<div class="container">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2>Our Services</h2>
						</div>
					</div>
					<div class="servic-category">
						<div class="row merged">
							<div class="col-lg-4 col-md-6">
								<div class="category-box">
									<i class="fa fa-wordpress"></i>
									<h2>WordPress Services</h2>
									<p>Met consectetur adipisicing elit dolore suscipit, inventore aliquid...</p>
									<a href="#" class="main-btn" title="">Read More</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="category-box selected">
									<i class="fa fa-html5"></i>
									<h2>Html Services</h2>
									<p>Met consectetur adipisicing elit dolore suscipit, inventore aliquid...</p>
									<a href="#" class="main-btn" title="">Read More</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="category-box">
									<i class="fa fa-google-wallet"></i>
									<h2>Design Services</h2>
									<p>Met consectetur adipisicing elit dolore suscipit, inventore aliquid...</p>
									<a href="#" class="main-btn" title="">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- services section -->

		<section>
			<div class="gap100 pattern">
				<div class="bg-image"
					style="background-image:url(images/resources/newsletter-bg.jpg); background-repeat: no-repeat;">
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="news-letter">
								<h2>Newsletter <span>Signup</span></h2>
								<span>Shortest Way To Explore What Will Happen On Enternity</span>
								<form method="post">
									<input type="text" placeholder="Please Type Email Id" class="emails">
									<button>Subscribe Now</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- news letter -->

		<section>
			<div class="gap100">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-heading">
								<h2>Our Team</h2>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="our-teambox">
								<figure><img src="images/resources/team1.jpg" alt=""></figure>
								<div class="team-info">
									<h4>Sara Grey</h4>
									<span>Designer</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="our-teambox">
								<figure><img src="images/resources/team4.jpg" alt=""></figure>
								<div class="team-info">
									<h4>Peeter Paker</h4>
									<span>Developer</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="our-teambox">
								<figure><img src="images/resources/team3.jpg" alt=""></figure>
								<div class="team-info">
									<h4>Amy watson</h4>
									<span>Support</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="our-teambox">
								<figure><img src="images/resources/team2.jpg" alt=""></figure>
								<div class="team-info">
									<h4>Emma Watson</h4>
									<span>Operations</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- our team -->

		<section>
			<div class="gap100 no-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="row">
								<div class="section-heading">
									<h2>Sponsors</h2>
								</div>
								<ul class="sponsor-logo">
									<li><img alt="" src="images/resources/sponsor-gray1.png"></li>
									<li><img alt="" src="images/resources/sponsor-gray2.png"></li>
									<li><img alt="" src="images/resources/sponsor-gray3.png"></li>
									<li><img alt="" src="images/resources/sponsor-gray4.png"></li>
									<li><img alt="" src="images/resources/sponsor-gray5.png"></li>
									<li><img alt="" src="images/resources/sponsor-gray6.png"></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="getquot-baner">
				<span>Get our weekly Quotaion for Porviding the best Services</span>
				<a title="" href="#">Get a Quote</a>
			</div>
		</section><!-- get a quote -->

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
									The trio took this simple idea and built it into the world’s leading carpooling
									platform.
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
							<div class="widget-title">
								<h4>follow</h4>
							</div>
							<ul class="list-style">
								<li><i class="fa fa-facebook-square"></i> <a href="https://web.facebook.com/shopcircut/"
										title="">facebook</a></li>
								<li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en"
										title="">twitter</a></li>
								<li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en"
										title="">instagram</a></li>
								<li><i class="fa fa-google-plus-square"></i> <a href="https://plus.google.com/discover"
										title="">Google+</a></li>
								<li><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/"
										title="">Pintrest</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4">
						<div class="widget">
							<div class="widget-title">
								<h4>Navigate</h4>
							</div>
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
							<div class="widget-title">
								<h4>useful links</h4>
							</div>
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
							<div class="widget-title">
								<h4>download apps</h4>
							</div>
							<ul class="colla-apps">
								<li><a href="https://play.google.com/store?hl=en" title=""><i
											class="fa fa-android"></i>android</a></li>
								<li><a href="https://www.apple.com/lae/ios/app-store/" title=""><i
											class="ti-apple"></i>iPhone</a></li>
								<li><a href="https://www.microsoft.com/store/apps" title=""><i
											class="fa fa-windows"></i>Windows</a></li>
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
						<span class="copyright"><a target="_blank" href="https://www.templateshub.net">Templates
								Hub</a></span>
						<i><img src="images/credit-cards.png" alt=""></i>
					</div>
				</div>
			</div>
		</div>

	</div>

	<script src="{{ asset('js/main.min.js') }}"></script>
	<script src="{{ asset('js/strip.pkgd.min.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>

</body>

</html>