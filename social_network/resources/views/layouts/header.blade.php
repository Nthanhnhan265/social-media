@php 
	use Illuminate\View\Component; 
	use Illuminate\Support\Facades\Auth;
@endphp 
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
	<div class="theme-layout">
		<div class="responsive-header">
			<div class="mh-head first Sticky">
				<span class="mh-btns-left">
					<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
				</span>
				<span class="mh-text">
					<a href="{{ url ('newsfeed') }}" title="">
					<img src="{{asset('images/logo.png')}}" alt="ERR">
					kkkk
					</a>
				</span>
				<span class="mh-btns-right">
					<a class="fa fa-sliders" href="#shoppingbag"></a>
				</span>
			</div>
			<div class="mh-head second">
				<form class="mh-form">
					<input placeholder="search" />
					<a href="#/" class="fa fa-search"></a>
				</form>
			</div>
			<!-- <nav id="menu" class="res-menu">
	<ul>
		<li><span>Home</span>
			<ul>
				<li><a href="{{ url('index-2') }}" title="">Home Social</a></li>
				<li><a href="{{ url('index2') }}" title="">Home Social 2</a></li>
				<li><a href="{{ url('index-company') }}" title="">Home Company</a></li>
				<li><a href="{{ url('landing') }}" title="">Login page</a></li>
				<li><a href="{{ url('logout') }}" title="">Logout Page</a></li>
				<li><a href="{{ url('newsfeed') }}" title="">news feed</a></li>
			</ul>
		</li>
		<li><span>Time Line</span>
			<ul>
				<li><a href="{{ url('time-line') }}" title="">timeline</a></li>
				<li><a href="{{ url('timeline-friends') }}" title="">timeline friends</a></li>
				<li><a href="{{ url('timeline-groups') }}" title="">timeline groups</a></li>
				<li><a href="{{ url('timeline-pages') }}" title="">timeline pages</a></li>
				<li><a href="{{ url('timeline-photos') }}" title="">timeline photos</a></li>
				<li><a href="{{ url('timeline-videos') }}" title="">timeline videos</a></li>
				<li><a href="{{ url('fav-page') }}" title="">favourit page</a></li>
				<li><a href="{{ url('groups') }}" title="">groups page</a></li>
				<li><a href="{{ url('page-likers') }}" title="">Likes page</a></li>
				<li><a href="{{ url('people-nearby') }}" title="">people nearby</a></li>


			</ul>
		</li>
		<li><span>Account Setting</span>
			<ul>
				<li><a href="{{ url('create-fav-page') }}" title="">create fav page</a></li>
				<li><a href="{{ url('edit-account-setting') }}" title="">edit account setting</a></li>
				<li><a href="{{ url('edit-interest') }}" title="">edit-interest</a></li>
				<li><a href="{{ url('edit-password') }}" title="">edit-password</a></li>
				<li><a href="{{ url('edit-profile-basic') }}" title="">edit profile basics</a></li>
				<li><a href="{{ url('edit-work-eductation') }}" title="">edit work educations</a></li>
				<li><a href="{{ url('messages') }}" title="">message box</a></li>
				<li><a href="{{ url('inbox') }}" title="">Inbox</a></li>
				<li><a href="{{ url('notifications') }}" title="">notifications page</a></li>
			</ul>
		</li>
		<li><span>forum</span>
			<ul>
				<li><a href="{{ url('forum') }}" title="">Forum Page</a></li>
				<li><a href="{{ url('forums-category') }}" title="">Fourm Category</a></li>
				<li><a href="{{ url('forum-open-topic') }}" title="">Forum Open Topic</a></li>
				<li><a href="{{ url('forum-create-topic') }}" title="">Forum Create Topic</a></li>
			</ul>
		</li>
		<li><span>Our Shop</span>
			<ul>
				<li><a href="{{ url('shop') }}" title="">Shop Products</a></li>
				<li><a href="{{ url('shop-masonry') }}" title="">Shop Masonry Products</a></li>
				<li><a href="{{ url('shop-single') }}" title="">Shop Detail Page</a></li>
				<li><a href="{{ url('shop-cart') }}" title="">Shop Product Cart</a></li>
				<li><a href="{{ url('shop-checkout') }}" title="">Product Checkout</a></li>
			</ul>
		</li>
		<li><span>Our Blog</span>
			<ul>
				<li><a href="{{ url('blog-grid-wo-sidebar') }}" title="">Our Blog</a></li>
				<li><a href="{{ url('blog-grid-right-sidebar') }}" title="">Blog with R-Sidebar</a></li>
				<li><a href="{{ url('blog-grid-left-sidebar') }}" title="">Blog with L-Sidebar</a></li>
				<li><a href="{{ url('blog-masonry') }}" title="">Blog Masonry Style</a></li>
				<li><a href="{{ url('blog-list-wo-sidebar') }}" title="">Blog List Style</a></li>
				<li><a href="{{ url('blog-list-right-sidebar') }}" title="">Blog List with R-Sidebar</a>
				</li>
				<li><a href="{{ url('blog-list-left-sidebar') }}" title="">Blog List with L-Sidebar</a></li>
				<li><a href="{{ url('blog-detail') }}" title="">Blog Post Detail</a></li>
			</ul>
		</li>
		<li><span>Portfolio</span>
			<ul>
				<li><a href="{{ url('portfolio-2colm') }}" title="">Portfolio 2col</a></li>
				<li><a href="{{ url('portfolio-3colm') }}" title="">Portfolio 3col</a></li>
				<li><a href="{{ url('portfolio-4colm') }}" title="">Portfolio 4col</a></li>
			</ul>
		</li>
		<li><span>Support & Help</span>
			<ul>
				<li><a href="{{ url('support-and-help') }}" title="">Support & Help</a></li>
				<li><a href="{{ url('support-and-help-detail') }}" title="">Support & Help Detail</a></li>
				<li><a href="{{ url('support-and-help-search-result') }}" title="">Support & Help Search
						Result</a></li>
			</ul>
		</li>
		<li><span>More pages</span>
			<ul>
				<li><a href="{{ url('careers') }}" title="">Careers</a></li>
				<li><a href="{{ url('career-detail') }}" title="">Career Detail</a></li>
				<li><a href="{{ url('404') }}" title="">404 error page</a></li>
				<li><a href="{{ url('404-2') }}" title="">404 Style2</a></li>
				<li><a href="{{ url('faq') }}" title="">faq's page</a></li>
				<li><a href="{{ url('insights') }}" title="">insights</a></li>
				<li><a href="{{ url('knowledge-base') }}" title="">knowledge base</a></li>
			</ul>
		</li>
		<li><a href="{{ url('about') }}" title="">about</a></li>
		<li><a href="{{ url('about-company') }}" title="">About Us2</a></li>
		<li><a href="{{ url('contact') }}" title="">contact</a></li>
		<li><a href="{{ url('contact-branches') }}" title="">Contact Us2</a></li>
		<li><a href="{{ url('widgets') }}" title="">Widgets</a></li>
	</ul>
	</nav> -->
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
				<a title="" href="{{ url('newsfeed') }}"><img src="{{asset('images/logo.png')}}" alt=""></a>
			</div>

			<div class="top-area">
				<!-- <ul class="main-menu">
				<li>
					<a href="#" title="">Home</a>
					<ul>
						<li><a href="{{ url('index-2') }}" title="">Home Social</a></li>
						<li><a href="{{ url('index2') }}" title="">Home Social 2</a></li>
						<li><a href="{{ url('index-company') }}" title="">Home Company</a></li>
						<li><a href="{{ url('landing') }}" title="">Login page</a></li>
						<li><a href="{{ url('logout') }}" title="">Logout Page</a></li>
						<li><a href="{{ url('newsfeed') }}" title="">news feed</a></li>
					</ul>
				</li>
				<li>
					<a href="#" title="">timeline</a>
					<ul>
						<li><a href="{{ url('time-line')  }}" title="">timeline</a></li>
						<li><a href="{{ url('timeline-friends') }}" title="">timeline friends</a></li>
						<li><a href="{{ url('timeline-groups') }}" title="">timeline groups</a></li>
						<li><a href="{{ url('timeline-pages') }}" title="">timeline pages</a></li>
						<li><a href="{{ url('timeline-photos') }}" title="">timeline photos</a></li>
						<li><a href="{{ url('timeline-videos') }}" title="">timeline videos</a></li>
						<li><a href="{{ url('fav-page') }}" title="">favourit page</a></li>
						<li><a href="{{ url('groups') }}" title="">groups page</a></li>
						<li><a href="{{ url('page-likers') }}" title="">Likes page</a></li>
						<li><a href="{{ url('people-nearby') }}" title="">people nearby</a></li>
					</ul>
				</li>
				<li>
					<a href="#" title="">account settings</a>
					<ul>
						<li><a href="{{ url('create-fav-page') }}" title="">create fav page</a></li>
						<li><a href="{{ url('edit-account-setting') }}" title="">edit account setting</a></li>
						<li><a href="{{ url('edit-interest') }}" title="">edit-interest</a></li>
						<li><a href="{{ url('edit-password') }}" title="">edit-password</a></li>
						<li><a href="{{ url('edit-profile-basic') }}" title="">edit profile basics</a></li>
						<li><a href="{{ url('edit-work-eductation') }}" title="">edit work educations</a></li>
						<li><a href="{{ url('messages') }}" title="">message box</a></li>
						<li><a href="{{ url('inbox') }}" title="">Inbox</a></li>
						<li><a href="{{ url('notifications') }}" title="">notifications page</a></li>
					</ul>
				</li>
				<li>
					<a href="#" title="">more pages</a>
					<ul>
						<li><a href="{{ url('404') }}" title="">404 error page</a></li>
						<li><a href="{{ url('about') }}" title="">about</a></li>
						<li><a href="{{ url('contact') }}" title="">contact</a></li>
						<li><a href="{{ url('faq') }}" title="">faq's page</a></li>
						<li><a href="{{ url('insights') }}" title="">insights</a></li>
						<li><a href="{{ url('knowledge-base') }}" title="">knowledge base</a></li>
						<li><a href="{{ url('widgets') }}" title="">Widgts</a></li>
					</ul>
				</li>
			</ul> -->
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
		</div><!-- topbar -->