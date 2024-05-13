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
								  <span>{{ $memberCount }} members</span>							  
								</li>
								<li>
									<a class="" href="{{ url('group-view', $group->group_id) }}" title="" data-ripple="">Posts</a>
									<a class="active" href="#" title="" data-ripple="">Members</a>
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
								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
							<div class="central-meta">
									<div class="frnds">
										<ul class="nav nav-tabs">
											<li class="nav-item"><a class="active" href="#frends" data-toggle="tab">Members</a> <span>{{ $memberCount }}</span></li>
											@if($userRole->role_id_fk != 2)
											<li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Join requests</a><span>{{ $requestCount }}</span></li>																		
											@endif			 
										</ul>

										<!-- Tab panes -->
										<div class="tab-content">
										  <div class="tab-pane active fade show " id="frends" >
											<ul class="nearby-contct">
											@foreach($members as $member)
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="{{ url('time-line') }}" title=""><img style="width: 60px; height: 60px; overflow: hidden" src="{{ asset('images/resources/' . $member->user->avatar) }}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="{{ url('time-line') }}" title="">{{$member->user->first_name.' '.$member->user->last_name }}</a></h4>
														<span>
															@if($member->role_id_fk == 0) Super admin
															@elseif($member->role_id_fk == 1) Admin
															@else Member
															@endif
														<span>
														<br>
														<span><a href="#" title="" data-ripple="">
															@if($userRole->role_id_fk == 0 && $member->role_id_fk == 1) demote to member	
															@elseif($userRole->role_id_fk == 0 && $member->role_id_fk == 2) promote to admin															
															@endif
														</a><span>	
														@if($userRole->role_id_fk == 0 && $member->role_id_fk == 1) 
														<a href="#" title="" class="add-butn" data-ripple="">kick out</a>
														@endif																																															@if($member->role_id_fk != 0) 
														@endif									
													</div>
												</div>
											</li>	
											@endforeach										
										</ul>
											<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
										  </div>
										  @foreach($requests as $request)
										  <div class="tab-pane fade" id="frends-req" >
											<ul class="nearby-contct">
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="{{ url('time-line') }}" title=""><img style="width: 60px; height: 60px; overflow: hidden" src="{{ asset('images/resources/' . $request->user->avatar) }}" alt=""></a>
													</figure>>
													<div class="pepl-info">
														<h4><a href="{{ url('time-line') }}" title="">{{$request->user->first_name.' '.$request->user->last_name }}</a></h4>
														<a href="#" title="" class="add-butn more-action" data-ripple="">Delete request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
													</div>
												</div>
											</li>	
											@endforeach											
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
											<h6 class="">{{ $group->description }}</h6>
										</div>
									</div>								
									<div class="widget">
										<h4 class="widget-title">Members</h4>
										<ul class="invition">
										@foreach($members as $member)								
											<li>
												<figure>
													<img style="width: 45px; height: 45px; overflow: hidden" src="{{ asset('images/resources/' . $member->user->avatar) }}" alt="">
												</figure>
												<div class="friend-meta">
													<h4><a href="{{ url('group-members') }}" class="underline" title="">{{$member->user->first_name.' '.$member->user->last_name }}</a></h4>
													<a href="#" title="" class="invite" data-ripple="">
														@if($member->role_id_fk == 0) Super admin
														@elseif($member->role_id_fk == 1) Admin
														@else Member
														@endif
													</a>
												</div>
											</li>
											@endforeach	
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