
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>{{ $title }} | {{ config('sximo')['cnf_appname'] }}</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/images/'.$setting->favicon )}}">

		<!-- all css here -->

		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.css">
		<link rel="stylesheet" href="{{ asset('assets') }}/css/owl.transitions.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/meanmenu.min.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="{{ asset('assets') }}/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('assets') }}/css/flaticon.css">
		<link rel="stylesheet" href="{{ asset('assets') }}/css/icon.css">
		<!-- magnific css -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/magnific.min.css">
		<!-- venobox css -->
		<link rel="stylesheet" href="{{ asset('assets') }}/css/venobox.css">
		<!-- style css -->
		<link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css">
		<!-- modernizr css -->
		<script src="{{ asset('assets') }}/js/vendor/modernizr-2.8.3.min.js"></script>
	</head>