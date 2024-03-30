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
							<h1>Support & Help</h1>
							<nav class="breadcrumb">
							  <a class="breadcrumb-item" href="{{ url('index-2') }}">Home</a>
							  <span class="breadcrumb-item active">Support & Help</span>
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
					<div class="col-lg-12">
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
					</div>
					<div class="col-lg-4">
						<div class="help-list">
							<h3>Related Topics</h3>
							<ul>
								<li><a title="" href="#"><i class="ti-direction"></i>How to Create your account</a></li>
								<li><a title="" href="#"><i class="ti-direction"></i>post video on my account?</a></li>
								<li><a title="" href="#"><i class="ti-direction"></i>Inviting friends to join winku</a></li>
								<li><a title="" href="#"><i class="ti-direction"></i>How do I search for my friends?</a></li>
								<li><a title="" href="#"><i class="ti-direction"></i>Create and manage groups</a></li>
								<li><a title="" href="#"><i class="ti-direction"></i>Create live video feed</a></li>
								<li><a title="" href="#"><i class="ti-direction"></i>Create your own fan page</a></li>
								<li><a title="" href="#"><i class="ti-direction"></i>how to edit profile picture?</a></li>
								<li><a title="" href="#"><i class="ti-direction"></i>how to reset password?</a></li>
								<li><a title="" href="#"><i class="ti-direction"></i>how to rename page?</a></li>
								<li><a title="" href="#"><i class="ti-direction"></i>Create and manage groups</a></li>
								<li><a title="" href="#"><i class="ti-direction"></i>how to check your inbox?</a></li>
								<li><a title="" href="#"><i class="ti-direction"></i>may i live chat with winku?</a></li>
								<li><a title="" href="#"><i class="ti-direction"></i>how to join group and list of group?</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="help-topic">
							<h2>How do i post video on winku?</h2>
							<div class="help-assistant">
								<span class="verified"><i class="ti-check-box"></i></span>
								<figure><img src="images/resources/admin3.jpg" alt=""></figure>
								<div class="assistant-name">
									<span>sarah loren</span>
									<i>Help Assistant</i>
								</div>
							</div>
							<div class="post-dated">
								<i class="ti-calendar"></i>
								<span>Last updated: March 2019</span>
							</div>
							<div class="help-description">
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
								</p>
								<p>
									quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
								</p>
								<figure><img src="images/resources/help-shot.jpg" alt=""></figure>
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.
								</p>
							</div>
							<div class="is-helpful">
								<span>is this topic helpful for you ?</span>
								<a href="#" title="">Yes</a>
								<a href="#" title="">No</a>
								<a href="#" title="">Need more Help</a>
								<em>80% users like this article</em>
							</div>
							<div class="share-article">
								<span>share this article to social media</span>
								<a href="#" title="" class="facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" title="" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
								<a href="#" title="" class="instagram"><i class="fa fa-instagram"></i></a>
								<a href="#" title="" class="twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" title="" class="google"><i class="fa fa-google"></i></a>
							</div>
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
								<a href="index-2" title=""><img src="images/logo.png" alt=""></a>
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
	
	
	<script src="{{ asset('js/main.min.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>

</body>	

</html>