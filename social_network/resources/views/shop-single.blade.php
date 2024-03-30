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
							<h1>Shop Detail Page</h1>
							<nav class="breadcrumb">
							  <a class="breadcrumb-item" href="{{ url('index-2') }}">Home</a>
							  <span class="breadcrumb-item active">Shop Detail</span>
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
						<div class="prod-detail">
							<div class="row">
								<div class="col-lg-6">
									<div class="prod-avatar">
										<ul class="slider-for-gold">
											 <li><img src="images/resources/detail-gold1.jpg" alt=""></li>
											 <li><img src="images/resources/detail-gold2.jpg" alt=""></li>
											 <li><img src="images/resources/detail-gold3.jpg" alt=""></li>
											 <li><img src="images/resources/detail-gold1.jpg" alt=""></li>
										</ul>
										<ul class="slider-nav-gold">
											<li><img src="images/resources/detail-gold1.jpg" alt=""></li>
											<li><img src="images/resources/detail-gold2.jpg" alt=""></li>
											<li><img src="images/resources/detail-gold3.jpg" alt=""></li>
											<li><img src="images/resources/detail-gold1.jpg" alt=""></li>
										</ul>
									</div>	
								</div>
								<div class="col-lg-6">
    								<div class="full-postmeta">
										
    									<span class="prices style2">
											<ins>
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>122.00
												</span>
											</ins>
											<del>
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>150.00
												</span>
											</del>                                             
                                    	</span>
                                    	
                                    	<h4>Shoes for <span>Men</span> Black</h4>
										<i>INSPIRED LIVING</i>
                                    	<p>
                                    		Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor 
                                    	</p>
   										<a class="shopnow" title="" href="#">Add To Cart</a>
										<div class="delivery-guide">
											<a href="#" title="">Size Guide</a>
											<a href="#" title="">Delivery & Return</a>
										</div>
										<a class="add_to_wishlist" href="#" title=""><i class="fa fa-heart-o"></i></a>
										<div class="prod categories">
											<span class="cat-heading">Categories:
												<a href="#" title="">Women</a>
												<a href="#" title="">Shoes</a>
											</span>
										</div>
										<div class="prod tags">
											<span class="cat-heading">Tags:
												<a href="#" title="">Jeanz</a>
												<a href="#" title="">Women</a>
												<a href="#" title="">Shoes</a>
											</span>
										</div>
										<div class="share">
											<span>share</span>
											<a href="#" title=""><i class="fa fa-facebook-square"></i></a>
											<a href="#" title=""><i class="fa fa-twitter-square"></i></a>
											<a href="#" title=""><i class="fa fa-google-plus-square"></i></a>
										</div>
										<div class="extras">
								<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip btn2" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><i class="fa fa-play-circle"></i>Watch video</a>
							</div><!-- play video btn -->
    								</div>
    							</div>
							</div>
							
							<div class="gap no-bottom">
								<div class="tab-section">
									<ul class="nav nav-tabs single-btn">
										 <li class="nav-item"><a class="active" href="#desc" data-toggle="tab">Description</a></li>
										 <li class="nav-item"><a class="" href="#additional" data-toggle="tab">Additional Information</a></li>
										 <li class="nav-item"><a class="" href="#review" data-toggle="tab">Reviews (2)</a></li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
									  <div class="tab-pane active fade show " id="desc" >
										<div class="more-pix">
											<h2 class="main-title text-center">Shoes for Men Black</h2>
											<div class="row">
												<div class="offset-md-1 col-lg-10">
													<p class="prod-info text-center">
														Let the rest look at you with starry eyes, as you show off your love for fashion and for the company by carrying this grey handbag from Inc.5. Featuring a sophisticated gusseted design and delicate laser cut details all over,and find the way through the maze of the creative process/journey. this handbag is a cut above the rest. It also has twin grab handles and a zip closure that allows the ease of carrying.
													</p>
													<p class="prod-info text-center">
														Ariadne’s thread is the thread of the divine present in all things.  or rather uncover, their source and find the way through the maze of the creative process/journey.
														Let the rest look at you with starry eyes, as you show off your love for fashion and for the company by carrying this grey handbag from Inc.5.
													</p>
												</div>
											</div>	
										</div>
									  </div>
									  <div class="tab-pane fade" id="additional" >
										<div class="aditional-inf">
										  	<h2 class="main-title">Shoes for Men Black</h2>
											<p class="adition-info">
												Fusce vestibulum justo id varius tristique. Vivamus purus odio, interdum id massa ullamcorper, tempus.
											</p>
											<table class="table table-responsive adition">
												<tbody>
													<tr>
														<td class="bold">Material:</td>
														<td>Cotton</td>
													</tr>
													<tr>
														<td class="bold">Weight:</td>
														<td>100 g</td>
													</tr>
													<tr>
														<td class="bold">Color:</td>
														<td>Beige, white, blue</td>
													</tr>
													<tr>
														<td class="bold">Size:</td>
														<td>44, 48, 50</td>
													</tr>
												</tbody>
											</table>
										  </div>
									  </div>
									  <div class="tab-pane fade" id="review">
											<div class="woocommerce-Reviews">
												<div id="comments">
													<h2 class="woocommerce-Reviews-title">Reviews</h2>
													<ol class="commentlist">
														<li>
															<div class="comment_container">
																<img src="images/resources/single-comment1.jpg" alt="" class="avatar">
																<div class="comment-text">
																	<span class="user-name">Jason Bourne</span>
																	<a class="post-date">24 Sep 2018</a>
																	<div class="star-rating">
																		<span><i class="fa fa-star"></i></span>
																		<span><i class="fa fa-star"></i></span>
																		<span><i class="fa fa-star"></i></span>
																		<span><i class="fa fa-star"></i></span>
																		<span><i class="fa fa-star"></i></span>
																	</div>
																	<p>
																		Duis ante magna, aliquet sit amet sagittis vitae, tristique at lacus. Ut et accumsan turpis. Phasellus ornare, tortor ut congue imperdiet, mauris magna condimentum nulla, non malesuada mauris massa eu augue.
																	</p>
																</div>
															</div>
														</li>
														<li>
															<div class="comment_container">
																<img src="images/resources/single-comment1.jpg" alt="" class="avatar">
																<div class="comment-text">
																	<span class="user-name">Jhon Cena</span>
																	<a class="post-date">12 Aug 2018</a>
																	<div class="star-rating">
																		<span><i class="fa fa-star"></i></span>
																		<span><i class="fa fa-star"></i></span>
																		<span><i class="fa fa-star"></i></span>
																		<span><i class="fa fa-star"></i></span>
																		<span><i class="fa fa-star"></i></span>
																	</div>
																	<p>
																		Duis ante magna, aliquet sit amet sagittis vitae, tristique at lacus. Ut et accumsan turpis. Phasellus ornare, tortor ut congue imperdiet, mauris magna condimentum nulla, non malesuada mauris massa eu augue.
																	</p>
																</div>
															</div>
														</li>
													</ol>
												</div>
												<div id="respond" class="comment-respond">
													<h3 class="reply-title">Post Your Review:</h3>
													<div class="star-rating">
														<label>Rating:</label>
															<span><i class="fa fa-star"></i></span>
															<span><i class="fa fa-star"></i></span>
															<span><i class="fa fa-star"></i></span>
															<span><i class="fa fa-star"></i></span>
															<span><i class="fa fa-star"></i></span>
														</div>
													<form method="post">
														<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
														</p>
														
														<p class="comment-form-author">
															<input type="text" placeholder="Your Name*">
														</p>
														<p class="comment-form-email">
															<input type="text" placeholder="Email*">
														</p>
														<p class="comment-notes">
															<textarea placeholder="Enter your review*"></textarea>
														</p>
													</form>
													
													<p class="form-submit">
														<input type="submit" class="submit" value="submit">
													</p>
													
												</div>
											</div>
									  </div>
									</div>
								</div>
							</div>
							<div class="gap no-bottom">
								<div class="section-heading">
									<h2>Related Products</h2>
								</div>
								<div class="row remove-ext-50">
									<div class="col-lg-3 col-sm-6">
										<div class="product-box">
											<figure>
												<span class="new">New</span>
												<img src="images/resources/shop1.jpg" alt="">
												<ul class="cart-optionz">
													<li><a href="#" title="Add Cart" data-toggle="tooltip"><i class="ti-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick Shop" data-toggle="tooltip"><i class="ti-eye"></i></a></li>
													<li><a href="#" title="Wishlist" data-toggle="tooltip"><i class="ti-heart"></i></a></li>
													<li><a href="#" title="Compare" data-toggle="tooltip"><i class="ti-split-v-alt"></i></a></li>
												</ul>
											</figure>
											<div class="product-name">
												<h5><a href="#" title="">GSound wireless Headphone</a></h5>
												<ul class="starz">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<div class="prices">
													<ins>$29</ins>
													<del>$39</del>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6">
										<div class="product-box">
											<figure>
												<span class="hot">Hot</span>
												<img src="images/resources/shop2.jpg" alt="">
												<ul class="cart-optionz">
													<li><a href="#" title="Add Cart" data-toggle="tooltip"><i class="ti-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick Shop" data-toggle="tooltip"><i class="ti-eye"></i></a></li>
													<li><a href="#" title="Wishlist" data-toggle="tooltip"><i class="ti-heart"></i></a></li>
													<li><a href="#" title="Compare" data-toggle="tooltip"><i class="ti-split-v-alt"></i></a></li>
												</ul>
											</figure>
											<div class="product-name">
												<h5><a href="#" title="">High class Men watch</a></h5>
												<ul class="starz">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<div class="prices">
													<ins>$29</ins>
													<del>$39</del>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6">
										<div class="product-box">
											<figure>
												<img src="images/resources/shop3.jpg" alt="">
												<ul class="cart-optionz">
													<li><a href="#" title="Add Cart" data-toggle="tooltip"><i class="ti-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick Shop" data-toggle="tooltip"><i class="ti-eye"></i></a></li>
													<li><a href="#" title="Wishlist" data-toggle="tooltip"><i class="ti-heart"></i></a></li>
													<li><a href="#" title="Compare" data-toggle="tooltip"><i class="ti-split-v-alt"></i></a></li>
												</ul>
											</figure>
											<div class="product-name">
												<h5><a href="#" title="">Shoes for Men</a></h5>
												<ul class="starz">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<div class="prices">
													<ins>$49</ins>
													<del>$59</del>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6">
										<div class="product-box">
											<figure>
												<span class="sale">sale</span>
												<img src="images/resources/shop4.jpg" alt="">
												<ul class="cart-optionz">
													<li><a href="#" title="Add Cart" data-toggle="tooltip"><i class="ti-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick Shop" data-toggle="tooltip"><i class="ti-eye"></i></a></li>
													<li><a href="#" title="Wishlist" data-toggle="tooltip"><i class="ti-heart"></i></a></li>
													<li><a href="#" title="Compare" data-toggle="tooltip"><i class="ti-split-v-alt"></i></a></li>
												</ul>
											</figure>
											<div class="product-name">
												<h5><a href="#" title="">Leather Pent Belt</a></h5>
												<ul class="starz">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<div class="prices">
													<ins>$29</ins>
													<del>$39</del>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- related products -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- shop detail meta -->
	
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
	
	
	<script src="{{ asset('js/main.min.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>

</body>	

</html>