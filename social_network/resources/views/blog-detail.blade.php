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
	</div><!-- responsive header -->

	<div class="topbar transparent">
		<div class="logo">
			<a title="" href="{{ url ('newsfeed') }}"><img src="images/logo2.png" alt=""></a>
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
							<h1>Blog Detail</h1>
							<nav class="breadcrumb">
							  <a class="breadcrumb-item" href="index-2">Home</a>
							  <span class="breadcrumb-item active">Blog Detail</span>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- top area animated -->

	<section>
		<div class="gap ext-bottom">
			<div class="container">
				<div class="row">
					<div class="offset-lg-1 col-lg-10">
						<div class="detail-page">
							<div class="detail-top">
								<img src="images/resources/blog-detailfull.jpg" alt="">
								<div class="connect-with">
                                	<ul class="social-connect">
                                    	<li class="rs">
                                        	<i class="fa fa-rss"></i>
                                            <span>
                                            	<a title="" href="#">Subscribe</a>
                                                <i>to Rss Feed</i>
                                            </span>
                                        </li>
                                        <li class="twit">
                                        	<i class="fa fa-twitter"></i>
                                            <span>
                                            	<a title="" href="#">Follow Us</a>
                                                <i>on twitter</i>
                                            </span>
                                        </li>
                                        <li class="fb">
                                        	<i class="fa fa-facebook"></i>
                                            <span>
                                            	<a title="" href="#">Find Us</a>
                                                <i>on Facebook</i>
                                            </span>
                                        </li>
                                        <li class="googl">
                                        	<i class="fa fa-google-plus"></i>
                                            <span>
                                            	<a title="" href="#">Find Us</a>
                                                <i>on Google plus</i>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
							</div>
							<div class="detail-meta">
								<h2>The Nike Air Zoom Pegasus 33 Print Big Kids' Running Shoe</h2>

								<div class="post-time">
									<div class="author-thumb">
									<img src="images/resources/chatlist2.jpg" alt="">
									<span><a href="#" title="">by daniel</a></span>
								</div>
									<span class="post-date">
										<i class="fa fa-calendar"></i>
										<a title="" href="#">12 July 2016</a>
									</span>
									<span class="coments">
										<i class="fa fa-comments"></i>
										<a title="" href="#">25</a>
									</span>
								</div>
								<p>
									Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years  Wick is forced back associate plotting. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.
								</p>
								<blockquote>
									<p>
										“  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua. ”
									</p>
								</blockquote>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.
								</p>
								<figure class="alignright">
									<img src="images/resources/blog-detail2.jpg" alt="">
								</figure>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipi slabore et dolore magna aliqua. Ut enim ad minim irure dolor in reprehenderit.
								</p>
								<ul>
									<li>Integer at diam gravida fringilla Nibh preti purus</li>
									<li>Mauris laoreet, nisl id faucibus pellentesque, mi mi</li>
									<li>Vivamus accumsan nisl id massa finibus aliquet</li>
									<li>justo accumsan nisi, non congue metus</li>
									<li>velit id metus ullamcorper tristique</li>
									<li>Nisi rutrum, eu ornare augue tristique.</li>
								</ul>
								<div class="tag-n-cat">
									<div class="tags">
										<span><i class="fa fa-tags"></i> Post Tags:</span>
										<a href="#" title="">News</a>
										<a href="#" title="">ideas</a>
										<a href="#" title="">collection</a>
										<a href="#" title="">exclusive</a>
										<a href="#" title="">features</a>
									</div>
									<div class="tags">
										<span><i class="fa fa-filter"></i> Post Categories:</span>
										<a href="#" title="">News</a>
										<a href="#" title="">ideas</a>
										<a href="#" title="">collection</a>
										<a href="#" title="">exclusive</a>
										<a href="#" title="">features</a>
									</div>
								</div>
								<div class="gap-60">
									<div class="site-admin">
										<div class="admin-avatar">
											<img src="images/resources/admin4.jpg" alt="">
										</div>
										<div class="admin-postmeta">
											<h4>Sarah William</h4>
											<span>Web Developer, Online Instructor</span>
											<p>
												I always loved computers and technology in general. In 2011 I was lucky enough to be invited.
											</p>

										</div>
									</div>
								</div>
								<div class="gap-60 no-top">
									<div class="comment-area">
										<h4 class="comment-title">03 comments</h4>
										<ul class="comments">
											<li>
												<div class="comment-box">
													<div class="commenter-photo">
														<img alt="" src="images/resources/commenter-1.jpg">
													</div>
													<div class="commenter-meta">
														<div class="comment-titles">
															<h6>willimes doe</h6>
															<span>12 june 2017</span>
															<a title="" href="#" class="reply">reply</a>
														</div>
														<p>
															Quis autem velum iure reprehe nderit. Lorem ipsum dolor sit amet adipiscing egetmassa
	pulvinar eu aliquet nibh dapibus.
														</p>
													</div>
												</div>
												<ul>
													<li>
														<div class="comment-box">
															<div class="commenter-photo">
																<img alt="" src="images/resources/commenter-2.jpg">
															</div>
															<div class="commenter-meta">
																<div class="comment-titles">
																	<h6>Qlark Jack</h6>
																	<span>22 july 2017</span>
																	<a title="" href="#" class="reply">reply</a>
																</div>
																	<p>
																	Quis autem velum iure reprehe nderit. Lorem ipsum dolor sit amet adipiscing egetmassa
		pulvinar eu aliquet nibh dapibus.
																</p>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li>
												<div class="comment-box">
													<div class="commenter-photo">
														<img alt="" src="images/resources/commenter-3.jpg">
													</div>
													<div class="commenter-meta">
														<div class="comment-titles">
															<h6>Olivia Take</h6>
															<span>15 jan 2016</span>
															<a title="" href="#" class="reply">reply</a>
														</div>
														<p>
															Quis autem velum iure reprehe nderit. Lorem ipsum dolor sit amet adipiscing egetmassa
	pulvinar eu aliquet nibh dapibus.
														</p>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div><!-- comments sec -->
								<div class="gap-60 no-gap">
									<h4 class="comment-title">Leave a Comment</h4>
									<div class="contact-form">
										<form method="post">
											<div class="form-group">
											  <input type="text" id="input" required="required"/>
											  <label class="control-label" for="input">First & Last Name</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">
											  <input type="text" required="required"/>
											  <label class="control-label" for="input"><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c287afa3abae82">[email&#160;protected]</a></label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">
											  <input type="text" required="required"/>
											  <label class="control-label" for="input">Subject</label><i class="mtrl-select"></i>
											</div>

											<div class="form-group">
											  <textarea rows="4" id="textarea" required="required"></textarea>
											  <label class="control-label" for="textarea">Message</label><i class="mtrl-select"></i>
											</div>
											<div class="submit-btns">
												<button class="mtr-btn signup" type="button"><i>Submit</i></button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="gap no-gap bluesh high-opacity btm-mockup">
			<div class="content-bg-wrap" style="background: url(images/resources/btm-banner.png)"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="btm-baner">
							<div class="baner-mockup">
								<img src="images/resources/btm-baner-avatar.png" alt="">
							</div>
							<div class="baner-inf">
								<span>wana more friends?</span>
								<a href="#" title="">Start Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- footer top -->

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
						<li><a href="about" title="">about us</a></li>
						<li><a href="contact" title="">contact us</a></li>
						<li><a href="terms" title="">terms & Conditions</a></li>
						<li><a href="#" title="">RSS syndication</a></li>
						<li><a href="sitemap" title="">Sitemap</a></li>
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

	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('ajs/main.min.js') }}"></script>
	<script src="{{ asset('js/strip.pkgd.min.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
