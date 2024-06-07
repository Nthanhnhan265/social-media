<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;
?>
@extends('layouts.app')
@section('content')
<section>
	<div class="gap gray-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="row" id="page-contents">
						<div class="col-lg-3">
						 
						</div><!-- sidebar -->



						<div class="col-lg-6">
						

							<!-- resources/views/search.blade.php -->

							
							<div class="container">
   				 <!-- Tabs for Groups, Posts, and Everyone -->
   				 <div class="tabs">
					<button class="tab-link active" onclick="openTab(event, 'Groups')">Groups</button>
					<button class="tab-link" onclick="openTab(event, 'Posts')">Posts</button>
					<button class="tab-link" onclick="openTab(event, 'Everyone')">Everyone</button>
				</div>

   				 <!-- Groups Section -->
					<div id="Groups" class="tab-content active">
						@if($groups->isNotEmpty())
							<div class="search-results-groups">
								<h3 class="tab-heading">Groups</h3>
								@foreach ($groups as $group)
									<div class="central-meta">
										<div class="groups">
										<span style="font-size: 1rem">
 									   <i class="fa fa-users"></i>{{ $group->memberCount }}</span>
										</div>
										<ul class="nearby-contct">
											<li>
												<!-- Kiểm tra xem user đã tham gia vào group hay chưa? -->
												<div class="nearly-pepls">
													<figure>
														<a href="{{ url('group-view/' . $group->group_id) }}" title=""><img src="images/resources/group1.jpg" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="{{ url('group-view/' . $group->group_id) }}" title="">{{$group->name_group}}</a></h4>
														@if($group->status == 1)
														<span>Active groups</span>
														@else
														<span>Deactive groups</span>
														@endif																																
														@if($group->status === 'Join')
														<form action="{{ route('join-request', $group->group_id )}}" method="POST" style="display: inline;" onsubmit="">
															@csrf
															@method("POST")
															<button type="submit" title="" data-ripple="" class="request-join">Join</button>
														</form>
														@elseif($group->status === 'Delete request')						
															<form action="{{ route('search-delete-request', $group->group_id) }}" method="POST" style="display: inline;" onsubmit="">
															@csrf
															@method('DELETE')
															<button type="submit" title="" data-ripple="" class="request-join" style="width: 140px;">Delete request</button>
													</form>									
														@else
															<button type="" title="" data-ripple="" class="request-join" style="background-color: #088dcd">Joined</button>
														@endif													
													</div>
												</div>
											</li>
										</ul>
									</div>
								@endforeach
							</div>
						@else
							<p>No groups found.</p>
						@endif
					</div>

    				<!-- Posts Section -->
					<div id="Posts" class="tab-content">
						@if($posts->isNotEmpty())
							<div class="search-results-posts">
								<h3 class="tab-heading">Posts</h3>
								<x-loadposts :posts=$posts :user=$user></x-loadposts>
							</div>
						@else
							<p>No posts found.</p>
						@endif
					</div>

						<!-- Everyone Section -->
						<div id="Everyone" class="tab-content">
							@if($users->isNotEmpty())
								<div class="search-results-everyone">
									<h3 class="tab-heading">Everyone</h3>
									@foreach ($users as $user)
										<div class="central-meta">
											<div class="groups">
												<span><i class="fa fa-user"></i> {{$user->last_name}}</span>
											</div>
											<ul class="nearby-contct">
												<li>
													<div class="nearly-pepls">
														<figure class='border-avt'>
															<img src="{{ asset('storage/images/' . $user->avatar) }}" alt="" style="width:100%; height:auto;">
														</figure>
														<div class="pepl-info">
															<h4><a href="{{ url('time-line/user-profile/' . $user->user_id) }}" title="">{{$user->last_name}} {{$user->first_name}}</a></h4>
																{{-- <a href="#" title="" class="add-butn" data-ripple="">Follow</a> --}}
														</div>
													</div>
												</li>
											</ul>
										</div>
									@endforeach
								</div>
							@else
								<p>No users found.</p>
							@endif
						</div>
				</div>





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