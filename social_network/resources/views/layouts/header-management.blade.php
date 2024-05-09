@php 
	use Illuminate\View\Component; 
	use Illuminate\Support\Facades\Auth;
@endphp 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<link rel="stylesheet" href="{{asset('css/css-management/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/css-management/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/css-management/select2.css')}}" />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
<link rel="icon" href="{{ asset('images/fav.png') }}" type="image/png" sizes="16x16">   
<link rel="stylesheet" href="{{asset('css/main.min.css')}}">
<link rel="stylesheet" href="{{asset('css//css-management/style.css')}}">
<link rel="stylesheet" href="{{asset('css/color.css')}}">
<link rel="stylesheet" href="{{asset('css/responsive.css')}}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/styles_admin.css')}}">
<link
    href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800'
    rel='stylesheet' type='text/css'>
</head>
<body>
<div class="grid-container">
    <!-- Header -->
    <header class="header">
        <div class="box-space"></div>
        <div class="top-area">				
				<ul class="setting-area">
					<li>
						<a href="#" title="Home" data-ripple=""><i class="ti-search"></i></a>
						<div class="searched">
							<form method="post" class="form-search">
								<input type="text" placeholder="Search Friend">
								<button data-ripple><i class="ti-search"></i></button>
							</form>
						</div>
					</li>
					<li><a href="{{ url('newsfeed') }}" title="Home" data-ripple=""><i class="ti-home"></i></a></li>
					<li>
						<a href="#" title="Notification" data-ripple="">
							<i class="ti-bell"></i><span>20</span>
						</a>
						<div class="dropdowns">
							<span>4 New Notifications</span>
							<ul class="drops-menu">
								<li>
									<a href="{{ url('notifications') }}" title="">
										<img src="images/resources/thumb-1.jpg" alt="">
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag green">New</span>
								</li>
								<li>

									<a href="{{ url('notifications') }}" title="">
										<img src="images/resources/thumb-2.jpg" alt="">
										<div class="mesg-meta">
											<h6>Jhon doe</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag red">Reply</span>
								</li>
								<li>

									<a href="{{ url('notifications') }}" title="">
										<img src="images/resources/thumb-3.jpg" alt="">
										<div class="mesg-meta">
											<h6>Andrew</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag blue">Unseen</span>
								</li>
								<li>

									<a href="{{ url('notifications') }}" title="">
										<img src="images/resources/thumb-4.jpg" alt="">
										<div class="mesg-meta">
											<h6>Tom cruse</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag">New</span>
								</li>
								<li>

									<a href="{{ url('notifications') }}" title="">
										<img src="images/resources/thumb-5.jpg" alt="">
										<div class="mesg-meta">
											<h6>Amy</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag">New</span>
								</li>
							</ul>
							<a href="{{ url('notifications') }}" title="" class="more-mesg">view more</a>
						</div>
					</li>
					<li>
						<a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
						<div class="dropdowns">
							<span>5 New Messages</span>
							<ul class="drops-menu">
								<li>

									<a href="{{ url('notifications') }}" title="">
										<img src="images/resources/thumb-1.jpg" alt="">
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag green">New</span>
								</li>
								<li>

									<a href="{{ url('notifications') }}" title="">
										<img src="images/resources/thumb-2.jpg" alt="">
										<div class="mesg-meta">
											<h6>Jhon doe</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag red">Reply</span>
								</li>
								<li>

									<a href="{{ url('notifications') }}" title="">
										<img src="images/resources/thumb-3.jpg" alt="">
										<div class="mesg-meta">
											<h6>Andrew</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag blue">Unseen</span>
								</li>
								<li>

									<a href="{{ url('notifications') }}" title="">
										<img src="images/resources/thumb-4.jpg" alt="">
										<div class="mesg-meta">
											<h6>Tom cruse</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag">New</span>
								</li>
								<li>

									<a href="{{ url('notifications') }}" title="">
										<img src="images/resources/thumb-5.jpg" alt="">
										<div class="mesg-meta">
											<h6>Amy</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag">New</span>
								</li>
							</ul>
							<a href="{{ url('messages') }}" title="" class="more-mesg">view more</a>
						</div>
					</li>

				</ul>
				<div class="user-img">
					<x-user-avt>
					</x-user-avt>
					<span class="status f-online"></span>
				</div>
				<div class="user-setting">
					<a href="#" title=""><span class="status f-online"></span>online</a>
					<a href="#" title=""><span class="status f-away"></span>away</a>
					<a href="#" title=""><span class="status f-off"></span>offline</a>
					@php 
						 
					@endphp
					<a href="{{url('time-line/user-profile/'.Auth::user()->user_id)}}" title=""><i class="ti-user"></i> view profile</a>
					<a href="#" title=""><i class="ti-pencil-alt"></i>edit profile</a>
					<a href="#" title=""><i class="ti-target"></i>activity log</a>
					<a href="#" title=""><i class="ti-settings"></i>account setting</a>


					<form method="POST" action="{{ route('logout') }}">
						@csrf
						<x-dropdown-link style="display: inline-block!important;font-size: 13px!important;padding: 10px 15px!important;text-transform: capitalize!important;width: 100%!important;background: #fafafa!important;position: relative!important;color:#4f9ad6!important" :href="route('logout')" onclick="event.preventDefault();
											this.closest('form').submit();">
							<i class="ti-power-off pr-1"></i>
							{{ __('Log Out') }}
						</x-dropdown-link>
					</form>
				</div>
			</div>
</header>
    <!-- Sidebar -->
    <aside id="sidebar">
        <div class="sidebar-title">
            <div class="sidebar-brand">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
            <li class="sidebar-list-item">
                <a href="{{ asset('user-management') }}">
                    <span class="material-icons-outlined"></span> Users management
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="{{ asset('group-management') }}">
                    <span class="material-icons-outlined"></span> Groups management
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="{{ asset('post-management') }}">
                    <span class="material-icons-outlined"></span> Post Management
                </a>
            </li>
        </ul>
    </aside> 