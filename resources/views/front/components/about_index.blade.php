         <!-- Vision section start -->
         <section class="container">
             <div class="row">
                 <h2 class="text-center mb-3">{{ page('about-index')->title }}</h2>
                 <div class="col-md-4 text-center d-flex justify-center align-items-center">

                     <img class="rounded float-right w-100"
                         src="{{ asset(isset(page('about-index')->images[0]->url) ? page('about-index')->images[0]->url : asset('default.jpg')) }}"
                         alt="">
                 </div>
                 <div class="col-md-8 p-5">
                     <div class="title title-flex">
                         <div>
                             <h2>{{ page('about-index')->subtitle }}</h2>
                             <div class="description">{!! page('about-index')->description !!}</div>
                         </div>
                     </div>
                     <div class="d-flex p-0 m-0 justify-between" dir="rtl">
                         <button onclick="location.href = '#';"
                             class="btn btn-animation mt-xxl-4 mt-2 home-button  me-2  mx-5 ">{{ __('general.app_store') }}
                             <i class="fab fa-apple me-2  icon"></i>
                         </button>
                         <button onclick="location.href = '#';"
                             class="btn btn-animation mt-xxl-4 mt-2 home-button  me-2  mx-5 ">{{ __('general.google_play') }}
                             <i class="fab fa-google-play me-2  icon"></i>
                         </button>
                         <button onclick="location.href = '{{ route('front.shopping_now') }}';"
                             class="btn btn-animation mt-xxl-4 mt-2 home-button  me-2  mx-5 ">{{ __('general.order_now') }}
                             <i class="fas fa-shopping-cart me-2  icon"></i>
                         </button>
                     </div>
                 </div>
             </div>

             </div>
         </section>
         <!-- Vision section end -->
         <!-- Fresh Vegetable Section Start -->
         {{-- <section class="fresh-vegetable-section section-lg-space">
        <div class="container-fluid-lg">
            <div class="row gx-xl-5 gy-xl-0 g-3 ratio_148_1">
                <div class="col-xl-6 col-12">
                    <div class="row g-sm-4 g-2">
                        <div class="col-6">
                            <div class="fresh-image-2">
                                <div>
                                    <img src="{{asset(isset(page('about')->images[0]->url) ? page('about')->images[0]->url : asset('default.jpg'))}}"
                                        class="bg-img blur-up lazyload" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="fresh-image">
                                <div>
                                    <img src="{{asset(isset(page('about')->images[1]->url) ? page('about')->images[1]->url : asset('default.jpg'))}}"
                                        class="bg-img blur-up lazyload" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-12">
                    <div class="fresh-contain p-center-left">
                        <div>
                            <div class="review-title">
                                <h4>{{ page('about')->title }}</h4>
                                <h2>{{ page('about')->subtitle }}</h2>
                            </div>

                            <div class="delivery-list">
                                <p class="text-content">{!! page('about')->description !!}</p>

                                <ul class="delivery-box">
                                    <li>
                                        <div class="delivery-box">
                                            <div class="delivery-icon">
                                                <img src="{{asset('template/assets/svg/3/delivery.svg')}}" class="blur-up lazyload" alt="">
                                            </div>

                                            <div class="delivery-detail">
                                                <h5 class="text">{{ __('general.free_delivery') }}</h5>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="delivery-box">
                                            <div class="delivery-icon">
                                                <img src="{{asset('template/assets/svg/3/leaf.svg')}}" class="blur-up lazyload" alt="">
                                            </div>

                                            <div class="delivery-detail">
                                                <h5 class="text">{{ __('general.daily_mega') }}</h5>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="delivery-box">
                                            <div class="delivery-icon">
                                                <img src="{{ asset('template/assets/svg/market.svg') }}" class="blur-up lazyload" alt="">
                                            </div>

                                            <div class="delivery-detail">
                                                <h5 class="text">{{ __('general.best_price') }}</h5>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="delivery-box">
                                            <div class="delivery-icon">
                                                <img src="{{ asset('template/assets/svg/product.svg') }}" class="blur-up lazyload" alt="">
                                            </div>

                                            <div class="delivery-detail">
                                                <h5 class="text">{{ __('general.every_amazing') }}</h5>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
         <!-- Fresh Vegetable Section End -->

         <!-- Client Section Start -->
         {{-- <section class="client-section section-lg-space">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="about-us-title text-center">
                        <h4>What We Do</h4>
                        <h2 class="center">We are Trusted by Clients</h2>
                    </div>

                    <div class="slider-3_1 product-wrapper">
                        <div>
                            <div class="clint-contain">
                                <div class="client-icon">
                                    <img src="{{asset('template/assets/svg/3/work.svg')}}" class="blur-up lazyload" alt="">
                                </div>
                                <h2>10</h2>
                                <h4>Business Years</h4>
                                <p>A coffee shop is a small business that sells coffee, pastries, and other morning
                                    goods. There are many different types of coffee shops around the world.</p>
                            </div>
                        </div>

                        <div>
                            <div class="clint-contain">
                                <div class="client-icon">
                                    <img src="{{asset('template/assets/svg/3/buy.svg')}}" class="blur-up lazyload" alt="">
                                </div>
                                <h2>80 K+</h2>
                                <h4>Products Sales</h4>
                                <p>Some coffee shops have a seating area, while some just have a spot to order and then
                                    go somewhere else to sit down. The coffee shop that I am going to.</p>
                            </div>
                        </div>

                        <div>
                            <div class="clint-contain">
                                <div class="client-icon">
                                    <img src="{{asset('template/assets/svg/3/user.svg')}}" class="blur-up lazyload" alt="">
                                </div>
                                <h2>90%</h2>
                                <h4>Happy Customers</h4>
                                <p>My goal for this coffee shop is to be able to get a coffee and get on with my day.
                                    It's a Thursday morning and I am rushing between meetings.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
        <!-- Client Section End -->
   


   
