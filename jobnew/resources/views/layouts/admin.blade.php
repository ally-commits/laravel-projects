<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    {{--<link rel="icon" type="image/png" href="assets/img/favicon.ico">--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->

    <link href="{{asset('css/admin/bootstrap.min.css')}}" rel="stylesheet"/>



    <link href="{{asset('css/admin/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>


    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

    <link href="{{asset('css/admin/pe-icon-7-stroke.css')}}" rel="stylesheet"/>

    <link rel="stylesheet" href="{{asset('css/admin/toastr.min.css')}}">

    @yield('styles')

    <style>
        .barmenu{
            background-color: rgba(0,0,0,0.7);
            margin: 5px 15px;
            color: inherit;
            width: 90%;
            border-radius: 8px;
        }
        .barmenu li a:hover{
            color: #fff;
        }
        .count{
            padding: 3px;
            border-radius: 50px;
            background-color: red;
            color: #fff;
            width: 7px;
            height: 7px;
        }
    </style>
    @yield('styles')
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple">

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{route('index')}}" class="simple-text">
                    Home
                </a>
            </div>

            <ul class="nav">
                @if(Auth::user()->role->role=='admin')
                    <li>
                        <a href="{{route('dashboard')}}">
                            <i class="pe-7s-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('users')}}">
                            <i class="pe-7s-graph"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('skills')}}">
                            <i class="pe-7s-gleam"></i>
                            <p>Skills</p>
                        </a>
                    </li>
                    @elseif(Auth::user()->role->role=='employee')
                    <li>
                        <a href="">
                            <i class="pe-7s-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="pe-7s-graph"></i>
                            <p>My Company</p>
                        </a>
                    </li>
                    @else
                    <li>
                        <a href="{{route('dashboard')}}">
                            <i class="pe-7s-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('profile')}}">
                            <i class="pe-7s-graph"></i>
                            <p>My profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('education')}}">
                            <i class="pe-7s-notebook"></i>
                            <p>Education</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="pe-7s-gleam"></i>
                            <p>My Skills</p>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                                <p class="hidden-lg hidden-md">Admin Dashboard</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <p>
                                    {{Auth::user()->name}}
                                    <b class="caret"></b>
                                </p>

                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="">Dev Aloy</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

<script src="{{asset('js/admin/jquery.3.2.1.min.js')}}"></script>

<script src="{{asset('js/admin/bootstrap.min.js')}}"></script>

{{--<script src="{{asset('assets/js/chartist.min.js')}}"></script>--}}

{{--<script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>--}}

<script src="{{asset('js/admin/light-bootstrap-dashboard.js')}}"></script>

<script src="{{asset('js/admin/toastr.min.js')}}"></script>
<script>
    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}");
    @endif
    @if(Session::has('error'))
    toastr.error("{{Session::get('error')}}");
    @endif
    @if(Session::has('info'))
    toastr.info("{{Session::get('info')}}");
    @endif
</script>
@yield('scripts')


</html>
