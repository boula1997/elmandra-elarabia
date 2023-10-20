   <!-- Team Start -->
   <div class="container-fluid p-5">
    <div class="mb-5 text-center">
        <h5 class="text-primary text-uppercase">{{ page('team')->title }}</h5>
        <h1 class="display-3 text-uppercase mb-0">{{ page('team')->subtitle }}s</h1>
    </div>
    <div class="row g-5">
        @foreach ($teams as $team)
        <div class="col-lg-4 col-md-6">
            <div class="team-item position-relative">
                <div class="position-relative overflow-hidden rounded">
                    <img class="img-fluid team-image" src="{{ asset( $team->image )}}" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square rounded-circle mx-1" href="{{$team->twitter}}"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-light btn-square rounded-circle mx-1" href="{{$team->facebook}}"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-square rounded-circle mx-1" href="{{$team->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                    <h5 class="text-uppercase text-light">{{ $team->title }}</h5>
                    <p class="text-uppercase text-secondary m-0">{{ $team->subtitle }}</p>
                </div>
            </div>
        </div>
        @endforeach
       
        {{-- <div class="col-lg-4 col-md-6">
            <div class="team-item position-relative">
                <div class="position-relative overflow-hidden rounded">
                    <img class="img-fluid w-100" src="{{ asset('front/img/team-2.jpg') }}" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                    <h5 class="text-uppercase text-light">James Taylor</h5>
                    <p class="text-uppercase text-secondary m-0">Trainer</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="team-item position-relative">
                <div class="position-relative overflow-hidden rounded">
                    <img class="img-fluid w-100" src="{{ asset('front/img/team-3.jpg') }}" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                    <h5 class="text-uppercase text-light">Adam Phillips</h5>
                    <p class="text-uppercase text-secondary m-0">Trainer</p>
                </div>
            </div>
        </div> --}}
    </div>
</div>
<!-- Team End -->

    <!-- team area start -->
    {{-- <div class="team-area pd-top-115 pd-bottom-90" data-aos="fade-up-left">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="3000">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h5 class="sub-title double-line">{{ page('team-section')->title }}</h5>
                        <h2 class="title">{{ page('team-section')->subtitle }}</h2>
                        <p class="content">{!! page('team-section')->description !!}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="swiper mySwiper" data-aos="zoom-in">
                    <div class="swiper-wrapper">
                        @foreach ($teams as $team)
                        <div class="swiper-slide">
                            <div class="single-team-inner style-1 text-center">
                                <div class="thumb">
                                    <div class="img-team-container">

                                        <img src="{{ $team->image }}" alt="img">
                                    </div>
                                    <ul class="social-media">
                                        <li>
                                            <a class="facebook" href="{{ $team->facebook }}">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="{{ $team->twitter }}">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="instagram" href="{{ $team->instagram }}">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="youtube" href="{{ $team->youtube }}">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="details-wrap">
                                    <div class="details-inner">
                                        <h4><a href="team-details.html">{{ $team->title }}</a></h4>
                                        <p>{{ $team->subtitle }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </div> --}}
    <!-- team area end -->