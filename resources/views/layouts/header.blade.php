<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Meta -->
        <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
        <meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="assets/images/fix/webicon2.jpg" />

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('assets/fonts/bootstrap/bootstrap-icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/overlay-scroll/OverlayScrollbars.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/toastify/toastify.css') }}" />

		<!-- CSS Manual -->
		<link rel="stylesheet" href="{{ asset('assets/css/ly/dashb.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/ly/cus.css') }}" />

		<!-- JS Manual -->
		<script src="assets/js/ly/pg.js"></script>

        <!-- CSS Files -->
		<link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css" />
		<link rel="stylesheet" href="assets/css/main.min.css" />

		<!-- Custom JS files -->
		<script src="assets/js/custom.js"></script>
		<script src="assets/js/todays-date.js"></script>
		<script src="{{ asset('js/app.js') }}" defer></script>
        
	<style>
		.page-wrapper {
			position: relative;
			min-height: 100vh;
		}

		.app-footer {
			position: fixed;
			bottom: 0;
			left: 0;
			right: 0;
			background-color: #f8f9fa;
			border-top: 1px solid #dee2e6;
			color: #6c757d;
			text-align: right;
		}
	</style>
    </head>
