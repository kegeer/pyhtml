<!DOCTYPE html>
<html lang="en-US" class="no-js">
	<head>

		<title>谱元--肠道微生态行业引领者</title>

		<!-- META DATA -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">

		@include('layouts.styles')
		<!-- JS -->
		<script type="text/javascript" src="js/modernizr.js"></script>


	</head>
	<body class="smooth-scroller">

		<div id="debuger"></div>

		<!-- START PRELOADER -->
		<div id="preloader">
			<div id="loading-animation"></div>
		</div>
		<!-- END PRELOADER -->

		<div class="main-container">

			<div id="top"></div>

			@include('layouts.header')

			<!-- Page Header -->
			@yield('content')
		  @include('layouts.footer')

		</div>

		@include('layouts.scripts')

	</body>
</html>
