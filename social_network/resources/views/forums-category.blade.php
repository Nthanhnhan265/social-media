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
@extends('/layouts.header')<!-- responsive header -->
	@section('content')
	
	@endsection
	<div class="topbar transparent">
		<div class="logo">
		<a title="" href="{{ url('newsfeed') }}"><img src="images/logo.png" alt=""></a>
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
					<li><a href="{{ url('blog-list-right-sidebar') }}" title="">Blog List with R-Sidebar</a>
					</li>
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
						<li><a href="{{ url('shshop-checkoutop') }}" title="">Product Checkout</a></li>
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
					<li><a href="{{ url('support-and-help-search-result') }}" title="">Support & Help Search
							Result</a></li>
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
						<li><a href="{{ url('404-2') }}" title="">404 Errro Page</a></li>
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
							<h1>Custom CSS Tweaks</h1>
							<nav class="breadcrumb">
							  <a class="breadcrumb-item" href="{{ url('index-2') }}">Home</a>
							  <span class="breadcrumb-item active">Forum</span>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- top area animated -->
	
	<section>
		<div class="gap100">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="forum-warper">
							<div class="post-filter-sec">
								<form method="post" class="filter-form">
									<input type="post" placeholder="Search post">
									<button><i class="ti-search"></i></button>
								</form>
								<div class="purify">
									<span>filter by</span>
									<select>
										<option>Assending A-Z</option>
										<option>Desending Z-A</option>
										<option>Desending (date)</option>
										<option>Asending (date)</option>
									</select>
									<a href="#" title="">purify</a>
								</div>
							</div>
						</div>
						<div class="forum-list">
							<table class="table table-responsive">
								<thead>
									<tr>
										<th scope="col">topics</th>
										<th scope="col">voice</th>
										<th scope="col">posts</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<i class="fa fa-comments"></i> 
											<a href="{{ url('forum-open-topic') }}" title="">Custom CSS Tweaks</a>
											<h6>Started by: <a href="#" title="">Karly King</a></h6>
										</td>
										<td>7</td>
										<td>2</td>
									</tr>
									<tr>
										<td>
											<i class="fa fa-comments"></i> 
											<a href="{{ url('forum-open-topic') }}" title="">Free Photography on photodune</a>
											<h6>Started by: <a href="#" title="">Peter Phillips</a></h6>
										</td>
										<td>9</td>
										<td>2</td>
									</tr>
									<tr>
										<td>
											<i class="fa fa-comments"></i> 
											<a href="{{ url('forum-open-topic') }}" title="">Free videos on video hive</a>
											<h6>Started by: <a href="#" title="">Joseph Johnson</a></h6>
										</td>
										<td>4</td>
										<td>5</td>
									</tr>
									<tr>
										<td>
											<i class="fa fa-comments"></i> 
											<a href="{{ url('forum-open-topic') }}" title="">Freebees themes on themeforest</a>
											<h6>Started by: <a href="#" title="">Joseph Johnson</a></h6>
										</td>
										<td>3</td>
										<td>1</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-lg-3">
						<aside class="sidebar full-style">
							<div class="widget">
								<div class="singin">
									<h4 class="widget-title">Login</h4>
									<form method="post">
										<input type="text" placeholder="User Name">
										<input type="password" placeholder="Password">
										<div class="checkbox">
										  <label>
											<input type="checkbox" checked="checked"><i class="check-box"></i>
											 <span>Remember Me</span>
										  </label>
										</div>
										<button type="submit">Log In</button>
									</form>
								</div>	
							</div>
							<div class="widget">
								<h4 class="widget-title">Forum Statistics</h4>
								<ul class="forum-static">
									<li>
										<a href="#" title="">Forums</a>
										<span>13</span>
									</li>
									<li>
										<a href="#" title="">Registered Users</a>
										<span>50</span>
									</li>
									<li>
										<a href="#" title="">Topics</a>
										<span>14</span>
									</li>
									<li>
										<a href="#" title="">Replies</a>
										<span>32</span>
									</li>
									<li>
										<a href="#" title="">Topic Tags</a>
										<span>50</span>
									</li>
								</ul>
							</div>
						</aside>	
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section>
		<div class="getquot-baner">
			<span>Want to join our awesome forum and start interacting with others?</span>
			<a href="#" title="">Sign up</a>
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
	
<script src="{{asset('js/script.js')}}"></script>
	<script src="{{asset('js/main.min.js')}}"></script>

</body>	

</html>