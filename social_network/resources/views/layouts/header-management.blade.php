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
		<div class="position-relative" style="margin-left: 250px; margin-top: 20px;">
			@php
				// Lấy tên route hiện tại
				$currentRoute = Route::current()->getName();
				$searchAction = '';
				if (Str::contains($currentRoute, 'user-management')) {
					$searchAction = route('user-management-search');
				} elseif (Str::contains($currentRoute, 'group-management')) {
					$searchAction = route('group-management-search');
				} else {
					$searchAction = route('post-management-search'); 
				}
			@endphp
			<form class="d-flex" style="width:30vw; height: 30px;" action="{{ $searchAction }}" method="GET">
				<input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success-2" style="line-height: 15px" type="submit">Search</button>
			</form>
		</div>
        <div class="top-area">				
			 
				<div class="user-img" style="width:4rem;height:4rem">
					<x-user-avt>
					</x-user-avt>
 				</div>
				<div class="user-setting">
				 
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
                <a href="{{ url('newsfeed')}}"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
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