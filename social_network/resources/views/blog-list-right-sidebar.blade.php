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
@extends('/layouts.header')
@section('content')
@endsection<!-- responsive header -->

<div class="topbar transparent">
		<div class="logo">
		<a title="" href="{{ url('newsfeed') }}"><img src="images/logo2.png" alt=""></a>
		</div>
		<div class="menu-container" id="toggle">
		  <a href="#" class="canvas-menu" >
			<i class="fa fa-times fa-bars" aria-hidden="true"></i></a>
		</div>
		<div class="overlay" id="overlay">
		  <nav class="overlay-menu">
		  <ul class="offcanvas-menu">
				<li class="menu-item-has-children">
					<a href="#" title="">Home</a>
					<ul>
					<li><a href="{{ url ('index-2') }}" title="">Home Social</a></li>
								<li><a href="{{ url ('index2') }}" title="">Home Social 2</a></li>
								<li><a href="{{ url ('index-company') }}i" title="">Home Company</a></li>
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
								<li><a href="{{ url('blog-list-right-sidebar') }}" title="">Blog List with R-Sidebar</a>
								</li>
								<li><a href="{{ url('blog-list-left-sidebar') }}" title="">Blog List with L-Sidebar</a>
								</li>
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
								<li><a href="{{ url('support-and-help-detail') }}" title="">Support & Help Detail</a>
								</li>
								<li><a href="{{ url('support-and-help-search-result') }}" title="">Support & Help Search
										Result</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children">
					<a href="#" title="">Company Forum</a>
					<ul>
					<li><a href="{{ url('forum') }}" title="">Forum Page</a></li>
								<li><a href="{{ url('forums-category') }}" title="">Forum Category</a></li>
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
							<h1>Blog List Style</h1>
							<nav class="breadcrumb">
							  <a class="breadcrumb-item" href="{{ url('index-2') }}">Home</a>
							  <span class="breadcrumb-item active">Blog</span>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- top area animated -->

	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row" id="page-contents">
					<div class="col-lg-9">
						<div class="blog-sec left-pading">
							<div class="post-filter-sec">
								<form method="post" class="filter-form">
									<input type="post" placeholder="Search post">
									<button><i class="ti-search"></i></button>
								</form>
								<div class="purify">
									<span>filter by</span>
									<select>
										<option>All categories</option>
										<option>By Favouirtes</option>
										<option>By Likes</option>
									</select>
									<select>
										<option>Assending A-Z</option>
										<option>Desending Z-A</option>
										<option>Desending (date)</option>
										<option>Asending (date)</option>
									</select>
									<a href="#" title="">purify</a>
								</div>
							</div>
							<div class="l-post">
								<figure>
									<img src="images/resources/bloglist-1.jpg" alt="">
									<ul class="blg-socials">
										<li><a href="#" title="" class="facebook"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" title="" class="twitter"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" title="" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</figure>
								<div class="l-post-meta">
									<h4><a href="#" title="">how to create content that get traffic</a></h4>
									<div class="l-post-ranking">
										<a class="admin" href="#" title="">admin</a>
										<a class="pdate" href="#" title="">04-23-19</a>
										<a class="time-post" href="#" title=""> -12 hours ago</a>
									</div>
									<p>
										by imporving the physical layout of hospitals and medical facilities we can inhence and increase safety macnisum..
									</p>
									<div class="g-post-ranking">
										<a class="likes" href="#" title=""><i class="fa fa-heart-o"></i>10 likes</a>
										<a class="coments" href="#" title=""><i class="fa fa-comment-o"></i>5 comments</a>
									</div>


									<a href="#" title="" class="read">Read More</a>
								</div>
							</div>
							<div class="l-post">
								<figure>
									<img src="images/resources/bloglist-2.jpg" alt="">
									<ul class="blg-socials">
										<li><a href="#" title="" class="facebook"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" title="" class="twitter"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" title="" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</figure>
								<div class="l-post-meta">
									<h4><a href="#" title="">how to create content that get traffic</a></h4>
									<div class="l-post-ranking">
										<a class="admin" href="#" title="">admin</a>
										<a class="pdate" href="#" title="">04-23-19</a>
										<a class="time-post" href="#" title=""> -12 hours ago</a>
									</div>
									<p>
										by imporving the physical layout of hospitals and medical facilities we can inhence and increase safety macnisum..
									</p>
									<div class="g-post-ranking">
										<a class="likes" href="#" title=""><i class="fa fa-heart-o"></i>10 likes</a>
										<a class="coments" href="#" title=""><i class="fa fa-comment-o"></i>5 comments</a>
									</div>


									<a href="#" title="" class="read">Read More</a>
								</div>
							</div>
							<div class="l-post">
								<figure>
									<img src="images/resources/bloglist-3.jpg" alt="">
									<ul class="blg-socials">
										<li><a href="#" title="" class="facebook"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" title="" class="twitter"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" title="" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</figure>
								<div class="l-post-meta">
									<h4><a href="#" title="">how to create content that get traffic</a></h4>
									<div class="l-post-ranking">
										<a class="admin" href="#" title="">admin</a>
										<a class="pdate" href="#" title="">04-23-19</a>
										<a class="time-post" href="#" title=""> -12 hours ago</a>
									</div>
									<p>
										by imporving the physical layout of hospitals and medical facilities we can inhence and increase safety macnisum..
									</p>
									<div class="g-post-ranking">
										<a class="likes" href="#" title=""><i class="fa fa-heart-o"></i>10 likes</a>
										<a class="coments" href="#" title=""><i class="fa fa-comment-o"></i>5 comments</a>
									</div>


									<a href="#" title="" class="read">Read More</a>
								</div>
							</div>
							<div class="l-post">
								<figure>
									<img src="images/resources/bloglist-4.jpg" alt="">
									<ul class="blg-socials">
										<li><a href="#" title="" class="facebook"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" title="" class="twitter"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" title="" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</figure>
								<div class="l-post-meta">
									<h4><a href="#" title="">how to create content that get traffic</a></h4>
									<div class="l-post-ranking">
										<a class="admin" href="#" title="">admin</a>
										<a class="pdate" href="#" title="">04-23-19</a>
										<a class="time-post" href="#" title=""> -12 hours ago</a>
									</div>
									<p>
										by imporving the physical layout of hospitals and medical facilities we can inhence and increase safety macnisum..
									</p>
									<div class="g-post-ranking">
										<a class="likes" href="#" title=""><i class="fa fa-heart-o"></i>10 likes</a>
										<a class="coments" href="#" title=""><i class="fa fa-comment-o"></i>5 comments</a>
									</div>


									<a href="#" title="" class="read">Read More</a>
								</div>
							</div>
							<button class="btn-view btn-load-more">Load More</button>
						</div>
					</div>
					<div class="col-lg-3">
						<aside class="sidebar static">
							<div class="widget">
								<h4 class="widget-title">Socials</h4>
								<ul class="socials">
									<li class="facebook">
										<a title="" href="#"><i class="fa fa-facebook"></i> <span>facebook</span> <ins>45 likes</ins></a>
									</li>
									<li class="twitter">
										<a title="" href="#"><i class="fa fa-twitter"></i> <span>twitter</span><ins>25 likes</ins></a>
									</li>
									<li class="google">
										<a title="" href="#"><i class="fa fa-google"></i> <span>google</span><ins>35 likes</ins></a>
									</li>
								</ul>
							</div>
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
										<a href="{{ url('vtimeline-videos') }}" title="">videos</a>
									</li>
								</ul>
							</div><!-- Shortcuts -->
						</aside>
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

	<script src="{{ asset('js/main.min.js') }}"></script>
	<script src="{{ asset('js/strip.pkgd.min.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
