<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app"> 

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="footer text-white bg-img bg-fixed" data-overlay="8">
 
      <div class="container">
        <div class="row gap-y">

          <div class="col-md-6 text-center text-md-left">
            <small class="opacity-70">© 2019 Gs Group. All rights reserved.</small>
          </div>

          <div class="col-md-6 text-center text-md-right">
            <div class="social">
              <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
              <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
              <a class="social-youtube" href="#"><i class="fa fa-youtube"></i></a>
              <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </footer><!-- /.footer -->
    </div>
</body>
</html>
