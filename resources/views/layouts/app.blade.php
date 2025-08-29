<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->

        <!-- Meta -->
		<meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="canonical" href="https://www.bootstrap.gallery/">
		<meta property="og:url" content="https://www.bootstrap.gallery">
		<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
		<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
		<meta property="og:type" content="Website">
		<meta property="og:site_name" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="assets/images/favicon.svg" />

        <!-- Fonts
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        Scripts 
        @vite(['resources/css/app.css', 'resources/js/app.js'])-->

        <!-- *************
			************ CSS Files *************
		************* -->
		<link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css" />
		<link rel="stylesheet" href="assets/css/main.min.css" />

		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Scrollbar CSS -->
		<link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />

		<!-- Toastify CSS -->
		<link rel="stylesheet" href="assets/vendor/toastify/toastify.css" />

        <!-- *************
			************ JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/moment.min.js"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Overlay Scroll JS -->
		<script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
		<script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

		<!-- Toastify JS -->
		<script src="assets/vendor/toastify/toastify.js"></script>
		<script src="assets/vendor/toastify/custom.js"></script>

		<!-- Apex Charts -->
		<script src="assets/vendor/apex/apexcharts.min.js"></script>
		<script src="assets/vendor/apex/custom/dash1/visitors.js"></script>
		<script src="assets/vendor/apex/custom/dash1/sales.js"></script>
		<script src="assets/vendor/apex/custom/dash1/sparkline.js"></script>
		<script src="assets/vendor/apex/custom/dash1/tasks.js"></script>
		<script src="assets/vendor/apex/custom/dash1/income.js"></script>

		<!-- Custom JS files -->
		<script src="assets/js/custom.js"></script>
		<script src="assets/js/todays-date.js"></script>
        
    </head>
        <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>

                @include('layouts.navbar')

            <div id="sidebar-wrapper" class="main-sidebar">
                @include('layouts.sidebar')
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>{{ $section_header ?? '' }}</h1>
                    </div>
                    @yield('content')
                </section>
            </div>
            @include('layouts.footer')
        </div>
    </body>
</html>
