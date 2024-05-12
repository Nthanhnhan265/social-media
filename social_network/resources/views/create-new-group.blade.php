@extends('/layouts.app')
@section('content')	
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

								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="editing-info">
										<h5 class="f-title"><i class="ti-info-alt"></i> Create new group</h5>
										
										<form method="post" action="{{ url('newgroup') }}">
											@csrf
											@method("post")
											<div class="form-group half">  
												<input type="text" id="group_name" name="name" required="required" value="">
												<label class="control-label" for="group_name">Group Name</label><i class="mtrl-select"></i>
											</div>                                                                                        
											<div class="form-group">  
												<textarea rows="4" id="description" name="description" required="required"></textarea>
												<label class="control-label" for="description">Description</label><i class="mtrl-select"></i>
											</div>										
											<div class="submit-btns">                                                
												<button type="submit" class="mtr-btn"><span>Create</span></button>
											</div>
										</form>

									</div>
								</div>	
							</div><!-- centerl meta -->
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
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