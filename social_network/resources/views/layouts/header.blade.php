<?php

use App\Models\Notification;
use App\Models\Posts;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Share;

$notifications = Notification::getAllNotification();
$allUsers = User::get();


?>
<div>
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Winku Social Network Toolkit</title>
    <link rel="icon" href="{{ asset('images/fav.png') }}" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('css/popupShare.css') }}">
	<link rel="stylesheet" href="{{asset('css/main.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/color.css')}}">
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
	<!-- fancybox -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"> -->


</head>

<body>
    <div id="myModal" class="share_modal" style="display:none">


        <!-- Modal content -->
        <div class="share_modal-content">
            <span onclick="closeModal()" class="share_close">&times;</span>
            <h4 class="mb-2">Select Post Sharing Mode</h4>
            <form action="{{ route('share.store') }}" method="POST">
                @csrf
                <!-- Trường ẩn để lưu post ID -->
                <input type="hidden" name="post_id" id="post_id" value="">
                <div class="share-option">
                    <input type="radio" id="onlyMe" name="shareOption" value="0" checked>
                    <label for="onlyMe">Only with me</label>
                </div>
                <div class="share-option">
                    <input type="radio" id="everyone" name="shareOption" value="1">
                    <label for="everyone">With everyone</label>
                </div>
                <button type="submit" class="mt-3">Share</button>
            </form>
        </div>

    </div>
	<div class="theme-layout">
		<div class="responsive-header">
			<div class="mh-head first Sticky">
				<span class="mh-btns-left">
					<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
				</span>
				<span class="mh-text">
					<a href="{{ url ('newsfeed') }}" title="">
						<img src="{{asset('images/logo.png')}}" alt="ERR">
						
					</a>
				</span>
				<span class="mh-btns-right">
					<a class="fa fa-sliders" href="#shoppingbag"></a>
				</span>
			</div>
			<div class="mh-head second">
            <form class="mh-form" action="#">
					<input placeholder="search" />
					<button type="submit">
						find
					</button>
				</form>
			</div>
            <nav id="shoppingbag">
                <div>
                    <div class="">
                        <form method="post">
                            <div class="setting-row">
                                <span>use night mode</span>
                                <input type="checkbox" id="nightmode" />
                                <label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Notifications</span>
                                <input type="checkbox" id="switch2" />
                                <label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Notification sound</span>
                                <input type="checkbox" id="switch3" />
                                <label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>My profile</span>
                                <input type="checkbox" id="switch4" />
                                <label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Show profile</span>
                                <input type="checkbox" id="switch5" />
                                <label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                        </form>
                        <h4 class="panel-title">Account Setting</h4>
                        <form method="post">
                            <div class="setting-row">
                                <span>Sub users</span>
                                <input type="checkbox" id="switch6" />
                                <label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>personal account</span>
                                <input type="checkbox" id="switch7" />
                                <label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Business account</span>
                                <input type="checkbox" id="switch8" />
                                <label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Show me online</span>
                                <input type="checkbox" id="switch9" />
                                <label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Delete history</span>
                                <input type="checkbox" id="switch10" />
                                <label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Expose author name</span>
                                <input type="checkbox" id="switch11" />
                                <label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <div class="topbar stick">
            <div class="logo">
                <a title="" href="{{ url('newsfeed') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
            </div>

            <div class="top-area">
            <div class="position-relative">
              <form class="d-flex position-absolute" style="width:30vw; transform:translate(90%,30%)" role="search" action="{{route('posts.search')}}" method="GET">
                <input class="form-control me-2" type="search"  name ="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
                <ul class="setting-area">

                    <li><a href="{{ url('newsfeed') }}" title="Home" data-ripple=""><i class="ti-home"></i></a></li>
                    <li>
                        <a href="#" title="Notification" data-ripple="" class="notification-e">
                            <i class="ti-bell"></i><span>{{count($notifications->where('status','unread'))}}</span>
                        </a>
                        <div class="dropdowns">
                            <span>{{count($notifications->where('status','unread'))}} New Notifications</span>
                            <ul class="drops-menu">
                                @foreach($notifications as $notification)
                                <li>
                                    <form action="{{ url('read-notification/'.$notification->notification_id)}}" method="post" class="">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" name="type_id" value="{{$notification->type_id}}">
                                        <input type="hidden" name="type" value="{{$notification->type}}">
                                        <button type="submit" class={{$notification->status == 'read' ? "read-noti" : "unread-noti	"}}>
                                            <div class="corner-time">At: {{$notification->created_at}}</div>
                                            <div style="width: 100%;display: flex; align-items: center">
                                                <!-- render sending friend request notification  -->
                                                @if($notification->type=="friend_request")
                                                @php
                                                $author = $allUsers->where('user_id',$notification->type_id)->first();

                                                @endphp
                                                @if($author)
                                                <div class="avatar-noti">
                                                    <img src="{{asset('/storage/images/'.$author->avatar)}}" alt="">
                                                </div>
                                                @endif

                                                <!-- render accept friend request notification  -->
                                                @elseif($notification->type=="accept")
                                                @php
                                                $author = $allUsers->where('user_id',$notification->type_id)->first();
                                                @endphp
                                                @if($author)
                                                <div class="avatar-noti">
                                                    <img src="{{asset('/storage/images/'.$author->avatar)}}" alt="">
                                                </div>
                                                @endif
                                                <!-- render accept friend request notification  -->
                                                @elseif($notification->type=="newpost")
                                                @php
                                                $author = Posts::where('id',$notification->type_id)->with('user')->first()->user;

                                                @endphp

                                                @if($author)
                                                <div class="avatar-noti">
                                                    <img src="{{asset('/storage/images/'.$author->avatar)}}" alt="">
                                                </div>
                                                @endif
                                                @elseif($notification->type=="sharepost")
                                                @php
                                                $author = Share::where('share_id',$notification->type_id)->with('user')->first()->user;

                                                @endphp

                                                @if($author)
                                                <div class="avatar-noti">
                                                    <img src="{{asset('/storage/images/'.$author->avatar)}}" alt="">
                                                </div>
                                                @endif
                                                @endif
                                                <div class="mesg-meta text-left">
                                                    {!! $notification->content!!}
                                                </div>

                                            </div>

                                        </button>
                                    </form>
                                </li>
                                @endforeach
                            </ul>
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
                <div class="user-img" style="width: 60px; height: 60px; overflow: hidden; border-radius: 50%;">
                    <x-user-avt>
                    </x-user-avt>
                    <span class="status f-online"></span>
                </div>
                <div class="user-setting">
                    <a href="#" title=""><span class="status f-online"></span>online</a>
                    <a href="#" title=""><span class="status f-away"></span>away</a>
                    <a href="#" title=""><span class="status f-off"></span>offline</a>

                    <a href="{{url('time-line/user-profile/'.Auth::user()->user_id)}}" title=""><i class="ti-user"></i> view profile</a>
                    <a href="#" title=""><i class="ti-pencil-alt"></i>edit profile</a>
                    <a href="#" title=""><i class="ti-target"></i>activity log</a>
                    <a href="#" title=""><i class="ti-settings"></i>account setting</a>
                    @if (auth()->check() && auth()->user()->role_id_fk == 1)
                    <a href="{{url('/user-management')}}" title="Admin" data-ripple="">
                        <i class="fa-solid fa-user fa-bounce"></i> <span>Admin</span>
                    </a>
                    @endif


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
        </div><!-- topbar -->
        <div id="user-profile" style="display: none">
            <span id="fullname" data-value="{{Auth::user()->last_name." ".Auth::user()->first_name}}"></span>

        </div>