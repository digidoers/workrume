<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-12 top_col">
                        <div class="logo_mobile text-center">
                            <a href="#"><img src="/img/logo.png" alt=""></a>
                        </div>
                        <div class="right_menu">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </button>
                            @guest
                                @else

                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img class="profile_img" src="{{ url('/').'/img/author_default.png'}}">
                                            <span class="me">Andrew Tie</span>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a href="{{ route('logout') }}" class="dropdown-item"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }} </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                            <a href="{{ route('change-password.edit') }}" class="dropdown-item">
                                                Change Password
                                            </a>
                                            <a href="{{ route('achievements.index') }}" class="dropdown-item">
                                                Achievement
                                            </a>
                                            <a href="{{ route('education.index') }}" class="dropdown-item">
                                                Education
                                            </a>
                                        </div>
                                    </li>   
                                </ul>
                            @endguest
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-xl navbar-light p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        @guest
							<ul class="navbar-nav mr-auto justify-content-between align-items-start w-100">
								<li class="nav-item">
									<a class="nav-link" href="#">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Job</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Profile</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Messages</a>
								</li>
								<li class="nav-item navbar-brand">
									<a class="nav-link" href="#"><img src="/img/logo.png" alt=""></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Connections</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Notifications</a>
								</li>
                                <li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}">Signin</a>
								</li>
							</ul>
					    @else
							<ul class="navbar-nav mr-auto justify-content-between align-items-start w-100">
								<li class="nav-item">
									<a class="nav-link" href="{{ route('home') }}">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Job</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ route('user.profile') }}">Profile</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Messages</a>
								</li>
								<li class="nav-item navbar-brand">
									<a class="nav-link" href="#"><img src="/img/logo.png" alt=""></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Connections</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Notifications</a>
								</li>
								<li class="nav-item hidden-m">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="profile_img" src="{{ url('/').'/img/author_default.png'}}">
                                                <span class="me">Andrew Tie</span>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a href="{{ route('logout') }}" class="dropdown-item"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }} </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                                <a href="{{ route('change-password.edit') }}" class="dropdown-item">
                                                    Change Password
                                                </a>
                                                <a href="{{ route('achievements.index') }}" class="dropdown-item">
                                                    Achievement
                                                </a>
                                                <a href="{{ route('education.index') }}" class="dropdown-item">
                                                    Education
                                                </a>
                                            </div>
                                        </li>   
                                    </ul>
								</li>
							</ul>
						@endguest	
                    </div>
                </nav>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-12">
                        <a class="footer_logo" href="#"><img src="/img/footer-logo.png" alt=""></a>
                        <div class="social_icon">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7 col-12 d-flex justify-content-end">
                        <ul class="footer_menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Job</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Connections</a></li>
                            <li><a href="#">Messages</a></li>
                            <li><a href="#">Notifications</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            © 2021 Dryden Labs, LLC. All Rights Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    @yield('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<script>
$(document).ready(function() {
    $('#interest').multiselect({
        nonSelectedText: 'Select Your Interest'
    });
});
</script>
</body>
</html>
