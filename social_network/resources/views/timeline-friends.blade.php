@extends('/layouts.app')
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
				<input type="file" />
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
									<input type="file" />
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
								<a class="" href="timeline-photos" title="" data-ripple="">Photos</a>
								<a class="" href="timeline-videos" title="" data-ripple="">Videos</a>
								<a class="active" href="timeline-friends" title="" data-ripple="">Friends</a>
								<a class="" href="timeline-groups" title="" data-ripple="">Groups</a>
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
						<div class="col-lg-3">
							<aside class="sidebar static">

							</aside>
						</div><!-- sidebar -->
						<div class="col-lg-6">
							<div class="central-meta">
								<div class="frnds">
									<ul class="nav nav-tabs">
										<li class="nav-item"><a class="active" href="#frends" data-toggle="tab">My Friends</a> <span>{{count($friends)}}</span></li>
										<li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Friend Requests</a><span>{{count($requests)}}</span></li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
										<div class="tab-pane active fade show " id="frends">
											<ul class="nearby-contct">
												{{-- danh sach ban be --}}
												@foreach ($friends as $f)
												<li>
													<div class="nearly-pepls">
														<figure>
															<a href="{{ url('time-line/user-profile/'.$f->user_id) }}" title=""><img src="{{asset('images/resources/'.$f->avatar)}}" alt="err"></a>
														</figure>
														<div class="pepl-info">
															<h4><a href="{{ url('time-line/user-profile/'.$f->user_id) }}" title="">{{$f->last_name." ".$f->first_name}}</a></h4>
															<form action="{{url('relationship/'.$f->user_id.'/1')}}" method="post">
																	@csrf
																	@method('delete')
																	<div class="position-absolute"  style="top:50%;right:0;transform: translateY(-50%)">
																		<button type="submit" class="btn-secondary"><i class="fa-solid fa-trash"></i></button>
																	</div>
	
																</form>
														</div>
													</div>
												</li>

												@endforeach

											</ul>
											<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
										</div>
										<div class="tab-pane fade" id="frends-req">
											<ul class="nearby-contct">
												{{-- danh sach yeu cau ket ban  --}}
												@foreach ($requests as $r)
												<li>
													<div class="nearly-pepls">
														<figure>
															<a href="{{ url('time-line/user-profile/'.$r->user_id) }}" title=""><img src="{{asset('images/resources/'.$r->avatar)}}" alt="err"></a>
														</figure>
														<div class="pepl-info">
															<h4><a href="{{ url('time-line/user-profile/'.$r->user_id) }}" title="">{{$r->last_name." ".$r->first_name}}</a></h4>
															<div class="position-absolute d-flex" style="top:50%;right:0;transform: translateY(-50%)">
																<form action="{{url('relationship/'.$r->user_id.'/1')}}" method="post" class="d-inline mr-1">
																	@csrf
																	@method('put')
																	<div class="">
																		<button type="submit">Accept <i class="fa-solid fa-check ml-1"></i></button>
																	</div>
																</form>
																<form action="{{url('relationship/'.$r->user_id.'/1')}}" method="post">
																	@csrf
																	@method('delete')
																	<div class="">
																		<button type="submit" class="btn-secondary"><i class="fa-solid fa-trash"></i></button>
																	</div>
	
																</form>

															</div>
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

							</aside>
						</div><!-- sidebar -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection