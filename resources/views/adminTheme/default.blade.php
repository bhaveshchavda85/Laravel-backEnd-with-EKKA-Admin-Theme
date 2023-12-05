<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="DHYANA Tours & Travels - Rajkot">

	<title>Laravel Admin Panel By Bhavesh </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- GOOGLE FONTS -->
    @include('adminTheme.style')
    @yield('style')
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">

	<!--  WRAPPER  -->
	<div class="wrapper">

		<!-- LEFT MAIN SIDEBAR -->
		@include('adminTheme.sidebar')

		<!--  PAGE WRAPPER -->
		<div class="ec-page-wrapper">

			<!-- Header -->
			@include('adminTheme.header')

			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				@yield('content')
			</div> <!-- End Content Wrapper -->
            @include('adminTheme.alert')

			<!-- Footer -->
			@include('adminTheme.footer')

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->
	<!-- Common Javascript -->
@include('adminTheme.script')
@yield('script')
</body>
</html>
