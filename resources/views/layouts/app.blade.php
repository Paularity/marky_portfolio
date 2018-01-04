<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Marky</title>
<style>
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript,
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(uploads/Preloader_3.gif) center no-repeat #fff;
}
</style>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script>
    	//paste this code under head tag or in a seperate js file.
    	// Wait for window load
    	$(window).load(function() {
    		// Animate loader off screen
    		$(".se-pre-con").fadeOut("slow");;
    	});
    </script>
</head>
<body>
  <!-- Load page animation-->
	<div class="se-pre-con"></div>
	<!-- Ends -->

  @include('inc.navbar')
  @yield('content')

  <div class="footer">
    <h6 style="float:left;margin:1% 1%">FOLLOW US:&nbsp;&nbsp; <h1  style="float:left;margin:1% 1%"><a href="https://www.facebook.com/zapaul33"><span><i class="fa fa-facebook-square" aria-hidden="true"></i></span></a>
    <a href="https://www.twitter.com/zapaul33"><span><i class="fa fa-twitter-square" aria-hidden="true"></i></span></a></h1></h6>
    <p style="float:right;margin:1% 1% 1% 1%">Powered by CP33</p>
  </div>


</body>
</html>
