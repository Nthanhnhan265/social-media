@extends('/layouts.app')
@section('content')
{{-- top area uses component 'personal_nav' and pass 2 arguments,
	 (note: don't SPACE after attributes, ex: :user = $friend (error))
--}}
<!-- top area -->
 
<x-personal_nav :user=$user :friend=$friend></x-personal_nav>

<section>
	<div class="gap gray-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="row" id="page-contents">
						<div class="col-lg-3">
							<aside class="sidebar static">
								<div class="widget">
									<h4 class="widget-title">Recent Activity</h4>
									<ul class="activitiez">
										<li>
											<div class="activity-meta">
												<i>10 hours Ago</i>
												<span><a title="" href="#">Commented on Video posted </a></span>
												<h6>by <a href="{{ url('time-line') }}">black demon.</a></h6>
											</div>
										</li>
										<li>
											<div class="activity-meta">
												<i>30 Days Ago</i>
												<span><a title="" href="#">Posted your status. “Hello guys, how are you?”</a></span>
											</div>
										</li>
										<li>
											<div class="activity-meta">
												<i>2 Years Ago</i>
												<span><a title="" href="#">Share a video on her timeline.</a></span>
												<h6>"<a href="#">you are so funny mr.been.</a>"</h6>
											</div>
										</li>
									</ul>
								</div>
								<div class="widget stick-widget">
									<h4 class="widget-title">Edit info</h4>
									<ul class="naves">
										<li>
											<i class="ti-info-alt"></i>
											<a href="edit-profile-basic" title="">Basic info</a>
										</li>
										<li>
											<i class="ti-mouse-alt"></i>
											<a href="edit-work-eductation" title="">Education & Work</a>
										</li>
										<li>
											<i class="ti-heart"></i>
											<a href="edit-interest" title="">My interests</a>
										</li>
										<li>
											<i class="ti-settings"></i>
											<a href="edit-account-setting" title="">account setting</a>
										</li>
										<li>
											<i class="ti-lock"></i>
											<a href="edit-password" title="">change password</a>
										</li>
									</ul>
								</div><!-- settings widget -->
							</aside>
						</div><!-- sidebar -->
						<div class="col-lg-6">
							<div class="central-meta">
								<div class="editing-info">
									<h5 class="f-title"><i class="ti-info-alt"></i> Edit Basic Information</h5>

									<form method="post" action="{{ url('update-Info-User/'.$user->user_id)}}">
										@csrf
										@method('PUT')
										<div class="form-group half">
											<input type="text" id="first_name" name="first_name" required="required" value="{{ $user->first_name}}" />
											<label class="control-label" for="first_name">First Name</label><i class="mtrl-select"></i>
										</div>
										<div class="form-group half">
											<input type="text" id="last_name" name="last_name" required="required" value="{{ $user->last_name}} " />
											<label class="control-label" for="last_name">Last Name</label><i class="mtrl-select"></i>
										</div>
										<div class="form-group">
											<input type="text" required="required" value="{{$user->email}}" name="email" id="email" />
											<label class="control-label" for="input"><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4b0e262a22270b">[email&#160;protected]</a></label><i class="mtrl-select"></i>
										</div>
										<!-- <div class="form-group">	
											  <input type="text" required="required"/>
											  <label class="control-label" for="input">Phone No.</label><i class="mtrl-select"></i>
											</div> -->
										<div class="dob">
											<div class="form-group">
												<select name="day">
													<option value="Day">Day</option>
													@for ($i = 1; $i <= 31; $i++) <option {{ date('d', strtotime($user->DOB)) == $i ? 'selected' : '' }}>{{ $i }}</option>
														@endfor
												</select>

											</div>
											<div class="form-group">
												<select name="month">
													<option value="month">Month</option>
													@for ($m = 1; $m <= 12; $m++) <option {{ date('m', strtotime($user->DOB)) == $m ? 'selected' : '' }}>{{ $m }}</option>
													@endfor
												</select>

											</div>
											<div class="form-group">
												<select name="year">
													<option value="year">Year</option>
													@php
													$currentYear = date('Y');
													@endphp
													@for ($y = $currentYear; $y >= 1900; $y++)
													<option {{ date('Y', strtotime($user->DOB)) == $y ? 'selected' : '' }}>{{ $y }}</option>
													@endfor
												</select>

											</div>
										</div>
										<div class="form-radio">
											<div class="radio">
												<label>
													<input type="radio" name="gender" value="0" {{ $user->gender == 0 ? 'checked' : '' }}>
													<i class="check-box"></i>Male
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="gender" value="1" {{ $user->gender == 1 ? 'checked' : '' }}>
													<i class="check-box"></i>Female
												</label>
											</div>
										</div>



										<div class="form-group">
											<textarea rows="4" id="description" name="description" required="required" maxlength="250">{{ $user->description }}</textarea>
											<label class="control-label" for="description">About Me (maximum 20 characters)</label><i class="mtrl-select"></i>
											<span id="char-count">20 characters remaining</span>
										</div>

										<div class="submit-btns">
											<button type="button" class="mtr-btn"><span> <a href="{{ url('time-line/user-profile/' .$user->user_id) }}" class="mtr-btn"><span>Cancel</span></a></span></button>
											<button type="submit" class="mtr-btn"><span>Update</span></button>
										</div>
									</form>
								</div>
							</div>
						</div><!-- centerl meta -->
						<div class="col-lg-3">
							<aside class="sidebar static">
								<div class="widget">
									<h4 class="widget-title">Your page</h4>
									<div class="your-page">
										<figure>
											<a title="" href="#"><img alt="" src="images/resources/friend-avatar9.jpg"></a>
										</figure>
										<div class="page-meta">
											<a class="underline" title="" href="#">My page</a>
											<span><i class="ti-comment"></i>Messages <em>9</em></span>
											<span><i class="ti-bell"></i>Notifications <em>2</em></span>
										</div>
										<div class="page-likes">
											<ul class="nav nav-tabs likes-btn">
												<li class="nav-item"><a data-toggle="tab" href="#link1" class="active">likes</a></li>
												<li class="nav-item"><a data-toggle="tab" href="#link2" class="">views</a></li>
											</ul>
											<!-- Tab panes -->
											<div class="tab-content">
												<div id="link1" class="tab-pane active fade show">
													<span><i class="ti-heart"></i>884</span>
													<a title="weekly-likes" href="#">35 new likes this week</a>
													<div class="users-thumb-list">
														<a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
															<img alt="" src="images/resources/userlist-1.jpg">
														</a>
														<a data-toggle="tooltip" title="" href="#" data-original-title="frank">
															<img alt="" src="images/resources/userlist-2.jpg">
														</a>
														<a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
															<img alt="" src="images/resources/userlist-3.jpg">
														</a>
														<a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
															<img alt="" src="images/resources/userlist-4.jpg">
														</a>
														<a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
															<img alt="" src="images/resources/userlist-5.jpg">
														</a>
														<a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
															<img alt="" src="images/resources/userlist-6.jpg">
														</a>
														<a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
															<img alt="" src="images/resources/userlist-7.jpg">
														</a>
													</div>
												</div>
												<div id="link2" class="tab-pane fade">
													<span><i class="ti-eye"></i>445</span>
													<a title="weekly-likes" href="#">440 new views this week</a>
													<div class="users-thumb-list">
														<a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
															<img alt="" src="images/resources/userlist-1.jpg">
														</a>
														<a data-toggle="tooltip" title="" href="#" data-original-title="frank">
															<img alt="" src="images/resources/userlist-2.jpg">
														</a>
														<a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
															<img alt="" src="images/resources/userlist-3.jpg">
														</a>
														<a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
															<img alt="" src="images/resources/userlist-4.jpg">
														</a>
														<a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
															<img alt="" src="images/resources/userlist-5.jpg">
														</a>
														<a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
															<img alt="" src="images/resources/userlist-6.jpg">
														</a>
														<a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
															<img alt="" src="images/resources/userlist-7.jpg">
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
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
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection