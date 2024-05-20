@extends('/layouts.app')
@section('content')		
	<section>
		<div class="feature-photo">
			<figure><img style="width: 100%" src="{{ asset('images/resources/timeline-4.jpg')}}" alt=""></figure>
			<div class="add-btn">
				<button type="submit" title="" data-ripple="" class="delete-group" style="right: 180; background: #098DD1">Joined</button>
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
								  	<span style="bottom: -15" >{{ $memberCount }} members</span>							  
								</li>
								<li>
									<a class="" href="{{ url('group-view', $group->group_id) }}" title="" data-ripple="">Posts</a>
									<a class="active" href="#" title="" data-ripple="">Members</a>									
									@if($userRole->role_id_fk != 2)
									<a class="" href="{{ url('edit-group-2', $group->group_id) }}" title="" data-ripple="">Edit group</a>	
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
												<i class="fa fa-users"></i>
												<a href="{{ url('groups') }}" title="">Groups</a>
											</li>
											<li>
												<form method="POST" action="{{ route('logout') }}">
													@csrf
													<i class="ti-power-off"></i>
													<x-dropdown-link style="padding-left:0px!important;font-size:15px" :href="route('logout')" onclick="event.preventDefault();
													this.closest('form').submit();">
														{{ __('Log Out') }}
													</x-dropdown-link>
												</form>
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
										<div class="tab-content" style="display:block !important;">
										  <div class="tab-pane active fade show " id="frends" >
											<ul class="nearby-contct">
											@foreach($members as $member)
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="{{ url('time-line') }}" title=""><img style="width: 45px; height: 45px; overflow: hidden" src="{{ asset('images/resources/' . $member->user->avatar) }}" alt=""></a>
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
															@if($userRole->role_id_fk == 0 && $member->role_id_fk == 1) 
															<form action="{{ route('update', $group->group_id) }}" method="POST" style="display: inline;" onsubmit="">
																@csrf
																@method('PUT')
																<input type="text" name="user_id" value="{{ $member->user->user_id }}" style="display: none;"/>
																<input type="text" name="role" value="2" style="display: none;"/>
																<input type="text" name="request" value='0' style="display: none;"/>
																<button type="submit" title="" data-ripple="" class="change-role">Demote to Member</button>
															</form>	
															@elseif($userRole->role_id_fk == 0 && $member->role_id_fk == 2) 
															<form action="{{ route('update', $group->group_id) }}" method="POST" style="display: inline;" onsubmit="">
																@csrf
																@method('PUT')
																<input type="text" name="user_id" value="{{ $member->user->user_id }}" style="display: none;"/>
																<input type="text" name="role" value="1" style="display: none;"/>
																<input type="text" name="request" value='0' style="display: none;"/>
																<button type="submit" title="" data-ripple="" class="change-role">Promote to Admin</button>
															</form>																
															@endif
														</a><span>	
														@if($userRole->role_id_fk == 0 && ($member->role_id_fk == 1 || $member->role_id_fk == 2)) 
														<form action="{{ route('delete-request', $group->group_id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to kick out this member?')">
															@csrf
															@method('DELETE')
															<input type="text" name="user_id" value="{{ $member->user->user_id }}" style="display: none;"/>
															<button type="submit" title="" data-ripple="" class="kickout-group">Kick out</button>
														</form>
														@elseif($userRole->role_id_fk == 1 && $member->role_id_fk == 2)
														<form action="{{ route('delete-request', $group->group_id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to kick out this member?')">
															@csrf
															@method('DELETE')
															<input type="text" name="user_id" value="{{ $member->user->user_id }}" style="display: none;"/>
															<button type="submit" title="" data-ripple="" class="kickout-group">Kick out</button>
														</form>			
														@endif																																															@if($member->role_id_fk != 0) 
														@endif									
													</div>
												</div>
											</li>	
											@endforeach										
										</ul>											
										  </div>
										  <div class="tab-pane fade" id="frends-req" >
											<ul class="nearby-contct">
											@foreach($requests as $request)
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="{{ url('time-line') }}" title=""><img style="width: 45px; height: 45px; overflow: hidden" src="{{ asset('images/resources/' . $request->user->avatar) }}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="{{ url('time-line') }}" title="">{{$request->user->first_name.' '.$request->user->last_name }}</a></h4>
														<form action="{{ route('delete-request', $group->group_id) }}" method="POST" style="display: inline;" onsubmit="">
															@csrf
															@method('DELETE')
															<input type="text" name="user_id" value="{{ $request->user->user_id }}" style="display: none;"/>
															<button type="submit" title="" data-ripple="" class="request-delete">Delete request</button>
														</form>
														<form action="{{ route('update', $group->group_id) }}" method="POST" style="display: inline;" onsubmit="">
															@csrf
															@method('PUT')				
															<input type="text" name="user_id" value="{{ $request->user->user_id }}" style="display: none;"/> 
															<input type="text" name="role" value="2" style="display: none;"/>						
															<input type="text" name="request" value='0' style="display: none;"/>															
															<button type="submit" title="" data-ripple="" class="request-join">Confirm</button>
														</form>
													</div>
												</div>
											</li>	
											@endforeach											
										</ul>	
											  <!-- <button class="btn-view btn-load-more"></button> -->
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