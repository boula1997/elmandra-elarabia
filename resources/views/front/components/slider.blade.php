  <div class="swiper mySwiper">
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
  </div>


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
