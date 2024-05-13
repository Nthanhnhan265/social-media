@extends('/layouts.app')
@section('content')		
	<section>
		<div class="feature-photo">
			<figure><img src="{{ asset('images/resources/timeline-4.jpg')}}" alt=""></figure>
			<div class="add-btn">		
				<a href="#" title="" data-ripple="">Joined</a>
				<a href="#" title="" data-ripple="">
					@if($userRole->role_id_fk == 2) Leave
					@else
						Delete group
					@endif</a>
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
								  <h5>Nhóm số 1</h5>	
								  <span>{{ $memberCount }} members</span>							  
								</li>
								<li>
									<a class="active" href="{{ url('group-view') }}" title="" data-ripple="">Posts</a>
									<a class="" href="{{ url('group-member', $group->group_id) }}" title="" data-ripple="">Members</a>
									<a class="" href="{{ url('inbox') }}" title="" data-ripple="">File</a>								
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
									<div class="new-postbox">
										<figure>
											<img src="{{ asset('images/resources/' . $userRole->user->avatar) }}" alt="">
										</figure>
										<div class="newpst-input">
											<form method="post">
												<textarea rows="3" placeholder="write something"></textarea>
												<div class="attachments">
													<ul>
														<li>
															<i class="fa fa-music"></i>
															<label class="fileContainer">
																<input type="file">
															</label>
														</li>
														<li>
															<i class="fa fa-image"></i>
															<label class="fileContainer">
																<input type="file">
															</label>
														</li>
														<li>
															<i class="fa fa-video-camera"></i>
															<label class="fileContainer">
																<input type="file">
															</label>
														</li>
														<li>
															<i class="fa fa-camera"></i>
															<label class="fileContainer">
																<input type="file">
															</label>
														</li>
														<li>
															<button type="submit">Publish</button>
														</li>
													</ul>
												</div>
											</form>
										</div>
									</div>
								</div><!-- add post new box -->
								<div class="loadMore">
								@foreach($posts as $post)
								<div class="central-meta item">
									
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<img src="{{ asset('images/resources/' . $post->post->user->avatar) }}" alt="">
											</figure>
											<div class="friend-name">
												<ins><a href="{{ url('time-line') }}" title="">{{$post->post->user->last_name." ".$post->post->user->first_name}}</a></ins>
												<span>{{$post->created_at}}</span>
											</div>
											<div class="post-meta">
												<img src="images/resources/user-post6.jpg" alt="">
												<div class="we-video-info">
													<ul>
														<li>
															<span class="views" data-toggle="tooltip" title="views">
																<i class="fa fa-eye"></i>
																<ins>1.2k</ins>
															</span>
														</li>
														<li>
															<span class="comment" data-toggle="tooltip" title="Comments">
																<i class="fa fa-comments-o"></i>
																<ins>52</ins>
															</span>
														</li>
														<li>
															<span class="like" data-toggle="tooltip" title="like">
																<i class="ti-heart"></i>
																<ins>2.2k</ins>
															</span>
														</li>
														<li>
															<span class="dislike" data-toggle="tooltip" title="dislike">
																<i class="ti-heart-broken"></i>
																<ins>200</ins>
															</span>
														</li>
														<li class="social-media">
															<div class="menu">
															  <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
																</div>
															  </div>
																<div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
																</div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
																</div>
															  </div>

															</div>
														</li>
													</ul>
												</div>
												<div class="description">
													{{$post->post->content }}
												</div>
											</div>
										</div>
										<div class="coment-area">
											<ul class="we-comet">
												<li>
													<div class="comet-avatar">
														<img src="{{ asset('images/resources/comet-1.jpg') }}" alt="">
													</div>
													<div class="we-comment">
														<div class="coment-head">
															<h5><a href="{{ url('time-line') }}" title="">Donald Trump</a></h5>
															<span>1 week ago</span>
															<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
														</div>
														<p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel
															<i class="em em-smiley"></i>
														</p>
													</div>
												</li>																			
												<li class="post-comment">
													<div class="comet-avatar">
														<img src="images/resources/comet-4.jpg" alt="">
													</div>
													<div class="post-comt-box">
														<form method="post">
															<textarea placeholder="Post your comment"></textarea>
															<div class="add-smiles">
																<span class="em em-expressionless" title="add icon"></span>
															</div>
															<div class="smiles-bunch">
																<i class="em em---1"></i>
																<i class="em em-smiley"></i>
																<i class="em em-anguished"></i>
																<i class="em em-laughing"></i>
																<i class="em em-angry"></i>
																<i class="em em-astonished"></i>
																<i class="em em-blush"></i>
																<i class="em em-disappointed"></i>
																<i class="em em-worried"></i>
																<i class="em em-kissing_heart"></i>
																<i class="em em-rage"></i>
																<i class="em em-stuck_out_tongue"></i>
															</div>
															<button type="submit"></button>
														</form>	
													</div>
												</li>
											</ul>
										</div>
									</div>
									
								</div>								
								@endforeach
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