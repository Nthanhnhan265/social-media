@extends('layouts.app')
@section('content')
{{-- top area uses component 'personal_nav' and pass 2 arguments,
	 (note: don't SPACE after attributes, ex: :user = $friend (error))
--}}
<!-- top area -->
@if ($errors->any())
<div class="alert alert-danger position-fixed z-1 countdown">
	<ul class="p-0 m-0">
		@foreach ($errors->all() as $error)
		<li style="list-style: none"><i class="fa-solid fa-circle-exclamation pe-2"></i> {{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<x-personal_nav :user=$user></x-personal_nav>

<section>
	<div class="gap gray-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="row" id="page-contents">
						<div class="col-lg-3">
							<aside class="sidebar static">
					
								<div class="widget stick-widget" style="height:unset">
									<h4 class="widget-title">Edit info</h4>
									<ul class="naves">

										<li>
											<i class="ti-info-alt"></i>
											<a href="{{ url('edit-profile-basic/'.Auth::user()->user_id) }}" title="">Basic info</a>
										</li>
									 
									</ul>
								</div><!-- settings widget -->
							</aside>
						</div><!-- sidebar -->
						<div class="col-lg-6">
    <div class="central-meta">
        <div class="editing-info">
            <h5 class="f-title"><i class="ti-lock"></i>Change Password</h5>

            <form id="changePasswordForm" method="post" action="{{ route('password.update') }}">
                @csrf
                <div class="form-group">
                    <input type="password" name="new_password" id="new_password" required="required" />
                    <label class="control-label" for="new_password">New password</label>
                    <div class="error-message" id="newPasswordError"></div>
                </div>
                <div class="form-group">
                    <input type="password" name="new_password_confirmation" id="new_password_confirmation" required="required" />
                    <label class="control-label" for="new_password_confirmation">Confirm password</label>
                    <div class="error-message" id="confirmPasswordError"></div>
                </div>
                <div class="form-group">
                    <input type="password" name="current_password" id="current_password" required="required" />
                    <label class="control-label" for="current_password">Current password</label>
                    <div class="error-message" id="currentPasswordError"></div>
                </div>
                <a class="forgot-pwd underline" title="" href="#">Forgot Password?</a>
                <div class="submit-btns">
                    <button type="submit" class="mtr-btn" id="updateButton"><span>Update</span></button>
                </div>
            </form>
        </div>
    </div>
						</div>

						<div class="col-lg-3">
							<aside class="sidebar static">
								<div class="widget">
									<div class="banner medium-opacity bluesh">
										<div style="background-image: url(images/resources/baner-widgetbg.jpg)" class="bg-image"></div>
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