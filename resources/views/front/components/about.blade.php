        <!-- About Start -->
        <div class="container-fluid p-5">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="{{ asset(isset(page('about')->images[0]->url) ? page('about')->images[0]->url : asset('default.jpg')) }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase">{{ __('general.about') }}</h5>
                        <h1 class="display-3 text-uppercase mb-0">{{ page('about')->title }}</h1>
                    </div>
                    <h4 class="text-body mb-4">{{ page('about')->subtitle }}</h4>
                    <p class="mb-4">{!! page('about')->description !!}</p>
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
                                <p class="text-secondary mb-0"><p>{!! page('vision')->description !!}</p>
                            </div>
                            <div class="tab-pane fade" id="pills-2">
                                <p class="text-secondary mb-0"><p>{!! page('mission')->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    
    <!-- about area start -->
    {{-- <div class="about-area pd-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="about-mask-bg-wrap about-mask-bg-wrap-1 mb-4 mb-lg-0"  data-aos="fade-right">
                        <img class="shape-image-sm top_image_bounce" src="{{ asset('assets/img/about/1sm.webp') }}"
                            alt="img">
                        <img class="shape-image" src="{{ asset('assets/img/about/1s.webp') }}" alt="img">
                        <div class="thumb">
                            <img src="{{ asset(isset(page('about-us')->images[0]->url) ? page('about-us')->images[0]->url : asset('default.jpg')) }}"
                                alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center" data-aos="fade-left">
                    <div class="section-title px-lg-5 mb-0">
                        <h5 class="sub-title right-line">{{ page('about-us')->title }}</h5>
                        <h2 class="title">{{ page('about-us')->subtitle }}</h2>
                        {!! page('about-us')->description !!}
                        <div class="exp-wrap mt-3">
                            <div class="row">
                                @foreach ($counters as $counter)
                                    <div class="col-sm-4">
                                        <div class="single-exp-inner">
                                            <h2><span class="counter">{{ $counter->count }}</span> <sub></sub></h2>
                                            <h5>{{ $counter->title }}</h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- about area end -->
