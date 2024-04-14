
@extends('/layouts.app')
	@section('content')
	
	<section>
		<div class="feature-photo">
			<figure><img alt="" src="images/resources/timeline-4.jpg"></figure>
			<div class="add-btn">
				<span>1.3k followers</span>
				<a data-ripple="" title="" href="#">Add button</a>
			</div>
			<form class="edit-phto">
				<i class="fa fa-camera-retro"></i>
				<label class="fileContainer">
					Edit Cover Photo
					<input type="file">
				</label>
			</form>
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						<div class="user-avatar">
							<figure>
								<img alt="" src="images/resources/user-avatar2.jpg">
								<form class="edit-phto">
									<i class="fa fa-camera-retro"></i>
									<label class="fileContainer">
										Edit Display Photo
										<input type="file">
									</label>
								</form>
							</figure>
						</div>
					</div>
					<div class="col-lg-10 col-sm-9">
						<div class="timeline-info">
							<ul>
								<li class="admin-name">
									<h5>Amazon Shop</h5>
									<span>@amazonshop</span>
								</li>
								<li>
									<a data-ripple="" title="" href="{{ url('fav-page') }}" class="">Page</a>
									<!-- <a data-ripple="" title="" href="{{ url('notifications') }}" class="">Notifications</a> -->
									<a data-ripple="" title="" href="{{ url('inbox') }}" class="">inbox</a>
									<!-- <a data-ripple="" title="" href="{{ url('insights') }}" class="">insights</a> -->
									<a data-ripple="" title="" href="{{ url('post') }}" class="">posts</a>
									<a data-ripple="" title="" href="{{ url('page-likers') }}" class="active">likers</a>
								</li>
								
							</ul>
							
						</div>
					</div>
				</div>
			</div>
			
			<section>
				<div class="gap gray-bg">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12">
								<div class="row" id="page-contents">
										<div class="col-lg-3">
											<aside class="sidebar static">
												<!--#shorcut  -->
												<div class="widget">
													<!-- 									
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
												</div>Shortcuts -->
												<!-- <div class="widget stick-widget">
													<h4 class="widget-title">Profile intro</h4>
													<ul class="short-profile">
														<li>
															<span>about</span>
															<p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company. </p>
														</li>
														<li>
															<span>fav tv show</span>
															<p>Sacred Games, Spartcus Blood, Games of theron</p>
														</li>
														<li>
															<span>favourit music</span>
															<p>Justin Biber, Nati Natsha, Shakira</p>
														</li>
													</ul>
												</div>profile intro widget -->
											
											</aside>
										</div><!-- sidebar -->
										<div class="col-lg-6">
											<div class="central-meta">
												<div class="frnds">
													<ul class="nav nav-tabs">
														<li class="nav-item"><a class="active" href="#frends" data-toggle="tab">Likers</a> <span>55</span></li>
														<li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Follwers</a><span>60</span></li>
													</ul>
													
													<!-- Tab panes -->
													<div class="tab-content">
														<div class="tab-pane active fade show " id="frends" >
															<ul class="nearby-contct">
																<li>
																	<div class="nearly-pepls">
																		<figure>
																			<a href="{{ url('time-line') }}" title=""><img src="images/resources/friend-avatar9.jpg" alt=""></a>
																		</figure>
																		<div class="pepl-info">
																			<h4><a href="{{ url('time-line') }}" title="">jhon kates</a></h4>
																			<span>ftv model</span>
																			<a href="{{ url('time-line') }}" title="" class="add-butn" data-ripple="">view profile</a>
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
																	<span>tv actresses</span>
																	<a href="{{ url('time-line') }}" title="" class="add-butn" data-ripple="">view profile</a>
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
																	<span>work at IBM</span>
																	<a href="{{ url('time-line') }}" title="" class="add-butn" data-ripple="">view profile</a>
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
																	<span>Student</span>
																	<a href="{{ url('time-line') }}" title="" class="add-butn" data-ripple="">view profile</a>
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
																	<a href="{{ url('time-line') }}" title="" class="add-butn" data-ripple="">view profile</a>
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
																	<span>Study in university</span>
																	<a href="{{ url('time-line') }}" title="" class="add-butn" data-ripple="">view profile</a>
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
																	<span>work as dancers</span>
																	<a href="{{ url('time-line') }}" title="" class="add-butn" data-ripple="">view profile</a>
																</div>
															</div>
														</li>
														<li>
															<div class="nearly-pepls">
																<figure>
																	<a href="{{ url('time-line') }}" title=""><img src="images/resources/nearly2.jpg" alt=""></a>
																</figure>
																<div class="pepl-info">
																	<h4><a href="{{ url('time-line') }}" title="">Ema watson</a></h4>
																	<span>personal business</span>
																	<a href="{{ url('time-line') }}" title="" class="add-butn" data-ripple="">view profile</a>
																</div>
															</div>
														</li>
													</ul>
													<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
												</div>
												<div class="tab-pane fade" id="frends-req" >
													<ul class="nearby-contct">
														<li>
															<div class="nearly-pepls">
																<figure>
																	<a href="{{ url('time-line') }}" title=""><img src="images/resources/nearly5.jpg" alt=""></a>
																</figure>
																<div class="pepl-info">
																	<h4><a href="{{ url('time-line') }}" title="">Amy watson</a></h4>
																	<span>ftv model</span>
																	<a href="{{ url('time-line') }}" title="" class="add-butn" data-ripple="">view profile</a>
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
																	<a href="{{ url('time-line') }}" title="" class="add-butn" data-ripple="">view profile</a>
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
																	<a href="{{ url('time-line') }}" title="" class="add-butn" data-ripple="">view profile</a>
																</div>
															</div>
														</li>
														<li>
															<div class="nearly-pepls">
																<figure>
																	<a href="{{ url('time-line') }}" title=""><img src="images/resources/friend-avatar9.jpg" alt=""></a>
																</figure>
																<div class="pepl-info">
																	<h4><a href="{{ url('time-line') }}" title="">jhon kates</a></h4>
																	<span>ftv model</span>
																	<a href="{{ url('time-line') }}" title="" class="add-butn" data-ripple="">view profile</a>
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
																	<a href="{{ url('time-line') }}" title="" class="add-butn" data-ripple="">view profile</a>
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
																	<a href="{{ url('time-line') }}" title="" class="add-butn" data-ripple="">view profile</a>
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
																	<a href="{{ url('time-line') }}" title="" class="add-butn" data-ripple="">view profile</a>
																</div>
															</div>
														</li>
														<li>
															<div class="nearly-pepls">
																<figure>
																	<a href="{{ url('time-line') }}" title=""><img src="images/resources/friend-avatar9.jpg" alt=""></a>
																</figure>
																<div class="pepl-info">
																	<h4><a href="{{ url('time-line') }}" title="">jhon kates</a></h4>
																	<span>ftv model</span>
																	<a href="{{ url('time-line') }}" title="" class="add-butn" data-ripple="">view profile</a>
																</div>
															</div>
														</li>
													</ul>	
													  </div>
													</div>
												</div>
											</div>	
										</div><!-- centerl meta -->
										<div class="col-lg-3">
										
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
		</div>
	</section><!-- top area -->
@endsection