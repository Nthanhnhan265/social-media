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
					<input type="file"/>
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
									  <h5>Janice Griffith</h5>
									  <span>Group Admin</span>
									</li>
									<li>
										<a class="" href="{{ url('time-line') }}" title="" data-ripple="">time line</a>
										<a class="" href="{{ url('timeline-photos') }}" title="" data-ripple="">Photos</a>
										<a class="" href="{{ url('imeline-videos') }}t" title="" data-ripple="">Videos</a>
										<a class="" href="{{ url('timeline-friends') }}" title="" data-ripple="">Friends</a>
										<a class="" href="{{ url('groups') }}" title="" data-ripple="">Groups</a>
										<a class="" href="{{ url('about') }}" title="" data-ripple="">about</a>
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
							<div class="col-lg-9">
								<div class="inbox-sec">
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-4">
											<div class="inbox-navigation">
												<div class="inbox-panel-head">
													<img alt="" src="images/resources/friend-avatar11.jpg">
													<h1><i>Brian</i> Kelly</h1>
													<a title="" href="{{ url('edit-profile-basic') }}"><i class="fa fa-user"></i>Profile</a>
													<a title="" href="{{ url ('edit-account-setting') }}"><i class="fa fa-cog"></i>Setting</a>
													<ul>
														<li><a class="compose-btn" title="" href="#">Compose</a></li>
													</ul>
												</div><!-- Inbox Panel Head -->
												<ul>
													<li class="active"><a title=""><i class="fa fa-inbox"></i>Inbox</a><span>4</span></li>
													<li><a title=""><i class="fa fa-paper-plane-o"></i>Draft</a></li>
													<li><a title=""><i class="fa fa-repeat"></i>Outbox</a><span>6</span></li>
													<li><a title=""><i class="fa fa-plane"></i>Sent</a></li>
													<li><a title=""><i class="fa fa-trash-o"></i>Trash</a></li>
												</ul>
												<div class="flaged">
													<h3><i class="fa fa-flag"></i>FLAGGED</h3>
													<ul>
														<li><a title="" href="#"><i style="color:#ff5c5c;" class="fa fa-tag"></i>Family</a></li>
														<li><a title="" href="#"><i style="color:#3ac1e3;" class="fa fa-tag"></i>Friends</a></li>
														<li><a title="" href="#"><i style="color:#f3d547;" class="fa fa-tag"></i>Private</a></li>
														<li><a title="" href="#"><i style="color:#b447f3;" class="fa fa-tag"></i>Office Staff</a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-8">
											<div class="inbox-lists">
												<div class="inbox-action">
													<ul>
														<li><label><input type="checkbox" name="select-all" id="select_all" /> Select all</label></li>
														<li><a class="delete-email" title=""><i class="fa fa-trash-o"></i> Delete</a></li>
														<li><a title=""><i class="fa fa-refresh"></i> Refresh</a></li>
													</ul>
												</div>
												<div class="mesages-lists">
													<form method="post">
														<input type="text" placeholder="Search Email">
													</form>
													<ul id="message-list" class="message-list">
														<li class="unread">
															<input class="select-message" type="checkbox" />
															<span class="star-this starred"><i class="fa fa-star-o"></i></span>

															<h3 class="sender-name">Darlina Jaze</h3>
															<a title="" data-toggle="tooltip" data-original-title="Attachment"><i class="fa fa-paperclip"></i></a>
															<span class="make-important"><i class="fa fa-thumb-tack"></i></span>

															<p>It is a long established fact that a reader will be distracted</p>
														</li>
														<li class="unread">
															<input class="select-message" type="checkbox" />
															<span class="star-this "><i class="fa fa-star-o"></i></span>

															<h3 class="sender-name">Barlina Maze</h3>
															<span class="make-important"><i class="fa fa-thumb-tack"></i></span>

															<p>That a reader will be distracted by the readable content..</p>
														</li>
														<li class="read">
															<input class="select-message" type="checkbox" />
															<span class="star-this starred"><i class="fa fa-star-o"></i></span>

															<h3 class="sender-name">Jonathan Dae</h3>
															<span class="make-important"><i class="fa fa-thumb-tack"></i></span>

															<p>Will be distracted by the readable..</p>
														</li>
														<li class="read">
															<input class="select-message" type="checkbox" />
															<span class="star-this"><i class="fa fa-star-o"></i></span>

															<h3 class="sender-name">Humaina Burb</h3>
															<a title="" data-toggle="tooltip" data-original-title="Attachment"><i class="fa fa-paperclip"></i></a>
															<span class="make-important important-done"><i class="fa fa-thumb-tack"></i></span>

															<p>It is a long established fact by the readable ponkaa..</p>
														</li>
														<li class="unread">
															<input class="select-message" type="checkbox" />
															<span class="star-this "><i class="fa fa-star-o"></i></span>

															<h3 class="sender-name">Barlina Maze</h3>
															<span class="make-important"><i class="fa fa-thumb-tack"></i></span>

															<p>Long  will be distracted by the readable..</p>
														</li>
														<li class="unread">
															<input class="select-message" type="checkbox" />
															<span class="star-this starred"><i class="fa fa-star-o"></i></span>

															<h3 class="sender-name">Darlina Jaze</h3>
															<a title="" data-toggle="tooltip" data-original-title="Attachment"><i class="fa fa-paperclip"></i></a>
															<span class="make-important"><i class="fa fa-thumb-tack"></i></span>

															<p>Reader will be distracted by the nalanye..</p>
														</li>
														<li class="unread">
															<input class="select-message" type="checkbox" />
															<span class="star-this starred"><i class="fa fa-star-o"></i></span>

															<h3 class="sender-name">Darlina Jaze</h3>
															<a title="" data-toggle="tooltip" data-original-title="Attachment"><i class="fa fa-paperclip"></i></a>
															<span class="make-important"><i class="fa fa-thumb-tack"></i></span>

															<p>It is a long established fact that a reader will be distracted</p>
														</li>
														<li class="unread">
															<input class="select-message" type="checkbox" />
															<span class="star-this "><i class="fa fa-star-o"></i></span>

															<h3 class="sender-name">Barlina Maze</h3>
															<span class="make-important"><i class="fa fa-thumb-tack"></i></span>

															<p>That a reader will be distracted by the readable content..</p>
														</li>
														<li class="read">
															<input class="select-message" type="checkbox" />
															<span class="star-this starred"><i class="fa fa-star-o"></i></span>

															<h3 class="sender-name">Jonathan Dae</h3>
															<span class="make-important"><i class="fa fa-thumb-tack"></i></span>

															<p>Will be distracted by the readable..</p>
														</li>
														<li class="read">
															<input class="select-message" type="checkbox" />
															<span class="star-this"><i class="fa fa-star-o"></i></span>

															<h3 class="sender-name">Humaina Burb</h3>
															<a title="" data-toggle="tooltip" data-original-title="Attachment"><i class="fa fa-paperclip"></i></a>
															<span class="make-important important-done"><i class="fa fa-thumb-tack"></i></span>

															<p>It is a long established fact by the readable ponkaa..</p>
														</li>
														<li class="unread">
															<input class="select-message" type="checkbox" />
															<span class="star-this "><i class="fa fa-star-o"></i></span>

															<h3 class="sender-name">Barlina Maze</h3>
															<span class="make-important"><i class="fa fa-thumb-tack"></i></span>

															<p>Long  will be distracted by the readable..</p>
														</li>
														<li class="unread">
															<input class="select-message" type="checkbox" />
															<span class="star-this starred"><i class="fa fa-star-o"></i></span>

															<h3 class="sender-name">Darlina Jaze</h3>
															<a title="" data-toggle="tooltip" data-original-title="Attachment"><i class="fa fa-paperclip"></i></a>
															<span class="make-important"><i class="fa fa-thumb-tack"></i></span>

															<p>Reader will be distracted by the nalanye..</p>
														</li>
													</ul>
												</div>
											</div><!-- Inbox lists -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="advertisment-box">
										<h4 class="">advertisment</h4>
										<figure>
											<a href="#" title="Advertisment"><img src="images/resources/ad-widget.jpg" alt=""></a>
										</figure>
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