   <style>
       .dropdown:hover .dropdown-menu {
           display: none !important;
       }
   </style>

   <!-- navbar start -->
   <!-- Header Start -->
   <div style="height: 10vh">
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
                               {{-- <a href="{{ route('front.products') }}"
                                    class="nav-item nav-link text-nowrap {{ request()->routeIs('front.products') ? 'active' : '' }}">{{ __('general.products') }}</a> --}}
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


                               {{-- @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li class="{{ app()->getLocale() == $localeCode ? 'd-none' : '' }}">
                                        <a class="nav-item nav-link text-nowrap  rel="alternate" hreflang="{{ $localeCode }}"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            <img src="{{ asset('flags/' . $localeCode . '.png') }}" class="flag"
                                                alt="KSA Flag">
                                        </a>
                                    </li>
                                @endforeach --}}

                           </div>
                       </div>
                   </nav>
               </div>
           </div>
       </div>
   </div>
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
