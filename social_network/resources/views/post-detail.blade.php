<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<link rel="stylesheet" href="{{asset('css/css-management/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/css-management/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/css-management/select2.css')}}" />
<!-- <link rel="stylesheet" href="{{asset('css/css-management/uniform.css')}}" />

<link rel="stylesheet" href="{{asset('css/css-management/matrix-style.css')}}" />
<link rel="stylesheet" href="{{asset('css/css-management/matrix-media.css')}}" /> -->
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
                <a href="user-management">
                    <span class="material-icons-outlined"></span> Users management
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="#">
                    <span class="material-icons-outlined"></span> Groups management
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="#">
                    <span class="material-icons-outlined"></span> Post Management
                </a>
            </li>
        </ul>
    </aside>
    <!-- End Sidebar -->

    <!-- Main -->
    <main class="main-container">
    <div id="content">
            <div id="content-header">               
                <h1>Post detail</h1>
            </div>
                <hr>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">                          
                            <div class="widget-content nopadding">  
                            <div class="control-group">
                                        <label class="control-label">Post ID : 1</label>                                                                             
                            </div>                             
                            <div class="central-meta item">                                   
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<img src="images/resources/friend-avatar10.jpg" alt="">
											</figure>
											<div class="friend-name">
												<ins><a href="{{ url('time-line') }}" title="">Janice Griffith</a></ins>
												<span>published: june,2 2018 19:PM</span>
                                                
											</div>                                           
											<div class="post-meta">
												<img src="images/resources/user-post.jpg" alt="">
												<div class="we-video-info">
													<ul>
														<li>
															<span class="views" data-toggle="tooltip" title="views">
																<i class="fa fa-eye"></i>
																<ins>1.2k</ins>
															</span>
														</li>
														<li>
															<span class="comment" data-toggle="tooltip" title="Comments">
																<i class="fa fa-comments-o"></i>
																<ins>52</ins>
															</span>
														</li>
														<li>
															<span class="like" data-toggle="tooltip" title="like">
																<i class="ti-heart"></i>
																<ins>2.2k</ins>
															</span>
														</li>
														<li>
															<span class="dislike" data-toggle="tooltip" title="dislike">
																<i class="ti-heart-broken"></i>
																<ins>200</ins>
															</span>
														</li>														
													</ul>
												</div>
												<div class="description">
													
													<p>
														World's most beautiful car in Curabitur <a href="#" title="">#test drive booking !</a> the most beatuiful car available in america and the saudia arabia, you can book your test drive by our official website
													</p>
												</div>
											</div>
										</div>
										<div class="coment-area">
											<ul class="we-comet">
												<li>
													<div class="comet-avatar">
														<img src="images/resources/comet-1.jpg" alt="">
													</div>
													<div class="we-comment">
														<div class="coment-head">
															<h5><a href="{{ url('time-line') }}" title="">Jason borne</a></h5>
															<span>1 year ago</span>
															<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                            <a href="" class="btn btn-mini">Hide</a>
                                                            <a href="" class="btn btn-mini">Delete</a>
														</div>
														<p>we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post</p>
													</div>
													<ul>
														<li>
															<div class="comet-avatar">
																<img src="images/resources/comet-2.jpg" alt="">
															</div>
															<div class="we-comment">
																<div class="coment-head">
																	<h5><a href="{{ url('time-line') }}" title="">alexendra dadrio</a></h5>
																	<span>1 month ago</span>
																	<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                    <a href="" class="btn btn-mini">Hide</a>
                                                                    <a href="" class="btn btn-mini">Delete</a>
																</div>
																<p>yes, really very awesome car i see the features of this car in the official website of <a href="#" title="">#Mercedes-Benz</a> and really impressed :-)</p>
															</div>
														</li>
														<li>
															<div class="comet-avatar">
																<img src="images/resources/comet-3.jpg" alt="">
															</div>
															<div class="we-comment">
																<div class="coment-head">
																	<h5><a href="{{ url('time-line') }}" title="">Olivia</a></h5>
																	<span>16 days ago</span>
																	<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                    <a href="" class="btn btn-mini">Hide</a>
                                                                    <a href="" class="btn btn-mini">Delete</a>
																</div>
																<p>i like lexus cars, lexus cars are most beautiful with the awesome features, but this car is really outstanding than lexus</p>
															</div>
														</li>
													</ul>
												</li>
												<li>
													<div class="comet-avatar">
														<img src="images/resources/comet-1.jpg" alt="">
													</div>
													<div class="we-comment">
														<div class="coment-head">
															<h5><a href="{{ url('time-line') }}" title="">Donald Trump</a></h5>
															<span>1 week ago</span>
															<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                            <a href="" class="btn btn-mini">Hide</a>
                                                            <a href="" class="btn btn-mini">Delete</a>
														</div>
														<p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel
															<i class="em em-smiley"></i>
														</p>
													</div>
												</li>
												<li>
													<a href="#" title="" class="showmore underline">more comments</a>
												</li>												
											</ul>
										</div>
									</div>                                    
								</div>
                            </div>
                            <a href="" class="btn btn-mini">Hide</a>
                                        <a href="" class="btn btn-mini">Delete</a>
                        </div>
                    </div>
                </div>
        </div>
    </main>
    <!-- End Main -->

</div>

<!-- Scripts -->
<!-- Custom JS -->
<script src="{{ asset('js/scripts.js') }}"></script>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="{{ asset('js/main.min.js') }}"></script>
		<script src="{{ asset('js/script.js') }}"></script>
		<script src="{{ asset('js/map-init.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
    <script src="{{ asset('js/js-management/jquery.min.js') }}"></script>
        <script src="{{ asset('js/js-management/jquery.ui.custom.js') }}"></script>
        <script src="{{ asset('js/js-management/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/js-management/jquery.uniform.js') }}"></script>
        <script src="{{ asset('js/js-management/select2.min.js') }}"></script>
        <script src="{{ asset('js/js-management/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('js/js-management/matrix.js') }}"></script>
        <script src="{{ asset('s/js-management/matrix.tables.js') }}"></script>
</body>
</html>
