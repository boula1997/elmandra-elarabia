    <!-- Carousel Start -->
    <div class="container-fluid slider-section p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" dir="ltr">
                @foreach ($sliders as $slider)
                    <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                        <img class="w-100 slider-image" src="{{ asset($slider->image) }}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase"> {{ $slider->title }} </h5>
                                <h1 class="display-5 text-white text-uppercase mb-md-4">{{ $slider->subtitle }}</h1>
                                <a href=""
                                    class="btn btn-primary py-md-3 px-md-5 me-3">{{ __('general.join_us') }}</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5">{{ __('general.contact') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">{{ __('words.previous') }}</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">{{ __('words.next') }}</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->














    <!-- banner area start -->
    {{-- <div class="banner-area banner-area-1 bg-black bg-relative" >
        <div class="banner-bg-img" style="background-image: url({{ asset('assets/img/banner/2.webp')}}); "></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-7 text-center text-lg-end order-lg-last" data-aos="fade-up">
                    <div class="banner-mask-bg-wrap mb-5 mb-lg-0">
                        <img class="shape-image" src="{{asset('assets/img/banner/6.webp')}}" alt="img">
                        <div class="thumb">
                            <img src="{{ asset(isset(page('home-banner')->images[0]->url) ? page('home-banner')->images[0]->url : asset('default.jpg')) }}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-9 order-lg-first align-self-center" data-aos="fade-up">
                    <div class="banner-inner style-white  text-center text-lg-start">
                        <h4 class="sub-title">{{page('home-banner')->subtitle}}</h4>
                        <h2 class="title fs-1">{{page('home-banner')->title}}</h2>
                        <p class="content">{!! page('home-banner')->description !!}</p>
                        <div class="btn-wrap">
                            <a class="btn btn-base me-2" href="{{ request()->routeIs('front.home')?'#process':route('front.home').'#process'}}" >{{__('general.get_started')}}</a>
                            <a class="btn btn-border-white" href="{{ route('front.message') }}">{{__('general.message')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- banner area end -->
