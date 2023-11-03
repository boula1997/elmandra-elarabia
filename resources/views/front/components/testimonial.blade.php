        <!-- Testimonial Start -->
        <div class="container-fluid p-0 my-5">
            <div class="row g-0">
                <div class="col-lg-6" style="min-height: 500px;" data-aos="fade-{{ app()->getLocale()=='ar'?'left':'right'}}">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset(isset(page('testimonial')->images[0]->url) ? page('testimonial')->images[0]->url : asset('default.jpg')) }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 bg-dark p-5" data-aos="fade-{{ app()->getLocale()=='ar'?'right':'left'}}">
                    <div class="mb-5">
                        <h5 class="text-primary text-uppercase">{{ page('testimonial')->title }}</h5>
                        <h1 class="display-5 text-uppercase text-light mb-0">{{ page('testimonial')->subtitle }}</h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel">
                        @foreach ($testimonials as $testimonial)
                        <div class="testimonial-item">
                            <div class="fs-4 fw-normal text-light mb-4 text-secondary description" dir="{{ app()->getLocale()=='ar'?'rtl':'' }}"><i class="fa fa-quote-left text-primary me-3"></i>{!! $testimonial->description !!}</div>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" dir="{{ app()->getLocale()=='ar'?'rtl':'' }}" src="{{ asset($testimonial->image) }}" alt="">
                         `       <div class="ps-4">
                                    <h5 class="text-uppercase text-light" dir="{{ app()->getLocale()=='ar'?'rtl':'' }}">{{ $testimonial->title }}</h5>
                                    <span class="text-uppercase text-secondary" dir="{{ app()->getLocale()=='ar'?'rtl':'' }}">{{ $testimonial->subtitle }}</span>
                                </div>
                            </div>
                        </div> 
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

