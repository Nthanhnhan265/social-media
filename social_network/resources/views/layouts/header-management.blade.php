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
                <li><a href="{{ url('newsfeed') }}" title="Home" data-ripple=""><i class="ti-home"></i></a></li>
            </ul>
            <div class="user-img">
                <img src="{{ asset('images/resources/admin.jpg') }}" alt="">
                <span class="status f-online"></span>
                <div class="user-setting">
                    <a href="#" title=""><span class="status f-online"></span>online</a>
                    <a href="#" title=""><span class="status f-away"></span>away</a>
                    <a href="#" title=""><span class="status f-off"></span>offline</a>
                    <a href="#" title=""><i class="ti-user"></i> view profile</a>
                    <a href="#" title=""><i class="ti-pencil-alt"></i>edit profile</a>
                    <a href="#" title=""><i class="ti-target"></i>activity log</a>
                    <a href="#" title=""><i class="ti-settings"></i>account setting</a>
                    <a href="#" title=""><i class="ti-power-off"></i>log out</a>
                </div>
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