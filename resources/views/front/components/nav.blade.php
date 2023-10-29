    <!-- navbar start -->
    <!-- Header Start -->
    <div class="container-fluid nav-section bg-dark px-0 fixed-top">
        <div class="row gx-0">
            <div class="col-lg-12 bg-dark d-none d-lg-block">
                <a href="{{ route('front.home') }}"
                    class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <img class="logo" src="{{ asset(settings()->logo) }}" alt="img">
                </a>
            </div>
        </div>
        <div class="row gx-0">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark  p-lg-0 px-lg-5 px-3">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <img class="logo" src="{{ settings()->logo }}" alt="">
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ route('front.home') }}"
                                class="nav-item nav-link {{ request()->routeIs('front.home') ? 'active' : '' }}">{{ __('general.home') }}</a>
                            <a href="{{ route('front.about') }}"
                                class="nav-item nav-link {{ request()->routeIs('front.about') ? 'active' : '' }}">{{ __('general.about') }}</a>
                            <a href="{{ route('front.products') }}"
                                class="nav-item nav-link {{ request()->routeIs('front.products') ? 'active' : '' }}">{{ __('general.products') }}</a>
                            <a href="{{ route('front.message') }}"
                                class="nav-item nav-link {{ request()->routeIs('front.message') ? 'active' : '' }}">{{ __('general.contact') }}</a>

                            @foreach (categories() as $category)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">{{ $category->title }}</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                                        @foreach ($category->subcategories as $subcategory)
                                            <a class="dropdown-item" href="#">{{ $category->title }}</a>
                                        @endforeach
                                    </div>
                                </li>
                            @endforeach

                            <a class="nav-item nav-link" href="{{ route('front.shopping') }}">
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
