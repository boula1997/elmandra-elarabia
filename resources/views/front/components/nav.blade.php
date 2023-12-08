

   <!-- Header Start -->
   <header class="pb-md-4 pb-0">
       <div class="header-top">
           <div class="container-fluid-lg">
               <div class="row">
                   <div class="col-xxl-3 d-xxl-block d-none">
                       <div class="top-left-header">
                           <i class="iconly-Location icli text-white"></i>
                           <span class="text-white">{{ settings()->translate(app()->getLocale())->address }}</span>
                       </div>
                   </div>

                   <div class="col-xxl-6 col-lg-9 d-lg-block d-none">
                       <div class="header-offer">
                           <div class="notification-slider text-right text-white">
                               <div>
                                   <div class="timer-notification text-white">
                                       <h6><strong class="mx-1 text-white">{{ __('general.welcome_to') }}
                                               {{ settings()->title }}</strong>{{ __('general.wrap_new') }}<strong
                                               class="mx-1 text-white">{{ __('general.new_code') }} <span class="text-white">{{ settings()->title }}</span>24
                                           </strong>

                                       </h6>
                                   </div>
                               </div>

                               <div>
                                   <div class="timer-notification text-white">
                                       <h6>{{ __('general.something_you_love') }}
                                           <a href="{{ route('front.show-products') }}"
                                               class="text-white">{{ __('general.buy_now') }}</a>
                                       </h6>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-3">
                       <ul class="about-list right-nav-about">
                           <li class="right-nav-list">
                               <div class="dropdown theme-form-select">
                                   <button class="btn dropdown-toggle" type="button" id="select-language"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                       <img src="{{ asset('flags/' . app()->getLocale() . '.png') }}"
                                           class="img-fluid blur-up lazyload" alt="">
                                       <span>{{ app()->getLocale() == 'en' ? 'English' : 'العربية' }}</span>
                                   </button>

                                   <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="select-language">

                                       @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                           <li>
                                               <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                   <img src="{{ asset('flags/' . $localeCode . '.png') }}"
                                                       class="img-fluid blur-up lazyload" alt="">
                                                   <span>{{ $localeCode == 'en' ? 'English' : 'العربية' }}</span>
                                               </a>
                                           </li>
                                       @endforeach
                                   </ul>
                               </div>
                           </li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>

       <div class="top-nav top-header sticky-header">
           <div class="container-fluid-lg">
               <div class="row">
                   <div class="col-12">
                       <div class="navbar-top">
                           <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button"
                               data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                               <span class="navbar-toggler-icon">
                                   <i class="fa-solid fa-bars"></i>
                               </span>
                           </button>
                           <a href="{{ route('front.home') }}" class="web-logo nav-logo">
                               <img src="{{ settings()->logo }}" class="img-fluid blur-up lazyload logo"
                                   alt="">
                           </a>

                           <div class="middle-box {{ request()->routeIs('front.shopping_now') ? '' : 'd-none'  }}">
                               <div class="location-box">
                                   <button class="btn location-button" data-bs-toggle="modal"
                                       data-bs-target="#locationModal">
                                       <span class="location-arrow">
                                           <i data-feather="map-pin"></i>
                                       </span>
                                       <span class="locat-name">{{ __('general.your_location') }}</span>
                                       <i class="fa-solid fa-angle-down"></i>
                                   </button>
                               </div>

                              
                                    <div class="search-box {{ request()->routeIs('front.shopping_now') ? '' : 'd-none'  }}">
                                        <div class="input-group">
                                            <input type="search" class="form-control"
                                                placeholder="{{ __('general.iam_searching') }}"
                                                aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <button class="btn" type="button" id="button-addon2">
                                                <i data-feather="search"></i>
                                            </button>
                                        </div>
                                    </div>
                           </div>

                           <div class="rightside-box">
                               <div class="search-full ">
                                   <div class="input-group">
                                       <span class="input-group-text">
                                           <i data-feather="search" class="font-light"></i>
                                       </span>
                                       <input type="text" class="form-control search-type"
                                           placeholder="Search here..">
                                       <span class="input-group-text close-search">
                                           <i data-feather="x" class="font-light"></i>
                                       </span>
                                   </div>
                               </div>
                               <ul class="right-side-menu">
                                   <li class="right-side">
                                       <div class="delivery-login-box">
                                           <div class="delivery-icon">
                                               <div class="search-box">
                                                   <i data-feather="search"></i>
                                               </div>
                                           </div>
                                       </div>
                                   </li>
                                   <li class="right-side">
                                       <a href="tel:{{contacts('phone')[0]->contact }}" target="__blank" class="delivery-login-box">
                                           <div class="delivery-icon">
                                               <i class="cursor-pointer" style="color: #bba011" data-feather="phone-call"></i>
                                           </div>
                                           <div class="delivery-detail">
                                               <h6>24/7 Delivery</h6>
                                               <h5>+91 888 104 2340</h5>
                                           </div>
                                       </a>
                                   </li>
                                   <li class="right-side">
                                       <a href="https://wa.me/{{contacts('whatsapp')[0]->contact }}" target="__blank"
                                           class="btn p-0 position-relative header-wishlist">
                                           <i class="fa-brands fa-whatsapp fa-xl" style="color: green"></i>
                                       </a>
                                   </li>
                                   <li class="right-side {{ request()->routeIs('front.shopping_now') ? '' : 'd-none'  }}">
                                       <div class="onhover-dropdown header-badge">
                                           <a href="{{ route('front.shopping') }}">
                                               <button type="button"
                                                   class="btn p-0 position-relative header-wishlist">
                                                   <i data-feather="shopping-cart"></i>
                                                   <span
                                                       class="position-absolute top-0 start-100 translate-middle badge cart-count">{{ count(cart()->getItems()) }}
                                                       <span class="visually-hidden">unread messages</span>
                                                   </span>
                                               </button>
                                           </a>

                                       </div>
                                   </li>

                                   @if (!auth('web')->user())
                                       <li class="right-side onhover-dropdown">
                                           <div class="delivery-login-box">
                                               <div class="delivery-icon">
                                                   <i data-feather="user"></i>
                                               </div>
                                           </div>

                                           <div class="onhover-div onhover-div-login">
                                               <ul class="user-box-name">
                                                   <li class="product-box-contain">
                                                       <i></i>
                                                       <a
                                                           href="{{ route('user.login') }}">{{ __('general.login') }}</a>
                                                   </li>

                                                   <li class="product-box-contain">
                                                       <a
                                                           href="{{ route('user.register') }}">{{ __('general.register') }}</a>
                                                   </li>
                                               </ul>
                                           </div>
                                       </li>
                                   @else
                                       <li class="right-side onhover-dropdown">
                                           <div class="delivery-login-box">
                                               <div class="delivery-icon">
                                                   <i class="cursor-pointer" data-feather="user"></i>
                                               </div>
                                           </div>

                                           <div class="onhover-div onhover-div-login">
                                               <ul class="user-box-name">
                                                   <li class="product-box-contain">
                                                       <i></i>
                                                       <a
                                                           href="{{ route('show_profile') }}">{{ __('general.profile') }}</a>
                                                   </li>

                                                   <li class="product-box-contain">
                                                       <a
                                                           href="{{ route('show.orders') }}">{{ __('general.orders') }}</a>
                                                   </li>

                                                   <form action="{{ route('logout') }}" method="POST">
                                                       @csrf
                                                       <button class="btn p-0 close-button text-content"
                                                           type="submit">@lang('general.logout')</button>
                                                   </form>
                                               </ul>
                                           </div>
                                       </li>
                                   @endif


                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <div class="container-fluid-lg">
           <div class="row">
               <div class="col-12">
                   <div class="header-nav">
                       <div class="header-nav-left">
                           <button class="dropdown-category">
                               <i data-feather="align-left"></i>
                               <span>{{ __('general.categories') }}</span>
                           </button>
                           <div class="category-dropdown">
                               <div class="category-title">
                                   <h5>Categories</h5>
                                   <button type="button" class="btn p-0 close-button text-content">
                                       <i class="fa-solid fa-xmark"></i>
                                   </button>
                               </div>
                               <ul class="category-list">

                                   @foreach (categories() as $category)
                                       <li class="onhover-category-list">
                                           <a href="{{ route('front.category',$category->id) }}" class="category-name">
                                               <img src="{{ asset($category->image) }}" alt="">
                                               <h6>{{ $category->title }}</h6>
                                               <i class="fa-solid fa-angle-{{ app()->getLocale() =='ar'?'left':'right' }}"></i>
                                           </a>

                                           <div class="onhover-category-box">

                                               <div class="list-1">
                                                   <div class="category-title-box">
                                                       <h5>{{ __('general.subcategories') }}</h5>
                                                   </div>
                                                   @foreach ($category->subcategories as $subcategory)
                                                       <ul>
                                                           <li>
                                                               <a
                                                                   href="{{ route('front.products', $subcategory->id) }}">{{ $subcategory->title }}</a>
                                                           </li>
                                                       </ul>
                                                   @endforeach
                                               </div>
                                           </div>
                                       </li>
                                   @endforeach

                               </ul>
                           </div>
                       </div>

                       <div class="header-nav-middle">
                           <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                               <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                   <div class="offcanvas-body">
                                       <ul class="navbar-nav">
                                           <li class="nav-item dropdown">
                                               <a class="nav-link  {{ request()->routeIs('front.home') ? 'active' : '' }}"
                                                   href="{{ route('front.home') }}">{{ __('general.home') }}</a>

                                           </li>
                                           <li class="nav-item dropdown">
                                               <a class="nav-link  {{ request()->routeIs('front.shopping_now') ? 'active' : '' }}"
                                                   href="{{ route('front.shopping_now') }}">{{ __('general.shop_now') }}</a>
                                           </li>

                                           <li class="nav-item dropdown">
                                               <a class="nav-link dropdown-toggle {{ request()->routeIs('front.about') ? 'active' : '' }}"
                                                   href="{{ route('front.about') }}">{{ __('general.about') }}</a>

                                           </li>

                                          <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle {{ request()->routeIs('front.message') ? 'active' : '' }}" href="{{ route('front.message') }}"
                                              > {{ __('general.contact_us') }}</a>
                                           </li>

                                           <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle {{ request()->routeIs('front.message') ? 'active' : '' }}" href="{{ route('front.message') }}"
                                              > {{ __('general.offers') }}</a>
                                           </li>

                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="header-nav-right">
                           <button class="btn deal-button" data-bs-toggle="modal" data-bs-target="#deal-box">
                               <i data-feather="zap"></i>
                               <span>عروض اليوم</span>
                           </button>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </header>
   <!-- Header End -->

   <!-- mobile fix menu start -->
   <div class="mobile-menu d-md-none d-block mobile-cart">
       <ul>
           <li class="active">
               <a href="{{ route('front.home') }}">
                   <i class="iconly-Home icli"></i>
                   <span>{{ __('general.home') }}</span>
               </a>
           </li>

           <li class="mobile-category">
               <a href="#">
                   <i class="iconly-Category icli js-link"></i>
                   <span>{{ __('general.category') }}</span>
               </a>
           </li>

           <li>
               <a href="{{ route('front.wishlist') }}" class="notifi-wishlist">
                   <i class="iconly-Heart icli"></i>
                   <span>{{ __('general.mywish') }}</span>
               </a>
           </li>

           <li>
               <a href="{{ route('front.shopping') }}">
                   <i class="iconly-Bag-2 icli fly-cate"></i>
                   <span>{{ __('general.cart') }}</span>
               </a>
           </li>
       </ul>
   </div>
   <!-- mobile fix menu end -->



   @push('js')
       <script>
           $(document).ready(function() {

               $('.dropdown-toggle').hover(function() {
                   console.log("hover");
                   // alert("true");
                   $(this).addClass('show');
                   $(this).next().addClass('show');
               }, function() {
                   $(this).next().removeClass('show');
               });
               $('.dropdown-menu').hover(function() {
                   console.log("hover");
                   // alert("true");
                   $(this).addClass('show');
               }, function() {
                   $(this).removeClass('show');
               });
           });
       </script>
   @endpush
