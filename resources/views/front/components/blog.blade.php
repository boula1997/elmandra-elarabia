      <!-- Blog Section Start -->
      <section>
        <div class="container-fluid-lg">
            <div class="title">
                <h2>{{ page('product_home')->title }}</h2>
                <span class="title-leaf">
                    <svg class="icon-width">
                        <use xlink:href="{{ asset('template/assets/svg/leaf.svg#leaf')}}"></use>
                    </svg>
                </span>
                <p>{{ page('product_home')->subtitle }}</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-5 ratio_87">
                        @foreach ($products as $product)
                            @if($loop->iteration <= 10)
                                <div>
                                    <div class="blog-box">
                                        <div class="blog-box-image">
                                            <a href="{{ route('front.show-products') }}" class="blog-image">
                                                <img src="{{ asset($product->image)}}" class="bg-img blur-up lazyload"
                                                    alt="">
                                            </a>
                                        </div>

                                        <div class="blog-detail">
                                            <h6>{{ $product->title }}</h6>
                                            <h5>{{ $product->subcategory->category->title }}</h5>
                                        </div>
                                    </div>
                                </div>
                                @else
                                @break
                            @endif 
                        @endforeach

                        {{-- <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <a href="blog-detail.html" class="blog-image">
                                        <img src="{{ asset('template/assets/images/veg-2/blog/2.jpg')}}" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <a href="blog-detail.html" class="blog-detail">
                                    <h6>Soda Brand</h6>
                                    <h5>Soda 500ml - 20% OFF</h5>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <a href="blog-detail.html" class="blog-image">
                                        <img src="{{ asset('template/assets/images/veg-2/blog/3.jpg')}}" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <a href="blog-detail.html" class="blog-detail">
                                    <h6>Beer Brand</h6>
                                    <h5>Soda 500ml - 20% OFF</h5>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <a href="blog-detail.html" class="blog-image">
                                        <img src="{{ asset('template/assets/images/veg-2/blog/4.jpg')}}" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <a href="blog-detail.html" class="blog-detail">
                                    <h6>Beer Brand</h6>
                                    <h5>Fresh Beer -30% OFF</h5>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <a href="blog-detail.html" class="blog-image">
                                        <img src="{{ asset('template/assets/images/veg-2/blog/5.jpg')}}" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <a href="blog-detail.html" class="blog-detail">
                                    <h6>Milk Brand</h6>
                                    <h5>Fresh Milk</h5>
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
  
  {{-- <div class="swiper mySwiper" style="height: 90vh">
      <div class="swiper-wrapper">
          @foreach ($sliders as $slider)
              <div class="swiper-slide">
                  <img class="w-100 slider-image" src="{{ asset($slider->image) }}" alt="Image">
                  <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                      <div class="p-3" style="max-width: 900px;">
                          <h5 class="text-white text-uppercase"> {{ $slider->title }} </h5>
                          <h1 class="display-5 text-white text-uppercase mb-md-4">{{ $slider->subtitle }}</h1>
                          <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">{{ __('general.join_us') }}</a>
                          <a href="{{ route('front.message') }}"
                              class="btn btn-light py-md-3 px-md-5">{{ __('general.contact') }}</a>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
      <div class="swiper-pagination"></div>
  </div> --}}


  @push('js')
      <script>
          var swiper = new Swiper(".mySwiper", {
              slidesPerView: 1,
              spaceBetween: 30,
              effect: "fade",
              autoplay: {
                  delay: 3500,
                  disableOnInteraction: false,
              },
              loop: true,
              navigation: {
                  nextEl: '.swiper-button-next',
                  prevEl: '.swiper-button-prev',
              },
              pagination: {
                  el: ".swiper-pagination",
                  clickable: true,
              },
              breakpoints: {
                  // when window width is >= 320px
                  320: {
                      slidesPerView: 1,
                      spaceBetween: 20
                  },
                  // when window width is >= 480px
                  480: {
                      slidesPerView: 1,
                      spaceBetween: 30
                  },
                  // when window width is >= 640px
                  640: {
                      slidesPerView: 1,
                      spaceBetween: 40
                  }
              }
          });
      </script>
  @endpush
