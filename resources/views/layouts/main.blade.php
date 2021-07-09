<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Smart Traders</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">

		<!-- all css here -->

		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{ asset('css/owl.transitions.css')}}">
       <!-- Animate css -->
        <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css')}}">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}">
		<link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
		<!-- magnific css -->
        <link rel="stylesheet" href="{{ asset('css/magnific.min.css')}}">
		<!-- style css -->
		<link rel="stylesheet" href="{{ asset('CSS/style.css')}}">
		<!-- responsive css -->
		<link rel="stylesheet" href="{{ asset('css/responsive.css')}}">

		<!-- modernizr css -->
		<script src="{{ asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
	</head>
		<body>
        <div id="preloader"></div>
        @include('shared.menu')
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        @yield('content')
        @include('shared.footer')
        		
		<!-- all js here -->

		<!-- jquery latest version -->
		<script src="{{ asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
		<!-- bootstrap js -->
		<script src="{{ asset('js/bootstrap.min.js')}}"></script>
		<!-- owl.carousel js -->
		<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
		  <!-- stellar js -->
        <script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
		<!-- magnific js -->
        <script src="{{ asset('js/magnific.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{ asset('js/wow.min.js')}}"></script>
        <!-- meanmenu js -->
        <script src="{{ asset('js/jquery.meanmenu.js')}}"></script>
		<!-- Form validator js -->
		<script src="{{ asset('js/form-validator.min.js')}}"></script>
		<!-- plugins js -->
		<script src="{{ asset('js/plugins.js')}}"></script>
		<!-- main js -->
		<script src="{{ asset('js/main.js')}}"></script>
        <!-- Chart JS -->
        <script src="{{ asset('js/Chart.bundle.min.js')}}"></script>
        <script src="{{ asset('js/Chart.js')}}"></script>
	</body>
</html>