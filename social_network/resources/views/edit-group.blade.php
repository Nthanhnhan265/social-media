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
                <h1>Edit group</h1>
            </div>
                <hr>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">                          
                            <div class="widget-content nopadding">                               
                                <!-- BEGIN USER FORM -->                                
                                <form action="" method="post"
                                    class="form-horizontal"
                                    enctype="multipart/form-data">
                                    <div class="control-group">
                                        <label class="control-label">Group ID : </label>  
                                        <div class="controls">
                                            <input type="text" class="span11"
                                                placeholder="UserID"
                                                name="name" value="1" readonly/> 
                                        </div>                                     
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Group name :</label>
                                        <div class="controls">
                                            <input type="text" class="span11"
                                                placeholder="Group name"
                                                name="name" value=""/> *
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Description:</label>
                                        <div class="controls">
                                            <textarea class="span11"
                                                placeholder="Description"
                                                name="description"></textarea>
                                        </div>  
                                    </div>                                                                                                                                 
                                    <div class="control-group">                                                                                                                
                                        <div class="control-group">  
                                        <label class="control-label">Manager:</label>
                                            <div class="controls">
                                                <select id="role" name="role">
                                                    <option value="usa">John Doe</option>
                                                    <option value="canada">Ronaldo</option>                                               
                                                </select>  
                                            </div> 
                                        </div> 
                                        <div class="control-group">
                                            <label class="control-label">Status:</label>
                                            <div class="controls">
                                                <select id="role" name="role">
                                                    <option value="usa">Active</option>
                                                    <option value="canada">Deactive</option>                                               
                                                </select>  
                                            </div>  
                                        </div>                      
                                        <div class="form-actions">
                                            <button type="submit" class="btn
                                                btn-success">Update</button>
                                        </div>
                                        </div>
                                    </div>                                   
                                </form>
                                <!-- END USER FORM -->
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
