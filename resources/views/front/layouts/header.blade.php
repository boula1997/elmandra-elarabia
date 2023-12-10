<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon"  href="{{ settings()->tab }}" type="image/x-icon">
    <title>{{ settings()->website_title }}</title>


    <!-- Favicon -->
    <link  href="{{ settings()->tab }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.xyz/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('front/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    {{-- <link rel=icon href="assets/img/favicon.webp" sizes="20x20" type="image/png"> --}}
    <link rel="icon" type="image/x-icon" href="{{ settings()->tab }}">
    <!-- Stylesheet -->

    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('lightbox-dist/css/lightbox.min.css') }}">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <!-- Swiper JS - V10.2.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.css"
        integrity="sha512-pJrGHWDVOeiy4UkMtHu0fpD8oLLssFcaW0fsVXUkA1/jDLopa554Z1AZo5SKtekHnnmyat0ipiP0snKDrt0GNg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

     <!-- bootstrap css -->
     <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/vendors/bootstrap.css') }}">

     <!-- wow css -->
     <link rel="stylesheet" href="{{ asset('template/assets/css/animate.min.css') }}" />
 
     <!-- font-awesome css -->
     <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/vendors/font-awesome.css') }}">
 
     <!-- feather icon css -->
     <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/vendors/feather-icon.css') }}">
 
     <!-- slick css -->
     <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/vendors/slick/slick.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/vendors/slick/slick-theme.css') }}">
 
     <!-- Iconly css -->
     <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/bulk-style.css') }}">
 
    {{-- @if (app()->getLocale() == 'ar') --}}
        {{-- <link rel="stylesheet" href="{{ asset('bootstrap-5.3.1-dist/css/bootstrap.rtl.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style_ar.css') }}"> --}}
    {{-- @else --}}
        <!-- Customized Bootstrap Stylesheet -->
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
            <!-- Template css -->
         <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/style.css') }}">
        <!-- Template Stylesheet -->
        {{-- <link rel="stylesheet" href="{{ asset('front/css/style.css') }}"> --}}
    {{-- @endif --}}

    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}">

    {{-- toastr --}}

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        {{-- google api keys --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMn2Lb6WoSOsXKtMoITtHMNsErkkz_w5k"></script>
</head>

<body class="sc5">

    @include('admin.components.success')
    @include('admin.components.errors')
    @include('front.components.preloader')

    @include('front.components.nav')
