@extends('/layouts.app')
@section('content')		
	<section>
		<div class="feature-photo">
			<figure><img src="images/resources/timeline-4.jpg" alt=""></figure>
			<div class="add-btn">		
				<a href="#" title="" data-ripple="">Joined</a>
				<a href="#" title="" data-ripple="">Leave</a>
			</div>
			<form class="edit-phto" style="display: none;">
				<i class="fa fa-camera-retro"></i>
				<label class="fileContainer">
					Edit Cover Photo
				<input type="file"/>
			</label>
			</form>
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						<!-- <div class="user-avatar">
							<figure>
								<img src="images/resources/user-avatar2.jpg" alt="">
								<form class="edit-phto" style="display: none;">
									<i class="fa fa-camera-retro"></i>
									<label class="fileContainer">
										Edit Display Photo
										<input type="file"/>
									</label>
								</form>
							</figure>
						</div> -->
					</div>
					<div class="col-lg-10 col-sm-9">
						<div class="timeline-info">
							<ul>
								<li class="admin-name">
								  <h5>Nhóm số 1</h5>	
								  <span>50 members</span>							  
								</li>
								<li>
									<a class="" href="{{ url('group-view') }}" title="" data-ripple="">Posts</a>
									<a class="active" href="{{ url('group-member') }}" title="" data-ripple="">Members</a>
									<a class="" href="{{ url('inbox') }}" title="" data-ripple="">File</a>
									<!-- <a class="" href="{{ url('insights') }}" title="" data-ripple="">insights</a>
									<a class="" href="{{ url('fav-page') }}" title="" data-ripple="">posts</a>
									<a class="" href="{{ url('page-likers') }}" title="" data-ripple="">likers</a> -->
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		
	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
							<aside class="sidebar static">
									<div class="widget">
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
												<i class="ti-bell"></i>
												<a href="{{ url('notifications') }}" title="">Notifications</a>
											</li>
										</ul>
									</div><!-- Shortcuts -->
									<div class="widget">
										<h4 class="widget-title">Recent Activity</h4>
										<ul class="activitiez">
											<li>
												<div class="activity-meta">
													<i>10 hours Ago</i>
													<span><a href="#" title="">Commented on Video posted </a></span>
													<h6>by <a href="{{ url('time-line') }}">black demon.</a></h6>
												</div>
											</li>
											<li>
												<div class="activity-meta">
													<i>30 Days Ago</i>
													<span><a href="#" title="">Posted your status. “Hello guys, how are you?”</a></span>
												</div>
											</li>
											<li>
												<div class="activity-meta">
													<i>2 Years Ago</i>
													<span><a href="#" title="">Share a video on her timeline.</a></span>
													<h6>"<a href="#">you are so funny mr.been.</a>"</h6>
												</div>
											</li>
										</ul>
									</div><!-- recent activites -->					
								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
							<div class="central-meta">
									<div class="frnds">
										<ul class="nav nav-tabs">
											 <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">Members</a> <span>55</span></li>
											 <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Join requests</a><span>60</span></li>
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
														<span>5 posts</span>	
														<span><a href="#" title="" data-ripple="">demoted to member</a></span>																									
														<a href="#" title="" class="add-butn more-action" data-ripple="">admin</a>
														<a href="#" title="" class="add-butn" data-ripple="">kick out</a>
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
														<span>5 posts</span>	
														<span><a href="#" title="" data-ripple="">Promoted to administrator</a></span>												
														<a href="#" title="" class="add-butn more-action" data-ripple="">member</a>
														<a href="#" title="" class="add-butn" data-ripple="">kick out</a>
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
														<span>5 posts</span>													
														<a href="#" title="" class="add-butn more-action" data-ripple="">member</a>
														<a href="#" title="" class="add-butn" data-ripple="">kick out</a>
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
														<span>5 posts</span>													
														<a href="#" title="" class="add-butn more-action" data-ripple="">member</a>
														<a href="#" title="" class="add-butn" data-ripple="">kick out</a>
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
														<span>5 posts</span>													
														<a href="#" title="" class="add-butn more-action" data-ripple="">member</a>
														<a href="#" title="" class="add-butn" data-ripple="">kick out</a>
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
														<span>5 posts</span>													
														<a href="#" title="" class="add-butn more-action" data-ripple="">member</a>
														<a href="#" title="" class="add-butn" data-ripple="">kick out</a>
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
														<span>5 posts</span>													
														<a href="#" title="" class="add-butn more-action" data-ripple="">member</a>
														<a href="#" title="" class="add-butn" data-ripple="">kick out</a>
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
														<span>5 posts</span>													
														<a href="#" title="" class="add-butn more-action" data-ripple="">member</a>
														<a href="#" title="" class="add-butn" data-ripple="">kick out</a>
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
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
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
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
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
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
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
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
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
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
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
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
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
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
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
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
													</div>
												</div>
											</li>
										</ul>	
											  <button class="btn-view btn-load-more"></button>
										  </div>
										</div>
									</div>
								</div>
								
							</div><!-- centerl meta -->
							<div class="col-lg-3">
								<aside class="sidebar static">	
								<div class="widget">
										<h4 class="widget-title">Description</h4>
										<div class="group-description">
											<h6 class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et excepturi quasi cum, corporis quae atque in nemo nam dolorem. Minima natus repudiandae eum dicta, ratione cumque autem illum rerum similique.</h6>
										</div>
									</div>								
									<div class="widget">
										<h4 class="widget-title">Members</h4>
										<ul class="invition">
											<li>
												<figure><img src="images/resources/friend-avatar8.jpg" alt=""></figure>
												<div class="friend-meta">
													<h4><a href="{{ url('group-members') }}" class="underline" title="">Sophia hayat</a></h4>
													<a href="#" title="" class="invite" data-ripple="">Admin</a>
												</div>
											</li>
											<li>
												<figure><img src="images/resources/friend-avatar4.jpg" alt=""></figure>
												<div class="friend-meta">
													<h4><a href="{{ url('time-line') }}" class="underline" title="">Issabel kaif</a></h4>
													<a href="#" title="" class="invite" data-ripple="">Member</a>
												</div>
											</li>
											<li>
												<figure><img src="images/resources/friend-avatar2.jpg" alt=""></figure>
												<div class="friend-meta">
													<h4><a href="{{ url('time-line') }}" class="underline" title="">Kelly Bill</a></h4>
													<a href="#" title="" class="invite" data-ripple="">Member</a>
												</div>
											</li>
											<li>
												<figure><img src="images/resources/friend-avatar3.jpg" alt=""></figure>
												<div class="friend-meta">
													<h4><a href="{{ url('time-line') }}" class="underline" title="">Allen jhon</a></h4>
													<a href="#" title="" class="invite" data-ripple="">Member</a>
												</div>
											</li>
											<li>
												<figure><img src="images/resources/friend-avatar6.jpg" alt=""></figure>
												<div class="friend-meta">
													<h4><a href="{{ url('time-line') }}" class="underline" title="">tom Andrew</a></h4>
													<a href="#" title="" class="invite" data-ripple="">Member</a>
												</div>
											</li>

											<li>
												<figure><img src="images/resources/friend-avatar3.jpg" alt=""></figure>
												<div class="friend-meta">
													<h4><a href="{{ url('time-line') }}" title="" class="underline">Allen doe</a></h4>
													<a href="#" title="" class="invite" data-ripple="">Member</a>
												</div>
											</li>
										</ul>
									</div>
								
								</aside>
							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>
	
	@endsection