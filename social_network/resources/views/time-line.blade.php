@php
use Illuminate\Support\Facades\Auth;

use Illuminate\View\Component;
@endphp
@extends('layouts.app')
	@section('content')


	<section>
	

	<div class="feature-photo">
			<figure><img src="images/resources/timeline-1.jpg" alt=""></figure>
		<div class="feature-photo">
			<figure><img src="{{ asset('images/resources/timeline-1.jpg')}}" alt=""></figure>
				@foreach($user->posts as $post)

					@if(auth()->check() && $post->user->user_id !== auth()->user()->user_id)
                        <div class="add-btn">
                            <span>1205 followers</span>
                            <a href="#" title="" data-ripple="">Add Friend</a>
                        </div>
					
                    @else 
					<div class="add-btn">
					<a href="#" title="" data-ripple="">Your Profile</a>
					</div>
					@endif
             
					@endforeach
			
				<form class="edit-phto" action="{{ url('update-avatar/'.$user->user_id) }}" method="post" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<i class="fa fa-camera-retro"></i>
				<label class="fileContainer">
					<button type="submit">Edit Cover Photo cc</button>	
				<input type="file" name="imgFileSelected[]" id="imgFileSelected" multiple accept="image/*">
				<!-- <input type="file"/> -->
				</label>
				</form>
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						<div class="user-avatar">
							<figure>
							<img src="{{ asset('images/resources/' . $user->avatar) }}" alt="">
							  <img src="{{ asset('storage/images/'.$image->url) }}" alt="Selected Image">
							
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

								  <h5>{{$user->last_name}} {{$user->first_name}}</h5>
								  <span>Group Admin</span>
								</li>	
								<li>
									
										<a class="" href="{{ url('time-line') }}" title="" data-ripple="">time line</a>
										<a class="" href="{{ url('timeline-photos'.'/user-profile/'.$id) }}" title="" data-ripple="">Photos</a>
										
										<a class="" href="{{ url('timeline-videos') }}t" title="" data-ripple="">Videos</a>
										<a class="" href="{{ url('timeline-friends') }}" title="" data-ripple="">Friends</a>
										<a class="" href="{{ url('groups') }}" title="" data-ripple="">Groups</a>
										<a class="" href="{{ url('about'.'/user-profile/'.$id) }}" title="" data-ripple="">about</a>

										<a class="active" href="#" title="" data-ripple="">more</a>
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
									<div class="widget">
											<h4 class="widget-title">Socials</h4>
											<ul class="socials">
												<li class="facebook">
													<a title="" href="#"><i class="fa fa-facebook"></i> <span>facebook</span> <ins>45 likes</ins></a>
												</li>
												<li class="twitter">
													<a title="" href="#"><i class="fa fa-twitter"></i> <span>twitter</span><ins>25 likes</ins></a>
												</li>
												<li class="google">
													<a title="" href="#"><i class="fa fa-google"></i> <span>google</span><ins>35 likes</ins></a>
												</li>
											</ul>
										</div>
		
									<div class="widget">
										<h4 class="widget-title">Recent Activity</h4>
										<ul class="activitiez">
											<li>
												<div class="activity-meta">
													<i>10 hours Ago</i>
													<span><a href="#" title="">Commented on Video posted </a></span>
													<h6>by <a href="{{ url('newsfeed') }}">black demon.</a></h6>
												</div>
											</li>
											<li>
												<div class="activity-meta">
													<i>30 Days Ago</i>
													<span><a href="{{ url('newsfeed') }}" title="">Posted your status. “Hello guys, how are you?”</a></span>
												</div>
											</li>
											<li>
												<div class="activity-meta">
													<i>2 Years Ago</i>
													<span><a href="#" title="">Share a video on her timeline.</a></span>
													<h6>"<a href="{{ url('newsfeed') }}">you are so funny mr.been.</a>"</h6>
												</div>
											</li>
										</ul>
									</div><!-- recent activites -->
									<div class="widget stick-widget">
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
							<div class="col-lg-6">
								<div class="loadMore">
									<div class="central-meta item">
										<div class="new-postbox">
											<figure>
												<img src="{{asset('images/resources/' .$user->avatar)}}" alt="">
											</figure>
											<div class="newpst-input">
												<form method="post">
													<textarea rows="2" placeholder="write something"></textarea>
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
										@foreach($user->posts as $post)
										<div class="central-meta item">
											<div class="user-post">
												<div class="friend-info">
													<figure>
														<img src="{{asset('images/resources/'.$post->user->avatar)}}" alt="">
													</figure>
													
													<div class="friend-name">
														<ins><a href="{{ url('time-line') }}" title="">{{$post->user->last_name}} {{$post->user->first_name}}</a></ins>
														<span>published: {{$post->user->created_at}}</span>
														<div class="setting" onclick="toggleMenu()" id="setting">
														<i class="fas fa-ellipsis-v"></i>
														<div class="menu-setting" id="menu-setting">
															<li><a href="#">
															<form method="POST"  action="{{ route('posts.destroy', ['id' => $post->id]) }}">
															@csrf
															@method('DELETE')
															
															<button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa bài đăng này không?')" style="background:none; color:#000;">
															<i class="fas fa-trash-alt" style="position: absolute; left:13px; top: 13px;"></i>	Delete
															</button>
															</form>

															</a></li>
															<li>	<a href="{{ url('edit-post/'.$post->id) }}" class="update-btn">
															<i class="far fa-edit" style="position: absolute; left:13px; top: 36px;"></i>
															Update</a></li>
														</div>
													</div>
													</div>
												
												
													@if (session('success'))
													<div class="alert alert-success" id="successMessage">
       													 {{ session('success') }}
    												</div>
														@endif

													<div class="post-meta">
													<div class="description">
															
															<p>
																{{$post->content}}
															</p>
													</div>
														@if(!empty($post->image))
														@foreach($post->image as $img)
														<img src="{{asset('storage/images/'.$img->url)}}" alt="">
													
														@endforeach
														@endif


													
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
													
													</div>
												</div>
												<div class="coment-area">
													<ul class="we-comet">
														@if($post->comments)
														@foreach($post->comments as $com)
														<li>
															
															<div class="comet-avatar">
																<img src="{{asset('images/resources/' .$post->user->avatar)}}" alt="">
															</div>
														
															<div class="we-comment">
																<div class="coment-head">
																	<h5><a href="{{ url('time-line').'/user-profile/'.$post->user->user_id }}" title="">{{$post->user->last_name}} {{$post->user->first_name}}</a></h5>
																	<span>{{$post->user->created_at}}</span>
																	<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																</div>
																
																	<p>	{{$com->content}}</p>
																
															
															</div>
															
															<ul>
																<li>

																	<div class="comet-avatar">
																	<img src="{{asset('images/resources/' .$post->user->avatar)}}" alt="">
																	</div>
																	<div class="we-comment">
																		<div class="coment-head">
																			<h5><a href="{{ url('time-line').'/user-profile/'.$post->user->user_id }}" title="">alexendra dadrio</a></h5>
																			<span>{{$post->user->created_at}}</span>
																			<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																		</div>
																		<p>yes, really very awesome car i see the features of this car in the official website of <a href="#" title="">#Mercedes-Benz</a> and really impressed :-)</p>
																	</div>
																</li>
																
															</ul>
														</li>
														@endforeach
														@endif
														<li>
															<div class="comet-avatar">
															<img src="{{asset('images/resources/' .$post->user->avatar)}}" alt="">
															</div>
															<div class="we-comment">
																<div class="coment-head">
																	<h5><a href="{{ url('time-line') }}" title="">Donald Trump</a></h5>
																	<span>{{$post->user->created_at}}</span>
																	<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																</div>
																<p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel
																	<i class="em em-smiley"></i>
																</p>
															</div>
														</li>
														<li>
															<a href="#" title="" class="showmore underline">more comments</a>
														</li>
														<li class="post-comment">
															<div class="comet-avatar">
																<img src="images/resources/comet-1.jpg" alt="">
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

								</aside>
							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>
	@endsection<!-- responsive header -->