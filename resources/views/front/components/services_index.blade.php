         <!-- Vision section start -->
         <section>
             <div class="row">

                 <div class="col-md-12">
                     <div class="title title-flex d-flex justify-content-center">
                         <div>
                             <h2>{{ page('service-index')->title }}</h2>
                             <h2>{{ page('service-index')->subtitle }}</h2>
                             <p class="text-justify">{!! page('service-index')->description !!}</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3 text-center">
                     <div class="d-flex mt-5">
                         <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                             style="width: 64px; height: 60px;">
                             <i class="{{ $counters[0]->icon }} fs-4 text-white"></i>
                         </div>
                         <h2 class="mx-5 mt-3">{{ $counters[0]->title }}</h2>
                     </div>
                     <div class="d-flex mt-5">
                         <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                             style="width: 64px; height: 60px;">
                             <i class="{{ $counters[1]->icon }} fs-4 text-white"></i>
                         </div>
                         <h2 class="mx-5 mt-3">{{ $counters[1]->title }}</h2>
                     </div>
                     <div class="d-flex mt-5">
                         <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                             style="width: 64px; height: 60px;">
                             <i class="{{ $counters[2]->icon }} fs-4 text-white"></i>
                         </div>
                         <h2 class="mx-5 mt-3">{{ $counters[2]->title }}</h2>
                     </div>

                 </div>
                 <div class="col-md-6 text-center">
                     <img class="rounded float-right" style="width: 50%; height: 80%"
                         src="{{ asset(isset(page('service-index')->images[0]->url) ? page('service-index')->images[0]->url : asset('default.jpg')) }}"
                         alt="">
                 </div>
                 <div class="col-md-3 text-center">
                    <div class="d-flex mt-5">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 64px; height: 60px;">
                            <i class="{{ $counters[3]->icon }} fs-4 text-white"></i>
                        </div>
                        <h2 class="mx-5 mt-3">{{ $counters[3]->title }}</h2>
                    </div>
                    <div class="d-flex mt-5">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 64px; height: 60px;">
                            <i class="{{ $counters[4]->icon }} fs-4 text-white"></i>
                        </div>
                        <h2 class="mx-5 mt-3">{{ $counters[4]->title }}</h2>
                    </div>
                    <div class="d-flex mt-5">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 64px; height: 60px;">
                            <i class="{{ $counters[5]->icon }} fs-4 text-white"></i>
                        </div>
                        <h2 class="mx-5 mt-3">{{ $counters[5]->title }}</h2>
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





         <!-- Blog Section Start -->
         {{-- <section class="section-lg-space">
        <div class="container-fluid-lg">
            <div class="about-us-title text-center">
                <h4 class="text-content">Our Blog</h4>
                <h2 class="center">Our Latest Blog</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-5 ratio_87">
                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <div class="blog-image">
                                        <a href="blog-detail.html" class="rounded-3">
                                            <img src="{{asset('template/assets/images/veg-2/blog/1.jpg')}}" class="bg-img blur-up lazyload"
                                                alt="">
                                        </a>
                                    </div>
                                </div>

                                <a href="blog-detail.html" class="blog-detail d-block">
                                    <h6>Farmart</h6>
                                    <h5>Fresh Meat Saugage</h5>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <div class="blog-image">
                                        <a href="blog-detail.html" class="rounded-3">
                                            <img src="{{asset('template/assets/images/veg-2/blog/2.jpg')}}" class="bg-img blur-up lazyload"
                                                alt="">
                                        </a>
                                    </div>
                                </div>

                                <a href="blog-detail.html" class="blog-detail d-block">
                                    <h6>Soda Brand</h6>
                                    <h5>Soda 500ml - 20% OFF</h5>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <div class="blog-image">
                                        <a href="blog-detail.html" class="rounded-3">
                                            <img src="{{asset('template/assets/images/veg-2/blog/3.jpg')}}" class="bg-img blur-up lazyload"
                                                alt="">
                                        </a>
                                    </div>
                                </div>

                                <a href="blog-detail.html" class="blog-detail d-block">
                                    <h6>Beer Brand</h6>
                                    <h5>Soda 500ml - 20% OFF</h5>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <div class="blog-image">
                                        <a href="blog-detail.html" class="rounded-3">
                                            <img src="{{asset('template/assets/images/veg-2/blog/4.jpg')}}" class="bg-img blur-up lazyload"
                                                alt="">
                                        </a>
                                    </div>
                                </div>

                                <a href="blog-detail.html" class="blog-detail d-block">
                                    <h6>Beer Brand</h6>
                                    <h5>Fresh Beer -30% OFF</h5>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="blog-box">
                                <div class="blog-image">
                                    <a href="blog-detail.html" class="rounded-3">
                                        <img src="{{asset('template/assets/images/veg-2/blog/5.jpg')}}" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <a href="blog-detail.html" class="blog-detail d-block">
                                    <h6>Milk Brand</h6>
                                    <h5>Fresh Milk</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


         <!-- Blog Section End -->
         <!-- About Start -->
         {{-- <div class="container-fluid p-5">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;" data-aos="fade-{{ app()->getLocale()=='ar'?'left':'right'}}">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="{{ asset(isset(page('about')->images[0]->url) ? page('about')->images[0]->url : asset('default.jpg')) }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7"data-aos="fade-{{ app()->getLocale()=='ar'?'right':'left'}}">
                    <div class="mb-4" >
                        <h5 class="text-primary text-uppercase">{{ __('general.about') }}</h5>
                        
                        <h1 class="display-5 text-uppercase mb-0">{{ page('about')->title }}</h1>
                    </div>
                    <h4 class="text-body mb-4">{{ page('about')->subtitle }}</h4>
                    <div class="mb-4 description">{!! page('about')->description !!}</div>
                    <div class="rounded bg-dark p-5">
                        <ul class="nav nav-pills justify-content-between mb-3">
                            <li class="nav-item w-50">
                                <a class="nav-link text-uppercase text-center w-100 active" data-bs-toggle="pill" href="#pills-1">{{ __('general.vision') }}</a>
                            </li>
                            <li class="nav-item w-50">
                                    <a class="nav-link text-uppercase text-center w-100" data-bs-toggle="pill" href="#pills-2">{{ __('general.mission') }}</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-1">
                                <div class="text-white description mb-0">{!! page('vision')->description !!}</div>
                            </div>
                            <div class="tab-pane fade" id="pills-2">
                                <div class="text-white description  mb-0">{!! page('mission')->description !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
         <!-- About End -->
