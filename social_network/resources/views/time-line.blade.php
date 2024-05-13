@php
use Illuminate\Support\Facades\Auth;

use Illuminate\View\Component;
@endphp
@extends('layouts.app')
	@section('content')


	<section>
	

	
			
		<div class="feature-photo">
			<figure><img src="{{ asset('storage/images/' .$user->background)}}" alt="">
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
			
				<form class="edit-phto" action="{{ url('update-background/'. Auth::User()->user_id)}}" method="post" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<i class="fa fa-camera-retro"></i>
				<label class="fileContainer">
					
					<input type="file" name="background" id="background" accept="image/*">
			
				</label>
				<button type="submit">Edit Backgroup</button>	
				</form>
				</figure>
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						<div class="user-avatar">
					
							<figure>
								<img src="{{ asset('storage/images/' . $user->avatar) }}" alt="">
								<form class="edit-phto" action="{{ url('update-avatar/'. Auth::User()->user_id)}}" method="post" enctype="multipart/form-data">
										@csrf
										@method('PUT')
										<i class="fa fa-camera-retro"></i>
										<label class="fileContainer">
											<input type="file" name="avatar" id="avatar" accept="image/*">
										</label>
										<button  class="btn-edit-avatar" type="submit"><i class="fas fa-cloud-upload-alt"></i></button>
								</form>
							</figure>
						
						</div>
					</div>
					<div class="col-lg-10 col-sm-9">
						<div class="timeline-info">
							<ul>
								<li class="admin-name">

								  <h5>{{$user->last_name}} {{$user->first_name}}</h5>
								  <span> {{$user->description}}</span>
								</li>	
								<li>
									
										<a class="" href="{{ url('time-line/user-profile/'.$user->user_id) }}" title="" data-ripple="">time line</a>
										<a class="" href="{{ url('timeline-photos'.'/user-profile/'.$id) }}" title="" data-ripple="">Photos</a>
										
										<a class="" href="{{ url('timeline-videos'.'/user-profile/'.$user->user_id) }}" title="" data-ripple="">Videos</a>
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
												<img src="{{asset('storage/images/' .$user->avatar)}}" alt="">
											</figure>
											<div class="newpst-input">
												<form method="post" action="{{url('time-line/user-profile/'. $user->user_id)}}" enctype="multipart/form-data">
												@csrf
												@method("post")
													<textarea rows="2" placeholder="write something" name="content"></textarea>
													<div class="attachments">
														<ul>
															<!-- <li>
																<i class="fa fa-music"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li> -->
															<li>
																<i class="fa fa-image"></i>
																<label class="fileContainer">
																<input type="file" name="imgFileSelected[]" id="imgFileSelected" multiple accept="image/*">
																</label>
															</li>
															<li>
																<i class="fa fa-video-camera"></i>
																<label class="fileContainer">
																<input type="file" name="vdFileSelected[]" id="vdFileSelected" multiple accept="video/*">
																</label>
															</li>
															<!-- <li>
																<i class="fa fa-camera"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li> -->
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
														<img src="{{asset('storage/images/'.$post->user->avatar)}}" alt="">
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
															<li><a href="{{ url('edit-post/'.$post->id) }}" class="update-btn">
															<i class="far fa-edit" style="position: absolute; left:13px; top: 36px;"></i>
															Update</a></li>
															</form>

															</a></li>
															
														</div>
													</div>
													</div>
												
												
													@if (session('success'))
													<div class="alert alert-success" id="successMessage">
       													 {{ session('success') }}
    												</div>
														@endif

													<div class="post-meta">
													@if(!empty($post->content))
													<div class="description">
															
															<p>
																{{$post->content}}
																
																
													</div>
													@endif
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
																	<span class="like" data-toggle="tooltip" title="Like" data-post-id="{{ $post->id }}">
																		<i class="ti-heart"></i>
																		
																		<ins id="like{{$post->id}}">{{ $post->likes()->where('status', 1)->count() }}</ins>
																	</span>
																</li>
																<li>
																	<span class="dislike" data-toggle="tooltip" title="Dislike" data-post-id="{{ $post->id }}">
																		<i class="ti-heart-broken"></i>
																		<ins id="dislike{{$post->id}}">{{ $post->likes()->where('status', 0)->count() }}</ins>
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
														@foreach($post->comments as $comment)
														<x-comment :commenter=$comment></x-comment>
														
														
														@endforeach
														@endif
														<li>
															<div class="comet-avatar">
															
															<img src="{{asset('images/resources/' .$post->user->avatar)}}" alt="">
															</div>
															<!-- <div class="we-comment">
																<div class="coment-head">
																	<h5><a href="{{ url('time-line') }}" title="">Donald Trump</a></h5>
																	<span>{{$post->user->created_at}}</span>
																	<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																</div>
																<p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel
																	<i class="em em-smiley"></i>
																</p>
															</div> -->
														</li>
														<li>
															<a href="#" title="" class="showmore underline">more comments</a>
														</li>
														<li class="post-comment">
													<div class="comet-avatar">
														<x-user-avt>
														</x-user-avt>
													</div>
													<div class="post-comt-box">
														<form method="post" action = "{{url('time-line/user-profile/'.$post->user->user_id)}}" enctype="multipart/form-data">
															@csrf
															@method("POST")
															<input type="hidden" name="post_id" value="{{$post->id}}">
															<textarea placeholder="Post your comment" name = "content"></textarea>
															<div class="add-smiles">
																<span class="em em-expressionless" title="add icon"></span>
															</div>
															<div class="attachments">
																<ul class="m-0 d-flex">
																	<li>
																		<i class="fa fa-image"></i>
																		<label class="fileContainer">
																			<input type="file" name="imgFileSelected[]" id="imgFileSelected" multiple accept="image/*">
																		</label>
																	</li>
																	<li>
																		<i class="fa fa-video-camera"></i>
																		<label class="fileContainer">
																			<input type="file" name="vdFileSelected[]" id="vdFileSelected" multiple accept="video/*">
																		</label>
																	</li>

																	<li>
																		<button type="submit" class="bg-dark">Post</button>
																	</li>
																</ul>
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
														<!-- <li class="post-comment">
															<div class="comet-avatar">
																<img src="{{asset('storage/images/' .$post->user->avatar)}}" alt="">
															</div>
															<div class="post-comt-box">
																<form method="post" action = "{{url('time-line/user-profile/'.$post->user->user_id)}}" enctype="multipart/form-data">
																	@csrf
																	@method("POST")
																	<input type="hidden" name="post_id" value="{{$post->id}}">
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
																	<button type="submit">POST</button>
																</form>	
															</div>
														</li> -->
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
									
									<h4 class="widget-title">Information Basic</h4>
									
									<div class="your-page">

										<div class="page-meta">
											<span>DESCRIPTION</span>
											<a href="#" title="" class="underline" style="word-wrap: break-word;">( {{$user->description}} )</a>

											<span style="display:flex;align-items:center;"><i class="fa-solid fa-cake-candles" style="padding-right:5px;"></i><a href="{{ url('insight') }}" title="">Date of birth :{{$user->DOB}}</a></span>
											<span><a href="#" title=""> <i class="fa-solid fa-envelope"></i> Email: {{$user->email}}</a></span>
											<span><i class="ti-comment"></i><a href="{{ url('insight') }}" title="">Messages <em>9</em></a></span>
											<span><i class="ti-bell"></i><a href="{{ url('insight') }}" title="">Notifications <em>2</em></a></span>
										</div>
										
									</div>
								</div><!-- page like widget -->
								<div class="widget">
									<div class="banner medium-opacity bluesh">
										<div class="bg-image" style="background-image: url(images/resources/baner-widgetbg.jpg)"></div>
										<div class="baner-top">
											<span><img alt="" src="images/book-icon.png"></span>
											<i class="fa fa-ellipsis-h"></i>
										</div>
										<div class="banermeta">
											<p>
												create your own favourit page.
											</p>
											<span>like them all</span>
											<a data-ripple="" title="" href="#">start now!</a>
										</div>
									</div>
								</div>
								<div class="widget friend-list stick-widget">
									<h4 class="widget-title">Friends</h4>
									<div id="searchDir"></div>
									<ul id="people-list" class="friendz-list">
										<!-- <li>
											<figure>
												<img src="images/resources/friend-avatar.jpg" alt="">
												<span class="status f-online"></span>
											</figure>
											<div class="friendz-meta">
												<a href="{{ url('time-line') }}">bucky barnes</a>
												<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f2859b9c869780819d9e969780b2959f939b9edc919d9f">[email&#160;protected]</a></i>
											</div>
										</li>
										<li>
											<figure>
												<img src="images/resources/friend-avatar2.jpg" alt="">
												<span class="status f-away"></span>
											</figure>
											<div class="friendz-meta">
												<a href="{{ url('time-line') }}">Sarah Loren</a>	
												<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ea888b98848f99aa8d878b8386c4898587">[email&#160;protected]</a></i>
											</div>
										</li>
										<li>
											<figure>
												<img src="images/resources/friend-avatar3.jpg" alt="">
												<span class="status f-off"></span>
											</figure>
											<div class="friendz-meta">
												<a href="{{ url('time-line') }}">jason borne</a>
												<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2d474c5e42434f6d4a404c4441034e4240">[email&#160;protected]</a></i>
											</div>
										</li>
										<li>
											<figure>
												<img src="images/resources/friend-avatar4.jpg" alt="">
												<span class="status f-off"></span>
											</figure>
											<div class="friendz-meta">
												<a href="{{ url('time-line') }}">Cameron diaz</a>
												<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6802091b07060a280f05090104460b0705">[email&#160;protected]</a></i>
											</div>
										</li>
										<li>

											<figure>
												<img src="images/resources/friend-avatar5.jpg" alt="">
												<span class="status f-online"></span>
											</figure>
											<div class="friendz-meta">
												<a href="{{ url('time-line') }}">daniel warber</a>
												<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4e242f3d21202c0e29232f2722602d2123">[email&#160;protected]</a></i>
											</div>
										</li>
										<li>

											<figure>
												<img src="images/resources/friend-avatar6.jpg" alt="">
												<span class="status f-away"></span>
											</figure>
											<div class="friendz-meta">
												<a href="{{ url('time-line') }}">andrew</a>
												<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1872796b77767a587f75797174367b7775">[email&#160;protected]</a></i>
											</div>
										</li>
										<li>

											<figure>
												<img src="images/resources/friend-avatar7.jpg" alt="">
												<span class="status f-off"></span>
											</figure>
											<div class="friendz-meta">
												<a href="{{ url('time-line') }}">amy watson</a>
												<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="711b10021e1f1331161c10181d5f121e1c">[email&#160;protected]</a></i>
											</div>
										</li>
										<li>

											<figure>
												<img src="images/resources/friend-avatar5.jpg" alt="">
												<span class="status f-online"></span>
											</figure>
											<div class="friendz-meta">
												<a href="{{ url('time-line') }}">daniel warber</a>
												<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="234942504c4d4163444e424a4f0d404c4e">[email&#160;protected]</a></i>
											</div>
										</li>
										<li>

											<figure>
												<img src="images/resources/friend-avatar2.jpg" alt="">
												<span class="status f-away"></span>
											</figure>
											<div class="friendz-meta">
												<a href="{{ url('time-line') }}">Sarah Loren</a>
												<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d5b7b4a7bbb0a695b2b8b4bcb9fbb6bab8">[email&#160;protected]</a></i>
											</div>
										</li> -->
									</ul>
									<div class="chat-box">
										<div class="chat-head">
											<span class="status f-online"></span>
											<h6>Bucky Barnes</h6>
											<div class="more">
												<span><i class="ti-more-alt"></i></span>
												<span class="close-mesage"><i class="ti-close"></i></span>
											</div>
										</div>
										<div class="chat-list">
											<ul>
												<li class="me">
													<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
													<div class="notification-event">
														<span class="chat-message-item">
															Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
														</span>
														<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
													</div>
												</li>
												<li class="you">
													<div class="chat-thumb"><img src="images/resources/chatlist2.jpg" alt=""></div>
													<div class="notification-event">
														<span class="chat-message-item">
															Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
														</span>
														<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
													</div>
												</li>
												<li class="me">
													<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
													<div class="notification-event">
														<span class="chat-message-item">
															Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
														</span>
														<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
													</div>
												</li>
											</ul>
											<form class="text-box">
												<textarea placeholder="Post enter to post..."></textarea>
												<div class="add-smiles">
													<span title="add icon" class="em em-expressionless"></span>
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
									</div>
								</div><!-- friends list sidebar -->
							</aside>
						</div><!-- sidebar -->
							
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>
	@endsection<!-- responsive header -->