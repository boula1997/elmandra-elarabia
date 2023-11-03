     <!-- Programe Start -->
     <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
           @foreach ($services as $service)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="3000">
                        <div class="bg-light rounded text-center p-5">
                            <i class="{{ $service->icon }} display-1 text-primary"></i>
                            <h3 class="text-uppercase my-4 text-limit fs-5" style="--lines:1;" title="{{ $service->title }}">{{ $service->title }}</h3>
                            <div class="text-limit mb-2" style='--lines: 3;'>{!! $service->description !!}</div>
                            <a class="text-uppercase mt-5" href="{{ route('front.show.service',$service->id) }}">{{ __('general.read_more') }} <i class="bi bi-arrow-{{ app()->getLocale()=='ar'?'left':'right' }}"></i></a>
                        </div>
                </div>  
           @endforeach

            <div class="col-lg-12 col-md-6 text-center" data-aos="fade-up"data-aos-duration="3000">
                <h1 class="text-uppercase text-light mb-4">{{ page('service')->subtitle }}</h1>
                <a href="{{ route('user.register-view') }}" class="btn btn-primary py-3 px-5">{{ __('general.become_a_member') }}</a>
            </div>
        </div>
    </div>
    {{-- <div class="service-area bg-overlay pd-top-120 pd-bottom-90"
        style="background-image: url({{ asset('images/3.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="section-title border-radius-5 p-35 bg-base style-white mb-lg-0" >
                        <h2 class="title mt-4 text-limit" style='--lines: 1;'>{{page('service-section')->title}}</h2>
                             <div class="text-white text-limit" style='--lines: 6;'>{!! page('service-section')->description !!}</div>
                             
                        <div class="btn-wrap mt-4 pt-1 mb-4">
                            <a class="btn btn-small btn-border-white mt-2" href="message.html">{{__('general.message')}}</a>
                            <a class="btn btn-small btn-black mt-2" href="service.html">{{__('general.all_services')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="row">
                        @foreach ($services as $service)
                            
                        <div class="col-md-6">
                            <div class="single-service-inner style-white text-center">
                                <div class="icon-box">
                                    <i class="{{ $service->icon }}"></i>
                                </div>
                                <div class="details">
                                    <h3><a href="{{route('front.show.service',$service->id)}}" class="text-limit" style='--lines: 2;' title="{{$service->title}}">{{$service->title}}</a></h3>
                                      <div class="text-limit description" style="--lines:5;">{!! $service->description !!}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- service area end -->