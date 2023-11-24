      <!-- Blog Section Start -->
      <section>
          <div class="container-fluid-lg">
              <div class="title">
                  <h2>{{ page('product_home')->title }}</h2>
                  <span class="title-leaf">
                      <svg class="icon-width">
                          <use xlink:href="{{ asset('template/assets/svg/leaf.svg#leaf') }}"></use>
                      </svg>
                  </span>
                  <p>{{ page('product_home')->subtitle }}</p>
              </div>
              <div class="row">
                  <div class="col-12">
                      <div class="slider-5 ratio_87">
                          @foreach ($products as $product)
                              @if ($loop->iteration <= 10)
                                  <div>
                                      <div class="blog-box">
                                          <div class="blog-box-image">
                                              <a href="{{ route('front.show-products') }}" class="blog-image">
                                                  <img src="{{ asset($product->image) }}"
                                                      class="bg-img blur-up lazyload" alt="">
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
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Blog Section End -->



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
