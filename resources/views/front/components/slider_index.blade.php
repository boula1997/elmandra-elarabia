      <!-- Home Section Start -->
      <section class="home-section pt-2">
          <div class="carousel slide carousel-fade">
              <div class="row g-4 bg-banner" style="background-image: url('{{ asset(isset(page('slider-index')->images[0]->url) ? page('slider-index')->images[0]->url : asset('default.jpg')) }}')">
                  <div class="col-xl-6 col-lg-6">
                      <div class="home-contain h-100">
                          <div class="home-detail p-center-left position-relative mend-auto">
                              <div class="index-number">
                                  <h2 class="text-uppercase poster-1 text-primary display-7 fw-bold">{{ page('slider-index')->title }} <span
                                          class="daily">{{ page('slider-index')->subtitle }}</span></h2>
                                  <div class="description fw-bold mt-5">{!! page('slider-index')->description !!}</div>
                                  <div class="d-flex mt-5">
                                      <button onclick="location.href = '#';"
                                          class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">{{ __('general.app_store') }}<i
                                              class="fab fa-apple ms-2 icon"></i>
                                      </button>
                                      <button onclick="location.href = '#';"
                                          class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">{{ __('general.google_play') }}<i
                                              class="fab fa-google-play ms-2 icon"></i>
                                      </button>
                                      <button onclick="location.href = '#';"
                                          class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">{{ __('general.order_now') }}<i
                                              class="fas fa-shopping-cart ms-2 icon"></i>
                                  </div>
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <img src="{{ page('slider-index')->images[1]->url }}" class="w-50 slider-mobile" alt="">
                  </div>

              </div>
          </div>
      </section>
      <!-- Home Section End -->


      <!-- Carousel Start -->
      {{-- <div class="container-fluid p-0 h-100">
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
