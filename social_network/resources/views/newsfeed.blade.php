<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;
?>
@extends('layouts.app')
@section('content')

@if ($errors->any())
<div class="alert alert-danger position-fixed z-1 countdown">
	<ul class="p-0 m-0">
		@foreach ($errors->all() as $error)
		<li style="list-style: none"><i class="fa-solid fa-circle-exclamation pe-2"></i> {{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<section>
	<div class="gap gray-bg pt-2">
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
											<i class="ti-user"></i>
											<a href="{{ url('timeline-friends/' . Auth::user()->user_id) }}" title="">friends</a>
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
								<div class="widget">
									<h4 class="widget-title">Recent Activity</h4>
									<ul class="activitiez">
										{{-- $activityHistorys --}}
										@foreach ($postActivityHistors as $postActivityHistor)
										<li>
											<div class="activity-meta">
												<i>{{ $postActivityHistor->created_at }}</i>
												<span><a href="#" title="">Posted your status.
														“{{ $postActivityHistor->content }}”</a></span>
											</div>
										</li>
										@endforeach

										@foreach ($commentsActivityHistorys as $commentsActivityHistory)
										<li>
											<div class="activity-meta">
												<i>{{ $commentsActivityHistory->created_at }}</i>
												<span><a href="#" title="">Commented on Video posted
													</a></span>
												<h6>by <a href="{{ url('time-line') }}">
														{{ $commentsActivityHistory->user_first_name }}
														{{ $commentsActivityHistory->user_last_name }} </a></h6>
														
														<div class="dropdown" style="position: absolute; right: 5%;">
														<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton-{{$commentsActivityHistory->comment_id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: none;background:#f4f2f2;">
															<i class="fa-solid fa-ellipsis-vertical"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-{{$commentsActivityHistory->comment_id}}">
															<a class="dropdown-item" href="{{url('edit-comment/'. $commentsActivityHistory->comment_id)}}">Update</a>
															
															<form action="{{ url('comments/'.$commentsActivityHistory->comment_id) }}" method="POST" style="display: inline;">
																@csrf
																@method('DELETE')
																<button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this comment ?');">Delete</button>
															</form>
														</div>
													</div>
											</div>
										</li>
										@endforeach

										@foreach ($shareActivityHistorys as $shareActivityHistory)
										<li>
											<div class="activity-meta">
												<i>{{ $shareActivityHistory->created_at }}</i>
												<span><a href="#" title="">Share a @if ($shareActivityHistory->status === 0)
														privary
														@else
														public
														@endif
														video on your timeline.</a></span>
											</div>
										</li>
										@endforeach
									</ul>
								</div><!-- recent activites -->
								{{-- <div class="widget stick-widget">
                                        <h4 class="widget-title">Who's follownig</h4>
                                        <ul class="followers">
                                            <li>
                                                <figure><img src="images/resources/friend-avatar2.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="{{ url('time-line') }}" title="">Kelly Bill</a></h4>

								<a href="#" title="" class="underline">Add Friend</a>
						</div>

					</div><!-- who's following --> --}}
					</aside>
				</div><!-- sidebar -->
				<div class="col-lg-6">
					<div class="central-meta">
						<div class="new-postbox">
							<figure >
								<?php
								$avtUser = Auth::user()->avatar;
								?>
							 
								<x-user-avt>
								</x-user-avt>

							</figure>
							<div class="newpst-input">
								<form method="post" action="{{ url('post') }}" enctype="multipart/form-data">
									@csrf
									@method('post')
									<textarea rows="2" name="content" placeholder="write something"></textarea>
									<div class="attachments">
										<ul>
											<!-- ###Task: viet js cho size input -->
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
												<button type="submit">Post</button>
											</li>
										</ul>
									</div>
								</form>

							</div>
						</div>
					</div><!-- add post new box #loadpost-->
					<x-loadposts :posts=$posts :firstPost=$firstPost></x-loadposts>

					<div style="height:1rem">
						<div id="loading-spinner">
							<img src="{{asset('images/ZKZg.gif')}}" alt="Loading..." />
						</div>

					</div>

				</div><!-- centerl meta -->
				<div class="col-lg-3">
					<aside class="sidebar static">
					 
						<div class="widget friend-list stick-widget">
							<h4 class="widget-title">Friends</h4>
							<div id="searchDir"></div>
							<ul id="people-list" class="friendz-list">
								@foreach ($friends as $friend)
								<x-friendlist :friend=$friend></x-friendlist>
								@endforeach

							</ul>

						</div><!-- friends list sidebar -->
					</aside>
				</div>
			</div>
</section>
@endsection