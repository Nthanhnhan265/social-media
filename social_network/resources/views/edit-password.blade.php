@extends('layouts.app')
@section('content')	
	<section>
		<div class="feature-photo">
			<figure><img src="images/resources/timeline-1.jpg" alt=""></figure>
			<div class="add-btn">
				<span>1205 followers</span>
				<a href="#" title="" data-ripple="">Add Friend</a>
			</div>
			<form class="edit-phto">
				<i class="fa fa-camera-retro"></i>
				<label class="fileContainer">
					Edit Cover Photo
				<input type="file"/>
				</label>
			</form>
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						<div class="user-avatar">
							<figure>
								<img src="images/resources/user-avatar.jpg" alt="">
								<form class="edit-phto">
									<i class="fa fa-camera-retro"></i>
									<label class="fileContainer">
										Edit Display Photo
										<input type="file"/>
									</label>
								</form>
							</figure>
						</div>
					</div>
					<div class="col-lg-10 col-sm-9">
						<div class="timeline-info">
							<ul>
								<li class="admin-name">
								  <h5>Janice Griffith</h5>
								  <span>Group Admin</span>
								</li>
								<li>
										<a class="" href="{{ url('time-line') }}" title="" data-ripple="">time line</a>
										<a class="" href="{{ url('timeline-photos') }}" title="" data-ripple="">Photos</a>
										<a class="" href="{{ url('imeline-videos') }}t" title="" data-ripple="">Videos</a>
										<a class="" href="{{ url('timeline-friends') }}" title="" data-ripple="">Friends</a>
										<a class="" href="{{ url('groups') }}" title="" data-ripple="">Groups</a>
										<a class="" href="{{ url('about') }}" title="" data-ripple="">about</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- top area -->

		<section>
			<div class="gap gray-bg">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="row" id="page-contents">
								<div class="col-lg-3">
									<aside class="sidebar static">
										<div class="widget">
											<h4 class="widget-title">Recent Activity</h4>
											<ul class="activitiez">
												<li>
													<div class="activity-meta">
														<i>10 hours Ago</i>
														<span><a title="" href="#">Commented on Video posted </a></span>
														<h6>by <a href="{{ url('time-line') }}">black demon.</a></h6>
													</div>
												</li>
												<li>
													<div class="activity-meta">
														<i>30 Days Ago</i>
														<span><a title="" href="#">Posted your status. “Hello guys, how are you?”</a></span>
													</div>
												</li>
												<li>
													<div class="activity-meta">
														<i>2 Years Ago</i>
														<span><a title="" href="#">Share a video on her timeline.</a></span>
														<h6>"<a href="#">you are so funny mr.been.</a>"</h6>
													</div>
												</li>
											</ul>
										</div>
										<div class="widget stick-widget">
											<h4 class="widget-title">Edit info</h4>
											<ul class="naves">

											<li>
												<i class="ti-info-alt"></i>
												<a href="{{ url('edit-profile-basic') }}" title="">Basic info</a>
											</li>
											<li>
												<i class="ti-heart"></i>
												<a href="{{ url('edit-interest') }}" title="">My interests</a>
											</li>
											<li>
												<i class="ti-settings"></i>
												<a href="{{ url('edit-account-setting') }}" title="">account setting</a>
											</li>
											<li>
												<i class="ti-lock"></i>
												<a href="{{ url('edit-password') }}" title="">change password</a>
											</li>
											</ul>
										</div><!-- settings widget -->										
									</aside>
								</div><!-- sidebar -->
								<div class="col-lg-6">
									<div class="central-meta">
										<div class="editing-info">
											<h5 class="f-title"><i class="ti-lock"></i>Change Password</h5>
											
											<form method="post">
												<div class="form-group">	
												  <input type="password" id="input" required="required"/>
												  <label class="control-label" for="input">New password</label><i class="mtrl-select"></i>
												</div>
												<div class="form-group">	
												  <input type="password" required="required"/>
												  <label class="control-label" for="input">Confirm password</label><i class="mtrl-select"></i>
												</div>
												<div class="form-group">	
												  <input type="password" required="required"/>
												  <label class="control-label" for="input">Current password</label><i class="mtrl-select"></i>
												</div>
												<a class="forgot-pwd underline" title="" href="#">Forgot Password?</a>
												<div class="submit-btns">
													<button type="button" class="mtr-btn"><span>Cancel</span></button>
													<button type="button" class="mtr-btn"><span>Update</span></button>
												</div>
											</form>
										</div>
									</div>	
								</div><!-- centerl meta -->
								<div class="col-lg-3">
									<aside class="sidebar static">
										<div class="widget">
											<div class="banner medium-opacity bluesh">
											<div style="background-image: url(images/resources/baner-widgetbg.jpg)" class="bg-image"></div>																					
										</div>											
										</div>
										<div class="widget stick-widget">
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
									</aside>
								</div><!-- sidebar -->
							</div>	
						</div>
					</div>
				</div>
			</div>	
		</section>
@endsection
		