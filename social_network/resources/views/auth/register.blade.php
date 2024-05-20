<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
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
                <div class="login-reg-bg show">
                    <div class="log-reg-area reg">
                        <h2 class="log-title">Register</h2>
                        <form method="POST" action="{{ route('register') }}" id="registerForm">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="first_name" required="required" value="{{ old('first_name') }}" />
                                <label class="control-label">First Name</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" name="last_name" required="required" value="{{ old('last_name') }}" />
                                <label class="control-label">Last Name</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" required="required" value="{{ old('email') }}" />
                                <label class="control-label">Email</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" required="required" id="password" />
                                <label class="control-label">Password</label><i class="mtrl-select"></i>
                                <span id="passwordError" class="error-message"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password_confirmation" required="required" id="password_confirmation" />
                                <label class="control-label">Confirm Password</label><i class="mtrl-select"></i>
                                <span id="passwordConfirmationError" class="error-message"></span>
                            </div>
                            <div class="form-group">
                                <input type="date" name="DOB" required="required" value="{{ old('birthdate') }}" />
                                <label class="control-label">Birthdate</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">
                                <select name="gender" required="required">
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>
                                    <option value="2">Other</option>
                                </select>
                                <label class="control-label">Gender</label><i class="mtrl-select"></i>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" required="required" /><i class="check-box"></i>Accept Terms & Conditions?
                                </label>
                            </div>
                            <a href="{{ route('login') }}" title="" class="already-have">Already have an account</a>
                            <div class="submit-btns">
                                <button class="mtr-btn signin" type="submit"><span>Register</span></button>
                                <a href="{{ route('login') }}" class="mtr-btn signin"><span>Login</span></a>
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
<script>
    document.getElementById('registerForm').addEventListener('submit', function(event) {
        var password = document.getElementById('password').value;
        var passwordConfirmation = document.getElementById('password_confirmation').value;
        var passwordError = document.getElementById('passwordError');
        var passwordConfirmationError = document.getElementById('passwordConfirmationError');

        passwordError.textContent = '';
        passwordConfirmationError.textContent = '';

        if (password.length < 8) {
            passwordError.textContent = 'Password must be at least 8 characters long';
            event.preventDefault();
        } else if (password !== passwordConfirmation) {
            passwordError.textContent = 'Passwords do not match';
            passwordConfirmationError.textContent = 'Passwords do not match';
            event.preventDefault();
        }
    });
</script>
</body>
</html>
