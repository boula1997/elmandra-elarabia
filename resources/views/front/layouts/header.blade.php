<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ settings()->website_title }}</title>

    <!-- Favicon -->
    <link href="{{ asset('front/img/favicon.ico') }}" rel="icon">

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

    <!-- Swiper JS - V10.2.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.css"
        integrity="sha512-pJrGHWDVOeiy4UkMtHu0fpD8oLLssFcaW0fsVXUkA1/jDLopa554Z1AZo5SKtekHnnmyat0ipiP0snKDrt0GNg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}">
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('bootstrap-5.3.1-dist/css/bootstrap.rtl.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style_ar.css') }}">
    @else
        <!-- Customized Bootstrap Stylesheet -->
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    @endif

    {{-- toastr --}}

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body class="'sc5'">

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search popup start-->
    {{-- <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div> --}}
    <!-- search popup end-->
    {{-- <div class="body-overlay" id="body-overlay"></div> --}}

    <!-- navbar start -->
    <!-- Header Start -->
    <div class="container-fluid nav-section bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="{{ route('front.home') }}"
                    class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <img class="logo" src="{{ asset(settings()->logo) }}" alt="img">
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-secondary d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2 rotate"></i>
                            <a class="mb-0" href="mailto:{{contacts('email')[0]->contact }}">{{contacts('email')[0]->contact }} </a>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2 rotate"></i>
                            <a class="mb-0"  href="tel:{{contacts('phone')[0]->contact }}">{{ contacts('phone')[0]->contact }} </a>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
                            @foreach (contacts('social') as $contact)
                                <a href="{{ $contact->contact }}"
                                    target="__blank" class="btn btn-primary btn-square rounded-circle me-2"> <i
                                        class="{{ $contact->icon }}" aria-hidden="true"></i></a>
                            @endforeach

                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <img class="logo" src="{{ settings()->logo }}" alt="">
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ route('front.home') }}"
                                class="nav-item nav-link {{ request()->routeIs('front.home') ? 'active' : '' }}">{{ __('general.home') }}</a>
                            <a href="{{ route('front.about') }}"
                                class="nav-item nav-link {{ request()->routeIs('front.about') ? 'active' : '' }}">{{ __('general.about') }}</a>
                            <a href="{{ route('front.products') }}"
                                class="nav-item nav-link {{ request()->routeIs('front.products') ? 'active' : '' }}">{{ __('general.products') }}</a>
                            <a href="{{ route('front.message') }}"
                                class="nav-item nav-link {{ request()->routeIs('front.message') ? 'active' : '' }}">{{ __('general.contact') }}</a>

                            <a class="nav-item nav-link d-flex flex-column" href="{{ route('front.shopping') }}">
                                <span class="bg-danger cart-count">{{ count(cart()->getItems()) }}</span>
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li class="{{ app()->getLocale() == $localeCode ? 'd-none' : '' }}">
                                    <a class="nav-item nav-link  rel="alternate" hreflang="{{ $localeCode }}"
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        <img src="{{ asset('flags/' . $localeCode . '.png') }}" class="flag"
                                            alt="KSA Flag">
                                    </a>
                                </li>
                            @endforeach

                        </div>
                        <a href="{{ route('user-registration') }}"
                            class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">{{ __('general.join_us') }}</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->
