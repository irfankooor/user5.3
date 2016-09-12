<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  	<link href="{{asset('LTR/assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
  	<link href="{{asset('LTR/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
  	<link href="{{asset('LTR/assets/css/core.css')}}" rel="stylesheet" type="text/css">
  	<link href="{{asset('LTR/assets/css/components.css')}}" rel="stylesheet" type="text/css">
  	<link href="{{asset('LTR/assets/css/colors.css')}}" rel="stylesheet" type="text/css">
  	<!-- /global stylesheets -->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <nav class="navbar navbar-inverse bg-teal navbar-component" style="position: relative; z-index: 29;">
        <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="{{ url('/home') }}"><img src="{{asset('LTR/assets/images/logo_light.png')}}" alt=""></a>
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                    	<li class="dropdown dropdown-user">
  											<a class="dropdown-toggle" data-toggle="dropdown">
  												<img src="{{asset('LTR/assets/images/poto.jpg')}}" alt="">
  												<span>{{ Auth::user()->name }}</span>
  												<i class="caret"></i>
  											</a>

  											<ul class="dropdown-menu dropdown-menu-right">
  												<li><a href="{{url('/profil')}}"><i class="icon-user-plus"></i> My profile</a></li>
                          <li><a href="{{url('/list')}}"><i class="icon-user-plus"></i> Users list</a></li>
  												<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
  												<li><a href="#"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-warning pull-right">94</span></a></li>
  												<li class="divider"></li>
  												<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
  												<li><a href="{{url('/logout')}}"><i class="icon-switch2"></i> Logout</a></li>
  											</ul>
  										</li>

                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Scripts -->
    <!-- Core JS files -->
  	<script type="text/javascript" src="{{ asset('LTR/assets/js/plugins/loaders/pace.min.js')}}"></script>
  	<script type="text/javascript" src="{{ asset('LTR/assets/js/core/libraries/jquery.min.js')}}"></script>
  	<script type="text/javascript" src="{{ asset('LTR/assets/js/core/libraries/bootstrap.min.js')}}"></script>
  	<script type="text/javascript" src="{{ asset('LTR/assets/js/plugins/loaders/blockui.min.js')}}"></script>
  	<!-- /core JS files -->

  	<!-- Theme JS files -->
  	<script type="text/javascript" src="{{ asset('LTR/assets/js/plugins/media/fancybox.min.js')}}"></script>
  	<script type="text/javascript" src="{{ asset('LTR/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
  	<script type="text/javascript" src="{{ asset('LTR/assets/js/plugins/forms/selects/select2.min.js')}}"></script>
  	<script type="text/javascript" src="{{ asset('LTR/assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>

  	<script type="text/javascript" src="{{ asset('LTR/assets/js/core/app.js')}}"></script>
  	<script type="text/javascript" src="{{ asset('LTR/assets/js/pages/gallery_library.js')}}"></script>
  	<!-- /theme JS files -->
</body>
</html>
