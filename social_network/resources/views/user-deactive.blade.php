<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Winku Social Network Toolkit</title>
    <link rel="icon" href="{{ url('images/fav.png') }}" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	<div class="container-fluid pdng0">
		<div class="row">
			<div class="col-lg-12">
				<div class="error-page">
					<div class="bg-image" style="background-image: url(images/resources/404.jpg)"></div>
					<div class="error-meta">
						<h1>whoops!</h1>
						<span>Your account is currently locked. Please contact your administrator to unlock it.</span>
						<a href="{{ url ('login') }}" title="" data-ripple="">Go Back</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<script src="{{ asset('js/main.min.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
