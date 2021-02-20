<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Explore</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<!-- Font Awesome -->
	<!-- <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}"> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
	<style>
		body{
			font-size: 14px;
			background-color: #fff;
		}
	</style>


  </head>
  <body>
  	<div id="app">
<nav class="border-bottom bg-white">
  <div class="container" style="font-size: 15px; padding-top: 10px; padding-bottom: 5px ;">
    <img src="{{ asset('bupati/logo-kpu.png') }}" style="height: 30px;">
    <span>KPU </span>
    <span>Indonesia</span>
  </div>
</nav>

@yield('content')
	</div>
  </body>
</html>