      <!-- Home Section Start -->
      <section class="home-section pt-2">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xl-9 col-lg-8">
                    <div class="home-contain h-100">
                        <img src="{{ asset(isset(page('slider')->images[0]->url) ? page('slider')->images[0]->url : asset('default.jpg')) }}" class="bg-img blur-up lazyload" alt="">
                        <div class="home-detail p-center-left w-75 position-relative mend-auto">
                            <div>
                                <h6>Exclusive offer <span>30% Off</span></h6>
                                <h1 class="w-75 text-uppercase poster-1">{{ page('slider')->title }} <span
                                        class="daily">{{ page('slider')->subtitle }}</span></h1>
                                <p class="w-58 d-none d-sm-block">{!! page('slider')->description !!}</p>
                                <button onclick="location.href = '{{ route('front.show-products') }}';"
                                    class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">{{ __('general.shop_now') }}<i
                                        class="fa-solid fa-right-long ms-2 icon"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 d-lg-inline-block d-none ratio_156">
                    <div class="home-contain h-100">
                        <img src="{{ asset(isset(page('mini_slider')->images[0]->url) ? page('mini_slider')->images[0]->url : asset('default.jpg')) }}" class="bg-img blur-up lazyload" alt="">
                        <div class="home-detail p-top-left home-p-sm w-75">
                            <div>
                                <h2 class="mt-0 text-danger">45% <span class="discount text-title">OFF</span>
                                </h2>
                                <h3 class="w-75 text-uppercase poster-1">{{ page('mini_slider')->title }}</h3>
                                <h3 class="theme-color">{{ page('mini_slider')->subtitle }}</h3>
                                <h5 class="text-content">{!! page('mini_slider')->description !!}</h5>
                                <a href="{{ route('front.show-products') }}" class="shop-button">{{ __('general.shop_now') }}<i
                                        class="fa-solid fa-right-long ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Section End -->
    
    
    <!-- Carousel Start -->
     {{-- <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
               
                @foreach ($sliders as $slider)
                <div class="carousel-item {{ $loop->iteration==1? 'active':'' }}">
                    <img class="w-100" src="{{  $slider->image  }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{ $slider->subtitle }}</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{ $slider->title }}</h1>
                            <a href="appointment.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">{{ __('general.get_started') }}</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">{{ __('general.products') }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> --}}
    <!-- Carousel End -->
