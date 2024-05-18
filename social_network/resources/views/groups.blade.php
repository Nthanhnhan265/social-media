
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
									<div class="widget stick-widget">
										<h4 class="widget-title">Profile intro</h4>
										<ul class="short-profile">
											<li>
												<span>about</span>
												<p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company. </p>
											</li>
											<li>
												<span>fav tv show</span>
												<p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company. </p>
											</li>
											<li>
												<span>favourit music</span>
												<p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company. </p>
											</li>
										</ul>
									</div><!-- profile intro widget -->

								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="groups">
										<span><i class="fa fa-users"></i>My groups</span>
									</div>
									<div class="groups">
										<span> <a href="{{ asset('create-new-group') }}" title="" ><i class="fa-solid fa-plus"></i> Create new group</a> </span>
									</div>
									<ul class="nearby-contct">
									@foreach ($groups as $group)
										<li>
											<div class="nearly-pepls">
											@if($group->request == 0)
												<figure>
													@if($group->group->status == 0)
													<a href="{{ url('group-deactive') }}"
													title=""><img src="images/resources/group1.jpg" alt=""></a>
													@else
													<a href="{{ url('group-view', $group->group_id_fk) }}"
													title=""><img src="images/resources/group1.jpg" alt=""></a>													
													@endif
												</figure>
												<div class="pepl-info">
													@if($group->group->status == 0)
													<h4><a href="{{ url('group-deactive') }}" title="">{{ $group->group->name_group }} </a></h4>
													<span>Deactive group</span>
													@else
													<h4><a href="{{ url('group-view', $group->group_id_fk) }}" title="">{{ $group->group->name_group }} </a></h4>
													<span>Active group</span>
													@endif
													<a href="#" title="" class="add-butn" data-ripple="">Joined</a>												
												</div>
											@elseif($group->request == 1)
											<figure>
													@if($group->group->status == 0)
													<a href="{{ url('group-deactive') }}"
													title=""><img src="images/resources/group1.jpg" alt=""></a>
													@else
													<a href="{{ url('group-view', $group->group_id_fk) }}"
													title=""><img src="images/resources/group1.jpg" alt=""></a>													
													@endif
												</figure>
												<div class="pepl-info">
												@if($group->group->status == 0)
													<h4><a href="{{ url('group-deactive') }}" title="">{{ $group->group->name_group }} </a></h4>
													<span>Deactive group</span>
													@else
													<h4><a href="{{ url('group-view', $group->group_id_fk) }}" title="">{{ $group->group->name_group }} </a></h4>
													<span>Active group</span>
													@endif	
													<form action="{{ route('delete-request-by-user', $group->group_id_fk) }}" method="POST" style="display: inline;" onsubmit="">
														@csrf
														@method('DELETE')
														<button type="submit" title="" data-ripple="" class="request-join">Delete request</button>
													</form>																									
												</div>
											@endif
											</div>
										</li>	
									@endforeach								
									</ul>
								</div><!-- photos -->
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