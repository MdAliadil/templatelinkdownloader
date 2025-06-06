<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | FinDeck</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<section class="sign-in-page">
    <div class="container p-0">
        <div class="row no-gutters height-self-center">
            <div class="col-sm-12 align-self-center bg-primary rounded">
                <div class="row m-0">
                    <div class="col-md-5 bg-white p-4">
                        <h1 class="mb-4 text-center">Sign in</h1>

                        @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                        </form>
                    </div>

                    <div class="col-md-7 text-white text-center d-flex align-items-center justify-content-center bg-dark">
                        <div class="owl-carousel owl-theme w-75">
                            <div class="item">
                                <img src="{{ asset('images/templates/t2.jpg') }}" class="img-fluid mb-3" alt="slide">
                                <h4>Make You Own Templates</h4>
                             
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/templates/t3.jpg') }}" class="img-fluid mb-3" alt="slide">
                                <h4>Connect with the world</h4>
                               
                            </div>
                            <div class="item">
                                <img src="{{ asset('images//templates/t1.jpg') }}" class="img-fluid mb-3" alt="slide">
                                <h4>Create new events</h4>
                               
                            </div>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JS Files -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 4000,
            items: 1
        });
    });
</script>
</body>
</html>


























{{--  <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login | FinDeck</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>


    <!-- Sign in Start -->
    <section class="sign-in-page">
        <div id="container-inside">
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
        </div>
        <div class="container p-0">
            <div class="row no-gutters height-self-center">
                <div class="col-sm-12 align-self-center bg-primary rounded">
                    <div class="row m-0">
                        <div class="col-md-5 bg-white sign-in-page-data">
                            <div class="sign-in-from">
                                <h1 class="mb-0 text-center">Sign in</h1>
                                <p class="text-center text-dark">Enter your email and password to access the panel.</p>

                                <!-- Session Status -->
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <!-- Validation Errors -->
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('login') }}" class="mt-4">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control mb-0" id="email" name="email"
                                            value="{{ old('email') }}" placeholder="Enter email" required autofocus
                                            autocomplete="username">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <a href="{{ route('password.request') }}" class="float-right">Forgot
                                            password?</a>
                                        <input type="password" class="form-control mb-0" id="password" name="password"
                                            placeholder="Password" required autocomplete="current-password">
                                    </div>

                                    <div class="d-inline-block w-100">
                                        <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                            <input type="checkbox" class="custom-control-input" id="remember"
                                                name="remember">
                                            <label class="custom-control-label" for="remember">Remember Me</label>
                                        </div>
                                    </div>

                                    <div class="sign-info text-center">
                                        <button type="submit" class="btn btn-primary d-block w-100 mb-2">Sign
                                            in</button>
                                        <span class="text-dark dark-color d-inline-block line-height-2">
                                            Don t have an account? <a href="{{ route('register') }}">Sign up</a>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-7 text-center sign-in-page-image">
                            <div class="sign-in-detail text-white">
                                <a class="sign-in-logo mb-5" href="#">
                                    <img src="{{ asset('images/logo-full.png') }}" class="img-fluid" alt="logo">
                                </a>
                                <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false"
                                    data-dots="true" data-items="1">
                                    <div class="item">
                                        <img src="{{ asset('images/t2.jpg') }}" class="img-fluid mb-4" alt="login">
                                        <h4 class="mb-1 text-white">Find new friends</h4>
                                        <p>Connect with people easily through our platform.</p>
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/t3.jpg') }}" class="img-fluid mb-4" alt="login">
                                        <h4 class="mb-1 text-white">Connect with the world</h4>
                                        <p>Join a global network with just one login.</p>
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/login/1.png') }}" class="img-fluid mb-4"
                                            alt="login">
                                        <h4 class="mb-1 text-white">Create new events</h4>
                                        <p>Manage and organize events with ease.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JS Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                items: 1
            });
        });
    </script>

</body>

</html>  --}}
