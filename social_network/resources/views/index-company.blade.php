<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Winku Social Network Toolkit</title>
	<link rel="icon" href="{{ asset('images/fav.png') }}" type="image/png" sizes="16x16"> 
    
	<link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/color.css') }}">
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
	<link rel="stylesheet" href="{{ asset(' css/strip.css') }}">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<!-- responsive header -->
@extends('/layouts.header')
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
	
	<div class="gap100 no-gap">
        <div class="container-fluid">
				<div class="row">
					<div class="background-video">
						<video class="bv-video" muted></video>
						<div class="videobg-meta">
							<h3><i class="fa fa-smile-o"></i>Hi, we are Socials</h3>
                            <div class="info">
                            	<span>Our own social network</span>
                                <p>
                                    We include an extremely advanced yet easy to understand template options panel that allows you to quickly customize the template without any hesitation.
                                </p>
                                <a href="#" title="" class="btn">about me</a>
                            </div>
						</div>
					</div>
				</div>
			</div>
    </div><!-- background video featured area -->
	
	<section>
		<div class="gap100 no-top overlap-75">
			<div class="container">
				<div class="servic-category">
					<div class="row merged">
						<div class="col-lg-4">
							<div class="category-box">
								<i class="fa fa-wordpress"></i>
								<h2>WordPress Services</h2>
								<p>Met consectetur adipisicing elit dolore suscipit, inventore aliquid...</p>
								<a href="#" class="main-btn" title="">Read More</a>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="category-box selected">
								<i class="fa fa-html5"></i>
								<h2>Html Services</h2>
								<p>Met consectetur adipisicing elit dolore suscipit, inventore aliquid...</p>
								<a href="#" class="main-btn" title="">Read More</a>
							</div>
						</div>
						<div class="col-lg-4">
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
		<div class="gap100 no-top">
			<div class="container">
				<div class="row remove-ext-40">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2>Our Blog</h2>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="g-post-classic">
							<figure>
								<img alt="" src="images/resources/bloggrid-1.jpg">
								<i class="fa fa-video-camera"></i>
							</figure>
							<div class="g-post-meta">
								<div class="post-title">
									<h4><a title="" href="#">how to create content that get traffic</a></h4>
									<p>We got really awesome shots for the new catalog, Here’s a photo from last month’s photoshoot. </p>
									<span class="p-date">by <a href="#" title="">JACK Sparo</a> - 12 hours ago </span>
								</div>	
								<div class="g-post-ranking">
									<a title="" href="#" class="likes"><i class="fa fa-heart-o"></i>10 likes</a>
									<a title="" href="#" class="coments"><i class="fa fa-comment-o"></i>5 comments</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="g-post-classic">
							<figure>
								<img alt="" src="images/resources/bloggrid-2.jpg">
								<i class="fa fa-soundcloud"></i>
							</figure>
							<div class="g-post-meta">
								<div class="post-title">
									<h4><a title="" href="#">how to create content that get traffic</a></h4>
									<p>We got really awesome shots for the new catalog, Here’s a photo from last month’s photoshoot. </p>
									<span class="p-date">by <a href="#" title="">JACK Sparo</a> - 12-Sep-2018 </span>
								</div>	
								<div class="g-post-ranking">
									<a title="" href="#" class="likes"><i class="fa fa-heart-o"></i>10 likes</a>
									<a title="" href="#" class="coments"><i class="fa fa-comment-o"></i>5 comments</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="g-post-classic">
							<figure>
								<img alt="" src="images/resources/bloggrid-3.jpg">
								<i class="fa fa-image"></i>
							</figure>
							<div class="g-post-meta">
								<div class="post-title">
									<h4><a title="" href="#">how to create content that get traffic</a></h4>
									<p>We got really awesome shots for the new catalog, Here’s a photo from last month’s photoshoot. </p>
									<span class="p-date">by <a href="#" title="">JACK Sparo</a> - 2 days ago </span>
								</div>	
								<div class="g-post-ranking">
									<a title="" href="#" class="likes"><i class="fa fa-heart-o"></i>10 likes</a>
									<a title="" href="#" class="coments"><i class="fa fa-comment-o"></i>5 comments</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- latest news blog section -->
	
	<section>
		<div class="gap100 pattern">
			<div class="bg-image" style="background-image:url(images/resources/newsletter-bg.jpg); background-repeat: no-repeat;"></div>
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
				<div class="section-heading">
					<h2>Our Portfolio</h2>
				</div>
				<div class="row" id="page-contents">
					<div class="col-lg-12">
						<div id="options" class="isotop-full">
							<div class="option-isotop">
							  <ul id="filter2" class="option-set icon-style" data-option-key="filter">
								 <li><a  href="#all" data-option-value="*" class="selected" data-toggle="tooltip" data-placement="top" title="All">all</a></li>
								 <li><a href="#accessory" data-option-value=".accessory" data-toggle="tooltip" data-placement="top" title="Accessories">Accessories</a></li>
								 <li><a href="#diy" data-option-value=".diy" data-toggle="tooltip" data-placement="top" title="DIY">Pages</a></li>
								 <li><a href="#cloth" data-option-value=".cloth" data-toggle="tooltip" data-placement="top" title="Clothing">Portfolio</a></li>
								 <li><a href="#jewl" data-option-value=".jewl" data-toggle="tooltip" data-placement="top" title="Jewellery">Blog</a></li>
								  <li><a href="#hand" data-option-value=".hand" data-toggle="tooltip" data-placement="top" title="Jewellery">Shop</a></li>
							  </ul>
							</div>
						</div><!-- FILTER BUTTONS -->
					</div>
					<div class="col-lg-12">	
						<div class="row masonry">	
									<div class="hand col-lg-3 col-sm-6">
										<div class="portfolio-box">
											<img src="images/resources/folio-detail1.jpg" alt="">
											<div class="overlinks">
												<h4><a href="portfolio-detail" title="">Leather Shoes</a></h4>
												<ul class="cate">
													<li><a href="#" title="">Shoes</a></li>
													<li><a href="#" title="">home made</a></li>
													<li><a href="#" title="">clothes</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="jewl col-lg-3 col-sm-6">
										<div class="portfolio-box">
											<img src="images/resources/folio-detail2.jpg" alt="">
											<div class="overlinks">
												<h4><a href="portfolio-detail" title="">Baby Chair</a></h4>
												<ul class="cate">
													<li><a href="#" title="">Shoes</a></li>
													<li><a href="#" title="">home made</a></li>
													<li><a href="#" title="">clothes</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="accessory col-lg-3 col-sm-6">
										<div class="portfolio-box">
											<img src="images/resources/folio-detail3.jpg" alt="">
											<div class="overlinks">
												<h4><a href="portfolio-detail" title="">JBL Headphone</a></h4>
												<ul class="cate">
													<li><a href="#" title="">Shoes</a></li>
													<li><a href="#" title="">home made</a></li>
													<li><a href="#" title="">clothes</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="diy col-lg-3 col-sm-6">
										<div class="portfolio-box">
											<img src="images/resources/folio-detail4.jpg" alt="">
											<div class="overlinks">
												<h4><a href="portfolio-detail" title="">Winter Cap</a></h4>
												<ul class="cate">
													<li><a href="#" title="">Shoes</a></li>
													<li><a href="#" title="">home made</a></li>
													<li><a href="#" title="">clothes</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="cloth col-lg-3 col-sm-6">
										<div class="portfolio-box">
											<img src="images/resources/folio-detail5.jpg" alt="">
											<div class="overlinks">
												<h4><a href="portfolio-detail" title="">Men's Watch</a></h4>
												<ul class="cate">
													<li><a href="#" title="">Watches</a></li>
													<li><a href="#" title="">home made</a></li>
													<li><a href="#" title="">clothes</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="hand col-lg-3 col-sm-6">
										<div class="portfolio-box">
											<img src="images/resources/folio-detail6.jpg" alt="">
											<div class="overlinks">
												<h4><a href="portfolio-detail" title="">Winter Cap</a></h4>
												<ul class="cate">
													<li><a href="#" title="">accessoires</a></li>
													<li><a href="#" title="">home made</a></li>
													<li><a href="#" title="">clothes</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="accessory col-lg-3 col-sm-6">
										<div class="portfolio-box">
											<img src="images/resources/folio-detail7.jpg" alt="">
											<div class="overlinks">
												<h4><a href="portfolio-detail" title="">Stylo Shoes</a></h4>
												<ul class="cate">
													<li><a href="#" title="">Shoes</a></li>
													<li><a href="#" title="">home made</a></li>
													<li><a href="#" title="">clothes</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="jewl col-lg-3 col-sm-6">
										<div class="portfolio-box">
											<img src="images/resources/folio-detail8.jpg" alt="">
											<div class="overlinks">
												<h4><a href="portfolio-detail" title="">G-Sound Headphone</a></h4>
												<ul class="cate">
													<li><a href="#" title="">accessoires</a></li>
													<li><a href="#" title="">home made</a></li>
													<li><a href="#" title="">clothes</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>	
					</div>
				</div>	
			</div>
		</div>
	</section><!-- our portfolio -->
	
	<section>
		<div class="gap100 no-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2>Pricing</h2>
							<p>Our affordable pricing for your potential customers with this winku example. it's build with bootstrap 4 component and utilities with little customisation</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="price-table">
							<h3>Free</h3>
							<span>$0 <i>/ Month</i></span>
							<ul>
								<li>10 users included</li>
								<li>2gb of storage</li>
								<li>email supported</li>
								<li>help center access</li>
								<li>full bandwidth</li>
							</ul>
							<a href="#" title="" class="main-btn">Get Started!</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="price-table">
							<h3>Pro</h3>
							<span>$19 <i>/ Month</i></span>
							<ul>
								<li>10 users included</li>
								<li>2gb of storage</li>
								<li>email supported</li>
								<li>help center access</li>
								<li>full bandwidth</li>
							</ul>
							<a href="#" title="" class="main-btn">Get Started!</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="price-table">
							<h3>Enterprise</h3>
							<span>$29 <i>/ Month</i></span>
							<ul>
								<li>10 users included</li>
								<li>2gb of storage</li>
								<li>email supported</li>
								<li>help center access</li>
								<li>full bandwidth</li>
							</ul>
							<a href="#" title="" class="main-btn">Get Started!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- price table -->
	
	<section>
		<div class="gap100 no-top">
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
							<figure><img src="images/resources/team2.jpg" alt=""></figure>
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
							<figure><img src="images/resources/team4.jpg" alt=""></figure>
							<div class="team-info">
								<h4>jaison born</h4>
								<span>Operations</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- our team -->
	
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
	
	<script src="{{('js/main.min.js')}}"></script>
	<script src="js/backgroundVideo.js"></script>
	<script src="js/strip.pkgd.min.js"></script>
	<script src="js/script.js"></script>
	
	<script>
		jQuery(window).on('load',function() {
			"use strict";
			// video parallax for top featured
			const backgroundVideo = new BackgroundVideo('.bv-video', {
			  src: [
				'videos/video3.MP4',
			  ]
			});
		});
			
	</script>

</body>	

</html>