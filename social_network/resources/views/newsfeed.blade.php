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
											<i class="ti-mouse-alt"></i>
											<a href="{{ url('inbox') }}" title="">Inbox</a>
										</li>
										<li>
											<i class="ti-files"></i>
											<a href="{{ url('fav-page') }}" title="">My pages</a>
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
								<x-recent_acivity 
										:postActivityHistors="$postActivityHistors" 
										:commentsActivityHistorys="$commentsActivityHistorys" 
										:shareActivityHistorys="$shareActivityHistorys" 
								/>
								
								<!-- recent activites -->
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
							<figure>
								<?php
								$avtUser = Auth::user()->avatar;
								?>
								<!-- <img src="{{ asset('images/resources/' . $avtUser) }}" alt=""> -->
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
					<x-loadposts :posts=$posts :user=$user></x-loadposts>

					<div style="height:1rem">
						<div id="loading-spinner">
							<img src="{{asset('images/ZKZg.gif')}}" alt="Loading..." />
						</div>

					</div>

				</div><!-- centerl meta -->
				<div class="col-lg-3">
					<aside class="sidebar static">
						<div class="widget">
							<h4 class="widget-title">Your page</h4>
							<div class="your-page">
								<figure>
									<a href="#" title=""><img src="images/resources/friend-avatar9.jpg" alt=""></a>
								</figure>
								<div class="page-meta">
									<a href="#" title="" class="underline">My page</a>
									<span><i class="ti-comment"></i><a href="{{ url('insight') }}" title="">Messages <em>9</em></a></span>
									<span><i class="ti-bell"></i><a href="{{ url('insight') }}" title="">Notifications <em>2</em></a></span>
								</div>
								<div class="page-likes">
									<ul class="nav nav-tabs likes-btn">
										<li class="nav-item"><a class="active" href="#link1" data-toggle="tab">likes</a></li>
										<li class="nav-item"><a class="" href="#link2" data-toggle="tab">views</a></li>
									</ul>

								</div>
							</div>
						</div>
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