@extends('/layouts.app')
@section('content')		
	<section>
		<div class="feature-photo">
			<figure><img src="{{ asset('images/resources/timeline-4.jpg')}}" alt=""></figure>
			<div class="add-btn">
				<a href="#" title="" data-ripple="">Joined</a>
				@if($userRole->role_id_fk == !0)
					<form action="{{ route('leave-group', $group->group_id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to leave this group?');">
						@csrf
						@method('DELETE')
						<button type="submit" title="" data-ripple="" class="delete-group">Leave</button>
					</form>
				@else
					<form action="{{ route('disband-groups', $group->group_id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this group?');">
						@csrf
						@method('DELETE')
						<button type="submit" title="" data-ripple="" class="delete-group">Delete group</button>
					</form>
				@endif
			</div>
			<form class="edit-phto" @if($userRole->role_id_fk == 2) style="display: none;" @endif >
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
								  <h5>{{ $group->name_group }}</h5>	
								  <span>{{ $memberCount }} members</span>							  
								</li>
								<li>
									<a class="" href="{{ url('group-view', $group->group_id) }}" title="" data-ripple="">Posts</a>
									<a class="" href="{{ url('group-member', $group->group_id) }}" title="" data-ripple="">Members</a>
									<a class="" href="{{ url('inbox') }}" title="" data-ripple="">File</a>	
									@if($userRole->role_id_fk != 2)
									<a class="active" href="{{ url('edit-group-2', $group->group_id) }}" title="" data-ripple="">Edit group</a>	
									@endif							
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
									<div class="editing-info">
										<h5 class="f-title"><i class="ti-info-alt"></i> Edit group</h5>
										
										<form method="post" action="{{ route('update-group', $group->group_id) }}">
											@csrf
											@method("PUT")
											<input type="text" id="id" name="group_id" required="required" value="{{$group->group_id}}" style="display: none">
											<div class="form-group half">  
												<input type="text" id="name_group" name="name_group" required="required" value="{{$group->name_group}}">
												<label class="control-label" for="group_name">Group Name</label><i class="mtrl-select"></i>							
											</div>                                                                                        
											<div class="form-group">  
												<textarea rows="4" id="description" name="description" required="required">{{$group->description}}</textarea>
												<label class="control-label" for="description">Description</label><i class="mtrl-select"></i>
											</div>	
											<input type="text" id="status" name="status" required="required" value="1" style="display: none">									
											<div class="submit-btns">                                                
												<button type="submit" class="mtr-btn"><span>Update</span></button>
											</div>
										</form>

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