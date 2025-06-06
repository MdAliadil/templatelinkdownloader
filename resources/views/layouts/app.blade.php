<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FlipDeck</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('css/typography.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    @stack('style');
</head>

<body class="sidebar-main-active right-column-fixed">
    <!-- loader Start -->
    {{--  <div id="loading">
        <div id="loading-center">
        </div>
    </div>  --}}
    <!-- loader END -->
     @include('layouts.navigation')
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
       @include('layouts.sidebar')
        <!-- TOP Nav Bar -->
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                {{--  header heere  --}}
            @include('layouts.header')
            </div>
        </div>
        <!-- TOP Nav Bar END -->

        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper END -->
    <!-- Footer -->
   @include('layouts.footer')
    <!-- Footer END -->
 
 @include('layouts.links')
 @stack('script')
</body>


</html>
