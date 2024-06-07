

@extends('/layouts.app')
@section('content')		
<x-personal_nav :user=$user :friend=$friend></x-personal_nav>
	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
							 
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
													<a href="#" title="" class="add-butn" style="left: 30rem; width: 60px;"data-ripple="">Joined</a>												
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
														<button type="submit" title="" data-ripple="" class="request-join" style="width: 140px;">Delete request</button>
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
							 
							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>
	@endsection