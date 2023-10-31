        <!-- Testimonial Start -->
        <div class="container-fluid p-0 my-5">
            <div class="row g-0">
                <div class="col-lg-6" style="min-height: 500px;" data-aos="fade-right">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset(isset(page('testimonial')->images[0]->url) ? page('testimonial')->images[0]->url : asset('default.jpg')) }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 bg-dark p-5" data-aos="fade-left">
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
                                <div class="ps-4">
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
<!-- testimonial-slider start -->
{{-- <div class="testimonial-slider bg-sky bg-relative" dir="ltr">
    <div class="bg-relative">
        <div class="slider testimonial-thumb testimonial-thumb-2">
            @foreach ($testimonials as $testimonial)
                <div class="item" dir="ltr">
                    <div class="row">
                        <div class="col-lg-5 col-md-6" data-aos="fade-right" >
                            <div class="thumb mb-4 mb-md-0" style="background-image: url({{ $testimonial->image }});">
                                <div class="quote-wrap">
                                    <div class="quote">
                                        <img src="{{ $testimonial->image }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-6 align-self-center" dir="ltr" data-aos="fade-left">
                            <div class="single-testimonial-inner text-md-center px-lg-5 px-md-4" >
                                <div class="details">
                                    <div class="thumb">
                                        <img src="{{ $testimonial->image }}" alt="img">
                                    </div>
                                    <h2>{{$testimonial->title}}</h2>
                                    <span>{{$testimonial->subttitle}}</span>
                                        {!! $testimonial->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="slider testimonial-nav-slider testimonial-nav-slider-2" dir="ltr">
            @foreach ($testimonials as $testimonial)
                <div class="item" dir="ltr">
                    <div class="thumb">
                        <img src="{{ asset($testimonial->image) }}" alt="img">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div> --}}
<!-- testimonial-slider end -->
