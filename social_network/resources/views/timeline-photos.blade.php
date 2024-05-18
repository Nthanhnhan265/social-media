@extends('layouts.app')

    @section('content')

	<section>
		<div class="feature-photo">
			
			<figure><img src="{{asset('storage/images/'.$user->background)}}" alt=""></figure>
			{{-- Nút kết bạn, hủy kết bạn, unfollow
		=> cần chuyển sang component để tái sử dụng cho nhiều trang trong profile
		--}}
		<div class="container-btn">
			@if (Auth::user()->user_id != $user->user_id)
					@if ($friend)
							<?php
						if (!empty($friend[0])) {
							$n = $friend[0];
						}
																																																																												?>
							@if ($n->status == "accept")
								<div class="dropdown">
									<button class="btn dropdown-toggle btn-primary" type="button" id="dropdownMenuButton"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<a href="#" title="" data-ripple="">Friend <i class="fa-solid fa-user-group ml-1"></i></a>
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<div class="dropdown-item" href="#">
											<form action="{{url('relationship/' . $user->user_id)}}" method="post" class="m-0">
												@csrf
												@method('delete')
												<button type="submit" class="btn-warning">Unfriend <i
														class="fa-solid fa-x ml-1"></i></button>
											</form>

										</div>
										<div class="dropdown-item" href="#">
											<div class="notify-btn">

												@if(Follow::checkFollow(Auth::user()->user_id, $user->user_id))
													<form action="{{url('follow/' . $user->user_id)}}" method="post" class="m-0">
														@csrf
														@method('delete')
														<button type="submit" class="btn-warning">Unfollow <i
																class="fa-solid fa-x ml-1"></i></button>
													</form>

												@else
													<form action="{{url('follow')}}" method="post" class="m-0">
														@csrf
														@method('post')
														<input type="hidden" value="{{$user->user_id}}" name="friend_id">
														<button type="submit" class="btn-primary">Follow <i
																class="fa-solid fa-bell ml-1"></i></button>
													</form>


												@endif

											</div>
										</div>
									</div>
								</div>

							@else
								@if($n->sender == $user->user_id)
									<form action="{{url('relationship/' . $user->user_id)}}" method="post">
										@csrf
										@method('put')
										<div class="add-btn btn-filled">
											<button type="submit">Accept <i class="fa-solid fa-check ml-1"></i></button>
										</div>
									</form>
									<form action="{{url('relationship/' . $user->user_id)}}" method="post">
										@csrf
										@method('delete')
										<div class="reject-btn btn-outline">
											<button type="submit" class=""><i class="fa-solid fa-trash"></i></button>
										</div>

									</form>
								@else
									<div class="text-white">Pending <i class="fa-solid fa-paper-plane ml-1"></i></div>
									<form action="{{url('relationship/' . $user->user_id)}}" method="post">
										@csrf
										@method('delete')
										<div class="reject-btn btn-outline">
											<button type="submit" class="btn-warning">Cancel <i class="fa-solid fa-x ml-1"></i></button>
										</div>
									</form>
								@endif
							@endif
					@else
						<form action="{{url('relationship')}}" method="post">
							@csrf
							@method('post')
							<input type="hidden" name="receiver" value="{{$user->user_id}}">
							<div class="add-btn btn-filled">
								<button type="submit">
									Add friend <i class="fa-solid fa-user-plus"></i>
								</button>
							</div>
						</form>
					@endif
			@endif

		</div>
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
						<img src="{{ asset('storage/images/' . $user->avatar) }}" alt="">
						@if(auth()->check() && $user->user_id == auth()->user()->user_id)
							<form class="edit-phto" action="{{ url('update-avatar/' . Auth::User()->user_id)}}"
								method="post" enctype="multipart/form-data">
								@csrf
								@method('PUT')
								<i class="fa fa-camera-retro"></i>
								<label class="fileContainer">
									<input type="file" name="avatar" id="avatar" accept="image/*">
								</label>
								<button class="btn-edit-avatar" type="submit"><i
										class="fas fa-cloud-upload-alt"></i></button>
							</form>
						@endif


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
								<a class="{{Request::is('time-line/user-profile/'.$user->user_id) ? 'active' : ''}}" href="{{ url('time-line/user-profile/'.$user->user_id) }}" title="" data-ripple="">time line</a>
									<a class="{{Request::is('timeline-photos/user-profile/'.$user->user_id) ? 'active' : ''}}" href="{{url('timeline-photos/user-profile/'.$user->user_id)}}" title="" data-ripple="">Photos</a>
									<a class="{{Request::is('timeline-videos/user-profile/'.$user->user_id) ? 'active' : ''}}" href="{{url('timeline-videos/user-profile/'.$user->user_id)}}" title="" data-ripple="">Videos</a>
									<a class="{{Request::is('timeline-friends/user-profile/'.$user->user_id) ? 'active' : ''}}" href="{{url('timeline-friends/user-profile/'.$user->user_id)}}" title="" data-ripple="">Friends</a>
									<a class="{{Request::is('timeline-groups/user-profile/'.$user->user_id) ? 'active' : ''}}" href="{{url('timeline-groups/user-profile/'.$user->user_id)}}" title="" data-ripple="">Groups</a>
									
									@if(auth()->check() && $user->user_id == auth()->user()->user_id)
										<a class="" href="{{ url('about' . '/user-profile/' . Auth::user()->user_id) }}" title=""
										data-ripple="">about</a>


									@endif

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

								<div class="contain d-flex justify-content-center">
									
								<div class="central-meta photo-tl">
								<div class="photos" style=" display: flex; flex-wrap: wrap; justify-content: center">
									@foreach($posts as $post)
									@foreach($post->image as $img)
										<div style="width: calc(100vw / 4 - 10px)!important;border-radius:10px; border: 1px solid #c4c4c4; height:calc(100vw / 4 - 10px) !important;overflow: hidden; display: block; margin: 10px 5px">
				
											<a href="{{asset('storage/images/'.$img->url)}}" data-fancybox="gallery" data-caption="Caption #1">
												<img src="{{ asset('storage/images/'.$img->url) }}" style="width:100%;height:100%;" />
											</a>
										</div>
										@endforeach
								@endforeach
										<!-- <li>
											<a class="strip" href="images/resources/photo-33.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo3.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-44.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo4.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-55.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo5.jpg" alt=""></a>
										</li>

										<li>
											<a class="strip" href="images/resources/photo-66.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo6.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-77.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo7.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-88.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo8.jpg" alt=""></a>
										</li>

										<li>
											<a class="strip" href="images/resources/photo-99.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo12.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-101.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo10.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-101.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo11.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-22.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo1.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-33.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo9.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-99.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo12.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-66.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo6.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-66.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo13.jpg" alt=""></a>
										</li> -->
									</div>
									<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
								</div><!-- photos -->
								
								</div>

							</div><!-- centerl meta -->

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
 @endsection
