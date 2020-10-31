<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>FreeLance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

</head>

<body class="loading" data-layout-config='{"darkMode":false}'>

<!-- NAVBAR START -->
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!-- NAVBAR END -->
<section class="mt-5">
    <div class="">
        @yield('content')
    </div>
</section>

<!-- START FOOTER -->
<footer class="bg-dark py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="assets/images/logo.png" alt="" class="logo-dark" height="18" />
                <p class="text-white-50 mt-4">Hyper makes it easier to build better websites with
                    <br> great speed. Save hundreds of hours of design
                    <br> and development by using it.</p>

                <ul class="social-list list-inline mt-3">
                    <li class="list-inline-item text-center">
                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                    </li>
                    <li class="list-inline-item text-center">
                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                    </li>
                    <li class="list-inline-item text-center">
                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                    </li>
                    <li class="list-inline-item text-center">
                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                    </li>
                </ul>

            </div>

            <div class="col-lg-2 mt-3 mt-lg-0">
                <h5 class="text-white">Company</h5>

                <ul class="list-unstyled pl-0 mb-0 mt-3">
                    <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">About Us</a></li>
                    <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Documentation</a></li>
                    <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Blog</a></li>
                    <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Affiliate Program</a></li>
                </ul>

            </div>

            <div class="col-lg-2 mt-3 mt-lg-0">
                <h5 class="text-white">Apps</h5>

                <ul class="list-unstyled pl-0 mb-0 mt-3">
                    <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Ecommerce Pages</a></li>
                    <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Email</a></li>
                    <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Social Feed</a></li>
                    <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Projects</a></li>
                    <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Tasks Management</a></li>
                </ul>
            </div>

            <div class="col-lg-2 mt-3 mt-lg-0">
                <h5 class="text-white">Discover</h5>

                <ul class="list-unstyled pl-0 mb-0 mt-3">
                    <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Help Center</a></li>
                    <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Our Products</a></li>
                    <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Privacy</a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="mt-5">
                    <p class="text-white-50 mt-4 text-center mb-0">© 2018 - 2020 Hyper. Design and coded by
                        Coderthemes</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<!-- bundle -->
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/app.min.js"></script>

</body>


</html>
