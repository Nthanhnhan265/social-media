<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>

<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
<link rel="icon" href="{{ asset('images/fav.png') }}" type="image/png" sizes="16x16">   
<link rel="stylesheet" href="{{asset('css/main.min.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/color.css')}}">
<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{asset('css/styles_admin.css')}}">
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
                <a href="#">
                    <span class="material-icons-outlined"></span> Users management
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="{{ asset('group-management') }}">
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
    <div class="container-fluid">
                <hr>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"><a
                                        href="add_manu.html"> <i class="icon-plus"></i>
                                    </a></span>
                                <h5>Posts Management</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <table class="table table-bordered
                                    table-striped">
                                    <thead>
                                        <tr>
                                            <th>Post ID</th>
                                            <th>Owner</th>
                                            <th>Content</th>
                                            <th>Created at</th>
                                            <th>Update at</th>   
                                            <th>Action</th>                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">                                         
                                            <td>1</td>                                       
                                            <td>John Doe</td>                                                                                        
                                            <td style="width: 100px">AAAAAAAAAAAAAAAA<br>AAAAAAAAAAAAAAAAAAAAA</td>  
                                            <td>20/4/2024</td>  
                                            <td>20/4/2024</td>                                       
                                            <td>
                                                <a href="{{ asset('post-detail') }}" class="btn
                                                    btn-success btn-mini">Detail</a>
                                                <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="">                                         
                                            <td>1</td>                                       
                                            <td>John Doe</td>                                                                                        
                                            <td style="width: 100px">AAAAAAAAAAAAAAAA<br>AAAAAAAAAAAAAAAAAAAAA</td>  
                                            <td>20/4/2024</td>  
                                            <td>20/4/2024</td>                                       
                                            <td>
                                                <a href="edit-user" class="btn
                                                    btn-success btn-mini">Detail</a>
                                                <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="">                                         
                                            <td>1</td>                                       
                                            <td>John Doe</td>                                                                                        
                                            <td style="width: 100px">AAAAAAAAAAAAAAAA<br>AAAAAAAAAAAAAAAAAAAAA</td>  
                                            <td>20/4/2024</td>  
                                            <td>20/4/2024</td>                                       
                                            <td>
                                                <a href="edit-user" class="btn
                                                    btn-success btn-mini">Detail</a>
                                                <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="">                                         
                                            <td>1</td>                                       
                                            <td>John Doe</td>                                                                                        
                                            <td style="width: 100px">AAAAAAAAAAAAAAAA<br>AAAAAAAAAAAAAAAAAAAAA</td>  
                                            <td>20/4/2024</td>  
                                            <td>20/4/2024</td>                                       
                                            <td>
                                                <a href="edit-user" class="btn
                                                    btn-success btn-mini">Detail</a>
                                                <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="">                                         
                                            <td>1</td>                                       
                                            <td>John Doe</td>                                                                                        
                                            <td style="width: 100px">AAAAAAAAAAAAAAAA<br>AAAAAAAAAAAAAAAAAAAAA</td>  
                                            <td>20/4/2024</td>  
                                            <td>20/4/2024</td>                                       
                                            <td>
                                                <a href="edit-user" class="btn
                                                    btn-success btn-mini">Detail</a>
                                                <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row" style="margin-left: 18px;">
                                    <ul class="pagination">
                                        <li><a href="#" class="prev">&laquo; Previous</a></li>
                                        <li><a href="#" class="active">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#" class="next">Next &raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
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
</body>
</html>
