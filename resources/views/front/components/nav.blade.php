   {{-- <style>
       .dropdown:hover .dropdown-menu {
           display: none !important;
       }
   </style> --}}

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
                           <div class="notification-slider">
                               <div>
                                   <div class="timer-notification">
                                       <h6><strong class="me-1">{{ __('general.welcome_to') }}
                                               {{ settings()->title }}</strong>{{ __('general.wrap_new') }}<strong
                                               class="ms-1">{{ __('general.new_code') }} {{ settings()->title }}24
                                           </strong>

                                       </h6>
                                   </div>
                               </div>

                               <div>
                                   <div class="timer-notification">
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
                                       {{-- <li>
                                        <a class="dropdown-item" href="javascript:void(0)" id="english">
                                            <img src="{{ asset('template/assets/images/country/united-kingdom.png')}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                            <span>English</span>
                                        </a>
                                    </li> --}}
                                       {{-- <li>
                                        <a class="dropdown-item" href="javascript:void(0)" id="france">
                                            <img src="{{ asset('template/assets/images/country/germany.png')}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                            <span>Germany</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)" id="chinese">
                                            <img src="{{ asset('template/assets/images/country/turkish.png')}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                            <span>Turki</span>
                                        </a>
                                    </li> --}}
                                   </ul>
                               </div>
                           </li>
                           {{-- <li class="right-nav-list">
                            <div class="dropdown theme-form-select">
                                <button class="btn dropdown-toggle" type="button" id="select-dollar"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>USD</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end sm-dropdown-menu"
                                    aria-labelledby="select-dollar">
                                    <li>
                                        <a class="dropdown-item" id="aud" href="javascript:void(0)">AUD</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" id="eur" href="javascript:void(0)">EUR</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" id="cny" href="javascript:void(0)">CNY</a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
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

                           <div class="middle-box">
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

                               <div class="search-box">
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
                               <div class="search-full">
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
                                       <a href="{{ route('front.message') }}" class="delivery-login-box">
                                           <div class="delivery-icon">
                                               <i data-feather="phone-call"></i>
                                           </div>
                                           <div class="delivery-detail">
                                               <h6>24/7 Delivery</h6>
                                               <h5>+91 888 104 2340</h5>
                                           </div>
                                       </a>
                                   </li>
                                   <li class="right-side">
                                       <a href="{{ route('front.wishlist') }}"
                                           class="btn p-0 position-relative header-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                                   <li class="right-side">
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
                                               {{-- <div class="delivery-detail">
                                            <h6>Hello,</h6>
                                            <h5>My Account</h5>
                                        </div> --}}
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

                                                   {{-- <li class="product-box-contain">
                                                <a href="{{ route('user.forget') }}">{{ __('general.forget') }}</a>
                                            </li> --}}
                                               </ul>
                                           </div>
                                       </li>
                                   @else
                                       <li class="right-side onhover-dropdown">
                                           <div class="delivery-login-box">
                                               <div class="delivery-icon">
                                                   <i data-feather="user"></i>
                                               </div>
                                               {{-- <div class="delivery-detail">
                                            <h6>Hello,</h6>
                                            <h5>My Account</h5>
                                        </div> --}}
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
                                           <a href="javascript:void(0)" class="category-name">
                                               <img src="{{ asset($category->image) }}" alt="">
                                               <h6>{{ $category->title }}</h6>
                                               <i class="fa-solid fa-angle-right"></i>
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
                                                           {{-- <li>
                                                            <a href="javascript:void(0)">Cucumber & Capsicum</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">Leafy Vegetables</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">Root Vegetables</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">Beans & Okra</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">Cabbage & Cauliflower</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">Gourd & Drumstick</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">Specialty</a>
                                                        </li> --}}
                                                       </ul>
                                                   @endforeach
                                               </div>

                                               {{-- <div class="list-2">
                                                <div class="category-title-box">
                                                    <h5>Fresh Fruit</h5>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0)">Banana & Papaya</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">Kiwi, Citrus Fruit</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">Apples & Pomegranate</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">Seasonal Fruits</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">Mangoes</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">Fruit Baskets</a>
                                                    </li>
                                                </ul>
                                            </div> --}}

                                           </div>
                                       </li>
                                   @endforeach
                                   {{-- <li class="onhover-category-list">
                                    <a href="javascript:void(0)" class="category-name">
                                        <img src="{{ asset('template/assets/svg/1/vegetable.svg')}}" alt="">
                                        <h6>Vegetables & Fruit</h6>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>

                                    <div>iv class="onhover-category-box">

                                        <div class="list-1">
                                            <div class="category-title-box">
                                                <h5>Organic Vegetables</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Potato & Tomato</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Cucumber & Capsicum</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Leafy Vegetables</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Root Vegetables</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Beans & Okra</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Cabbage & Cauliflower</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Gourd & Drumstick</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Specialty</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="list-2">
                                            <div class="category-title-box">
                                                <h5>Fresh Fruit</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Banana & Papaya</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Kiwi, Citrus Fruit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Apples & Pomegranate</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Seasonal Fruits</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Mangoes</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Fruit Baskets</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div
                                </li>

                                <li class="onhover-category-list">
                                    <a href="javascript:void(0)" class="category-name">
                                        <img src="{{ asset('template/assets/svg/1/cup.svg')}}" alt="">
                                        <h6>Beverages</h6>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>

                                    <div class="onhover-category-box w-100">
                                        <div class="list-1">
                                            <div class="category-title-box">
                                                <h5>Energy & Soft Drinks</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Soda & Cocktail Mix</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Soda & Cocktail Mix</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Sports & Energy Drinks</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Non Alcoholic Drinks</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Packaged Water</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Spring Water</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Flavoured Water</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="onhover-category-list">
                                    <a href="javascript:void(0)" class="category-name">
                                        <img src="{{ asset('template/assets/svg/1/meats.svg')}}" alt="">
                                        <h6>Meats & Seafood</h6>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>

                                    <div class="onhover-category-box">
                                        <div class="list-1">
                                            <div class="category-title-box">
                                                <h5>Meat</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Fresh Meat</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Frozen Meat</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Marinated Meat</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Fresh & Frozen Meat</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="list-2">
                                            <div class="category-title-box">
                                                <h5>Seafood</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Fresh Water Fish</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Dry Fish</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Frozen Fish & Seafood</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Marine Water Fish</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Canned Seafood</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Prawans & Shrimps</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Other Seafood</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="onhover-category-list">
                                    <a href="javascript:void(0)" class="category-name">
                                        <img src="{{ asset('template/assets/svg/1/breakfast.svg')}}" alt="">
                                        <h6>Breakfast & Dairy</h6>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>

                                    <div class="onhover-category-box">
                                        <div class="list-1">
                                            <div class="category-title-box">
                                                <h5>Breakfast Cereals</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Oats & Porridge</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Kids Cereal</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Muesli</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Flakes</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Granola & Cereal Bars</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Instant Noodles</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Pasta & Macaroni</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Frozen Non-Veg Snacks</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="list-2">
                                            <div class="category-title-box">
                                                <h5>Dairy</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Milk</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Curd</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Paneer, Tofu & Cream</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Butter & Margarine</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Condensed, Powdered Milk</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Buttermilk & Lassi</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Yogurt & Shrikhand</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Flavoured, Soya Milk</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="onhover-category-list">
                                    <a href="javascript:void(0)" class="category-name">
                                        <img src="{{ asset('template/assets/svg/1/frozen.svg')}}" alt="">
                                        <h6>Frozen Foods</h6>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>

                                    <div class="onhover-category-box w-100">
                                        <div class="list-1">
                                            <div class="category-title-box">
                                                <h5>Noodle, Pasta</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Instant Noodles</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Hakka Noodles</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Cup Noodles</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Vermicelli</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Instant Pasta</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="onhover-category-list">
                                    <a href="javascript:void(0)" class="category-name">
                                        <img src="{{ asset('template/assets/svg/1/biscuit.svg')}}" alt="">
                                        <h6>Biscuits & Snacks</h6>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>

                                    <div class="onhover-category-box">
                                        <div class="list-1">
                                            <div class="category-title-box">
                                                <h5>Biscuits & Cookies</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Salted Biscuits</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Marie, Health, Digestive</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Cream Biscuits & Wafers</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Glucose & Milk Biscuits</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Cookies</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="list-2">
                                            <div class="category-title-box">
                                                <h5>Bakery Snacks</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Bread Sticks & Lavash</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Cheese & Garlic Bread</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Puffs, Patties, Sandwiches</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Breadcrumbs & Croutons</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="onhover-category-list">
                                    <a href="javascript:void(0)" class="category-name">
                                        <img src="{{ asset('template/assets/svg/1/grocery.svg')}}" alt="">
                                        <h6>Grocery & Staples</h6>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>

                                    <div class="onhover-category-box">
                                        <div class="list-1">
                                            <div class="category-title-box">
                                                <h5>Grocery</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Lemon, Ginger & Garlic</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Indian & Exotic Herbs</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Vegetables</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Fruits</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="list-2">
                                            <div class="category-title-box">
                                                <h5>Organic Staples</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Dry Fruits</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Dals & Pulses</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Millet & Flours</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Sugar, Jaggery</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Masalas & Spices</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Rice, Other Rice</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Flours</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Edible Oil, Ghee</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li> --}}
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

                                               {{-- <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="shop-category-slider.html">Shop
                                                        Category Slider</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-category.html">Shop
                                                        Category Sidebar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-banner.html">Shop Banner</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-left-sidebar.html">Shop Left
                                                        Sidebar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-list.html">Shop List</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-right-sidebar.html">Shop
                                                        Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-top-filter.html">Shop Top
                                                        Filter</a>
                                                </li>
                                            </ul> --}}
                                           </li>

                                           <li class="nav-item dropdown">
                                               <a class="nav-link dropdown-toggle {{ request()->routeIs('front.show-products') ? 'active' : '' }}"
                                                   href="{{ route('front.show-products') }}"
                                                   data-bs-toggle="dropdown">{{ __('general.products') }}</a>

                                               {{-- <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="product-4-image.html">Product
                                                        4 Image</a>
                                                </li>
                                                <li class="sub-dropdown-hover">
                                                    <a href="javascript:void(0)" class="dropdown-item">Product
                                                        Thumbnail</a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="product-left-thumbnail.html">Left Thumbnail</a>
                                                        </li>

                                                        <li>
                                                            <a href="product-right-thumbnail.html">Right
                                                                Thumbnail</a>
                                                        </li>

                                                        <li>
                                                            <a href="product-bottom-thumbnail.html">Bottom
                                                                Thumbnail</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="product-bundle.html" class="dropdown-item">Product
                                                        Bundle</a>
                                                </li>
                                                <li>
                                                    <a href="product-slider.html" class="dropdown-item">Product
                                                        Slider</a>
                                                </li>
                                                <li>
                                                    <a href="product-sticky.html" class="dropdown-item">Product
                                                        Sticky</a>
                                                </li>
                                            </ul> --}}
                                           </li>
                                           <li class="nav-item dropdown">
                                               <a class="nav-link dropdown-toggle {{ request()->routeIs('front.message') ? 'active' : '' }}"
                                                   href="{{ route('front.message') }}"
                                                   data-bs-toggle="dropdown">{{ __('general.contact') }}</a>

                                               {{-- <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="product-4-image.html">Product
                                                        4 Image</a>
                                                </li>
                                                <li class="sub-dropdown-hover">
                                                    <a href="javascript:void(0)" class="dropdown-item">Product
                                                        Thumbnail</a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="product-left-thumbnail.html">Left Thumbnail</a>
                                                        </li>

                                                        <li>
                                                            <a href="product-right-thumbnail.html">Right
                                                                Thumbnail</a>
                                                        </li>

                                                        <li>
                                                            <a href="product-bottom-thumbnail.html">Bottom
                                                                Thumbnail</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="product-bundle.html" class="dropdown-item">Product
                                                        Bundle</a>
                                                </li>
                                                <li>
                                                    <a href="product-slider.html" class="dropdown-item">Product
                                                        Slider</a>
                                                </li>
                                                <li>
                                                    <a href="product-sticky.html" class="dropdown-item">Product
                                                        Sticky</a>
                                                </li>
                                            </ul> --}}
                                           </li>

                                           <li class="nav-item dropdown">
                                               <a class="nav-link dropdown-toggle {{ request()->routeIs('front.team') ? 'active' : '' }}"
                                                   href="{{ route('front.team') }}"
                                                   data-bs-toggle="dropdown">{{ __('general.team') }}</a>

                                               {{-- <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="shop-category-slider.html">Shop
                                                        Category Slider</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-category.html">Shop
                                                        Category Sidebar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-banner.html">Shop Banner</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-left-sidebar.html">Shop Left
                                                        Sidebar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-list.html">Shop List</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-right-sidebar.html">Shop
                                                        Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-top-filter.html">Shop Top
                                                        Filter</a>
                                                </li>
                                            </ul> --}}
                                           </li>
                                           <li class="nav-item dropdown">
                                               <a class="nav-link dropdown-toggle {{ request()->routeIs('front.testimonial') ? 'active' : '' }}"
                                                   href="{{ route('front.testimonial') }}"
                                                   data-bs-toggle="dropdown">{{ __('general.testimonials') }}</a>

                                               {{-- <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="shop-category-slider.html">Shop
                                                        Category Slider</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-category.html">Shop
                                                        Category Sidebar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-banner.html">Shop Banner</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-left-sidebar.html">Shop Left
                                                        Sidebar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-list.html">Shop List</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-right-sidebar.html">Shop
                                                        Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-top-filter.html">Shop Top
                                                        Filter</a>
                                                </li>
                                            </ul> --}}
                                           </li>

                                           {{-- <li class="nav-item dropdown dropdown-mega">
                                            <a class="nav-link dropdown-toggle ps-xl-2 ps-0"
                                                href="javascript:void(0)" data-bs-toggle="dropdown">Mega Menu</a>

                                            <div class="dropdown-menu dropdown-menu-2">
                                                <div class="row">
                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">Daily Vegetables</h5>
                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Beans
                                                            &
                                                            Brinjals</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Broccoli
                                                            & Cauliflower</a>

                                                        <a href="shop-left-sidebar.html"
                                                            class="dropdown-item">Chilies,
                                                            Garlic</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Vegetables & Salads</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Gourd,
                                                            Cucumber</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Herbs
                                                            &
                                                            Sprouts</a>

                                                        <a href="demo-personal-portfolio.html"
                                                            class="dropdown-item">Lettuce
                                                            & Leafy</a>
                                                    </div>

                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">Baby Tender</h5>
                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Beans
                                                            &
                                                            Brinjals</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Broccoli
                                                            & Cauliflower</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Chilies,
                                                            Garlic</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Vegetables & Salads</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Gourd,
                                                            Cucumber</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Potatoes
                                                            & Tomatoes</a>

                                                        <a href="shop-left-sidebar.html" class="dropdown-item">Peas
                                                            &
                                                            Corn</a>
                                                    </div>

                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">Exotic Vegetables</h5>
                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Asparagus
                                                            & Artichokes</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Avocados
                                                            & Peppers</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Broccoli
                                                            & Zucchini</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Celery,
                                                            Fennel & Leeks</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Chilies &
                                                            Lime</a>
                                                    </div>

                                                    <div class="dropdown-column dropdown-column-img col-3"></div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">Blog</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="blog-detail.html">Blog Detail</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="blog-list.html">Blog List</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown new-nav-item">
                                            <label class="new-dropdown">New</label>
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">Pages</a>
                                            <ul class="dropdown-menu">
                                                <li class="sub-dropdown-hover">
                                                    <a class="dropdown-item" href="javascript:void(0)">Email
                                                        Template <span class="new-text"><i
                                                                class="fa-solid fa-bolt-lightning"></i></span></a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a
                                                                href="{{ asset('template/email-templete/abandonment-email.html')}}">Abandonment</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ asset('template/email-templete/offer-template.html')}}">Offer
                                                                Template</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ asset('template/email-templete/order-success.html')}}">Order
                                                                Success</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ asset('template/email-templete/reset-password.html')}}">Reset
                                                                Password</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ asset('template/email-templete/welcome.html')}}">Welcome
                                                                template</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="sub-dropdown-hover">
                                                    <a class="dropdown-item" href="javascript:void(0)">Invoice
                                                        Template <span class="new-text"><i
                                                                class="fa-solid fa-bolt-lightning"></i></span></a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="{{ asset('template/invoice/invoice-1.html')}}">Invoice 1</a>
                                                        </li>

                                                        <li>
                                                            <a href="{{ asset('template/invoice/invoice-2.html')}}">Invoice 2</a>
                                                        </li>

                                                        <li>
                                                            <a href="{{ asset('template/invoice/invoice-3.html')}}">Invoice 3</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="404.html">404</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="about-us.html">About Us</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="cart.html">Cart</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="contact-us.html">Contact</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="checkout.html">Checkout</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="compare.html">Compare</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="faq.html">Faq</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="order-success.html">Order
                                                        Success</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="order-tracking.html">Order
                                                        Tracking</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="otp.html">OTP</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="search.html">Search</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="user-dashboard.html">User
                                                        Dashboard</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="wishlist.html">Wishlist</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">Seller</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="seller-become.html">Become a
                                                        Seller</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-dashboard.html">Seller
                                                        Dashboard</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-detail.html">Seller
                                                        Detail</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-detail-2.html">Seller
                                                        Detail 2</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-grid.html">Seller Grid</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-grid-2.html">Seller Grid
                                                        2</a>
                                                </li>
                                            </ul>
                                        </li> --}}
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

           {{-- <li>
                <a href="search.html" class="search-box">
                    <i class="iconly-Search icli"></i>
                    <span>{{ __('general.search') }}</span>
                </a>
            </li> --}}

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


   <!-- navbar start -->
   <!-- Header Start -->
   {{-- <div style="height: 10vh">
       <div class="container-fluid nav-section bg-dark px-0 position-fixed">
           <div class="row gx-0">
           </div>
           <div class="row gx-0">
               <div class="col-lg-8">
                   <nav
                       class="navbar navbar-expand-lg bg-dark navbar-dark  p-lg-0 px-lg-5 px-3 d-flex justify-content-between">
                       <a href="{{ route('front.home') }}" class="navbar-brand d-block">
                           <img class="logo" src="{{ settings()->logo }}" alt="">
                       </a>
                       <a class="mx-5" href="{{ route('front.shopping') }}">
                           <span
                               class="bg-danger cart-count px-1 ms-2 d-flex align-items-center justify-content-center text-white"
                               style="border-radius: 50%; font-size:small;">{{ count(cart()->getItems()) }}</span>
                           <i class="fas fa-shopping-cart fa-lg"></i>
                       </a>
                       <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                           data-bs-target="#navbarCollapse">
                           <span class="navbar-toggler-icon"></span>
                       </button>
                       <div class="collapse navbar-collapse justify-content-between">
                           <div class="navbar-nav mr-auto py-0">
                               <a href="{{ route('front.home') }}"
                                   class="nav-item nav-link text-nowrap {{ request()->routeIs('front.home') ? 'active' : '' }}">{{ __('general.home') }}</a>
                               <a href="{{ route('front.about') }}"
                                   class="nav-item nav-link text-nowrap {{ request()->routeIs('front.about') ? 'active' : '' }}">{{ __('general.about') }}</a>
                               <a href="{{ route('front.message') }}"
                                   class="nav-item nav-link text-nowrap {{ request()->routeIs('front.message') ? 'active' : '' }}">{{ __('general.contact') }}</a>

                               @foreach (categories() as $category)
                                   <li cla ss="nav-item dropdown">
                                       <a class="nav-link text-nowrap dropdown-toggle position-relative" href="#"
                                           id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">{{ $category->title }}</a>
                                       <div class="dropdown-menu position-absolute" aria-labelledby="dropdownId">
                                           @foreach ($category->subcategories as $subcategory)
                                               <a class="dropdown-item text-wrap"
                                                   href="{{ route('front.products', $subcategory->id) }}"><span>{{ $subcategory->title }}</span></a>
                                           @endforeach
                                       </div>
                                   </li>
                               @endforeach

                               <div>
                                   <a class="nav-link text-nowrap dropdown-toggle position-relative" href="#"
                                       id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">{{ app()->getLocale() == 'en' ? 'English' : 'العربية' }}</a>
                                   <div class="dropdown-menu position-absolute" aria-labelledby="dropdownId">
                                       @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                           <a class="dropdown-item text-wrap text-center" rel="alternate"
                                               hreflang="{{ $localeCode }}"
                                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                               <span
                                                   class="text-center">{{ $localeCode == 'en' ? 'English' : 'العربية' }}</span>
                                           </a>
                                       @endforeach


                                   </div>

                               </div>

                               @if (!auth('web')->user())
                               <div class="d-flex justify-content-center align-items-center">
                                   <a href="{{ route('user.login-view') }}"
                                       class="nav-link  btn btn-primary py-md-1 px-md-4 d-lg-block join text-nowrap">{{ __('general.login') }}</a>
                               </div>
                               @else
                                   <div>
                                       <a class="nav-link text-nowrap dropdown-toggle position-relative" href="#"
                                           id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">{{ __('general.account') }}</a>
                                       <div class="dropdown-menu position-absolute" aria-labelledby="dropdownId">

                                           <a class="dropdown-item text-wrap text-center" rel="alternate"
                                                href="{{ route('show_profile') }}">
                                               <span class="text-center">{{ __('general.profile') }}</span>
                                           </a>
                                           <a class="dropdown-item text-wrap text-center" rel="alternate"
                                               href="{{ route('show.orders') }}">
                                               <span class="text-center">{{ __('general.orders') }}</span>
                                           </a>

                                           <form action="{{ route('logout') }}" method="POST">
                                               @csrf
                                               <button class="btn btn-transparent"
                                                   type="submit">@lang('general.logout')</button>
                                           </form>



                                       </div>

                                   </div>
                               @endif


                           </div>
                       </div>
                   </nav>
               </div>
           </div>
       </div>
   </div> --}}
   <!-- Header End -->


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
