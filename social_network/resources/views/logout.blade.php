<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Winku Social Network Toolkit</title>
	<link rel="icon" href="{{ asset('images/fav.png') }}" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="{{asset('css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<!-- responsive header -->
@extends('/layouts.header')
	@section('content')
	@endsection
	<div class="topbar stick">
		<div class="logo">
			<a title="" href="{{ url('newsfeed') }}"><img src="images/logo.png" alt=""></a>
		</div>
		
		<div class="top-area">
			<div class="top-search">
				<form method="post" class="">
					<input type="text" placeholder="Search Friend">
					<button data-ripple><i class="ti-search"></i></button>
				</form>
			</div>
			<div class="login-form">
				<form method="post">
					<input type="text" placeholder="User Name">
					<input type="password" placeholder="Passoword">
					<button type="submit">Login</button>
				</form>
			</div>
		</div>
	</div><!-- topbar with logout -->
	
	<section>
		<div class="feature-photo">
			<figure><img alt="" src="images/resources/timeline-1.jpg"></figure>
			<div class="add-btn">
				<span>1205 followers</span>
				<a data-ripple="" title="" href="#">Add Friend</a>
			</div>
			<form class="edit-phto">
				<i class="fa fa-camera-retro"></i>
				<label class="fileContainer">
					Edit Cover Photo
				<input type="file">
				</label>
			</form>
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						<div class="user-avatar">
							<figure>
								<img alt="" src="images/resources/user-avatar.jpg">
								<form class="edit-phto">
									<i class="fa fa-camera-retro"></i>
									<label class="fileContainer">
										Edit Display Photo
										<input type="file">
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
										<a class="active" href="#" title="" data-ripple="">more</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		
	<section>
		<div class="gap100 gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="logout-meta">
							<h2>logged out</h2>
							<span>Do you want to check Janice Griffith’s Profile?</span>
							<p>
								Please <a href="{{ url('landing') }}" title="">Login</a> or <a href="{{ url('landing') }}" title="">Register</a> now to create your own profile and have access to all the Winku awesome features!
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>

	<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span class="copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span>
					<i><img src="images/credit-cards.png" alt=""></i>
				</div>
			</div>
		</div>
	</div>
</div>	
	
		<script src="{{ asset('js/main.min.js') }}"></script>
		<script src="{{ asset('js/script.js') }}"></script>
		<script src="{{ asset('js/map-init.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

</body>	

</html>