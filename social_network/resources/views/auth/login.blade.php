<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winku Social Network Toolkit</title>
    <link rel="icon" href="{{ asset('images/fav.png') }}" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>
<div class="theme-layout">
    <div class="container-fluid pdng0">
        <div class="row merged">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="land-featurearea">
                    <div class="land-meta">
                        <h1>Winku</h1>
                        <p>
                            Winku is free to use for as long as you want with two active projects.
                        </p>
                        <div class="friend-logo">
                            <span><img src="images/wink.png" alt=""></span>
                        </div>
                        <a href="#" title="" class="folow-me">Follow Us on</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="login-reg-bg">
                    <div class="log-reg-area sign">
                        <h2 class="log-title">Login</h2>
                        <!-- Kiểm tra và hiển thị thông báo lỗi -->
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    <li>{{ $errors->first() }}</li>
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" required="required"/>
                                <label class="control-label">Email</label>
                                <i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" required="required"/>
                                <label class="control-label">Password</label>
                                <i class="mtrl-select"></i>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" checked="checked"/><i class="check-box"></i>Always Remember Me.
                                </label>
                            </div>
                            <a href="{{route('password.request')}}" title="" class="forgot-pwd">Forgot Password?</a>
                            <div class="submit-btns">
                                <button class="mtr-btn signin" type="submit"><span>Login</span></button>
                                <a href="{{ route('register') }}" class="mtr-btn signup"><span>Register</span></a>
                            </div>
                        </form>
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
