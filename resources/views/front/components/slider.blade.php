<section class="banner-section p-0 m-0">
    <div class="">
        <div class="">
            <div class="swiper mySwiper" data-aos="zoom-in">
                <div class="swiper-wrapper">
                    @foreach ( $sliders as $slider )      
                        <div class="swiper-slide bg-success">
                            <img class="w-100 img-slider" style="height: 75vh;"
                            src="{{ asset($slider->image) }}" alt="Image">
                            
                            <div
                            class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3">
                                    <h5 class="text-dark text-uppercase mb-3 animated slideInDown">{{ $slider->title }}
                                    </h5>
                                    <h1 class="display-4 text-dark mb-md-4 animated zoomIn">{{ $slider->subtitle }}
                                    </h1>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </div>
</section>

    
   