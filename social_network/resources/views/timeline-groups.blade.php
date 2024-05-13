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
										<a class="" href="{{ url('time-line/user-profile/') }}" title="" data-ripple="">time line</a>
										<a class="" href="timeline-photos" title="" data-ripple="">Photos</a>
										<a class="" href="timeline-videos" title="" data-ripple="">Videos</a>
										<a class="" href="timeline-friends" title="" data-ripple="">Friends</a>
										<a class="active" href="groups" title="" data-ripple="">Groups</a>
										<a class="" href="about" title="" data-ripple="">about</a>
										<a class="" href="#" title="" data-ripple="">more</a>
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

							<div class="col-lg-12">
								<div class="central-meta">
									<div class="groups">
										<span><i class="fa fa-users"></i> joined Groups</span>
									</div>
									<ul class="nearby-contct">
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/group1.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">funparty</a></h4>
													<span>public group</span>
													<em>32k Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/group2.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">ABC News</a></h4>
													<span>Private group</span>
													<em>5M Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/group3.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">SEO Zone</a></h4>
													<span>Public group</span>
													<em>32k Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/group4.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">Max Us</a></h4>
													<span>Public group</span>
													<em> 756 Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/group5.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">Banana Group</a></h4>
													<span>Friends Group</span>
													<em>32k Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/group6.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">Bad boys n Girls</a></h4>
													<span>Public group</span>
													<em>32k Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/group7.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">Bachelor's fun</a></h4>
													<span>Public Group</span>
													<em>500 Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="{{ url('time-line') }}" title=""><img src="images/resources/group4.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="{{ url('time-line') }}" title="">Max Us</a></h4>
													<span>Public group</span>
													<em> 756 Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
									</ul>
									<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
								</div><!-- photos -->
							</div><!-- centerl meta -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

                                         
@endsection<!-- topbar -->

