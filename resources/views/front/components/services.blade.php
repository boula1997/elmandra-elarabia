    
    <!-- service area start -->
    <div class="container-fluid position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
           @foreach ($services as $service)
                <div class="col-lg-4 col-md-6">
                        <div class="bg-light rounded text-center p-5">
                            <i class="{{ $service->icon }} display-1 text-primary"></i>
                            <h3 class="text-uppercase my-4">{{ $service->title }}</h3>
                            <div class="text-limit" style='--lines: 3;'>{!! $service->description !!}</div>
                            <a class="text-uppercase" href="{{ route('front.show.service',$service->id) }}">{{ __('general.read_more') }} <i class="bi bi-arrow-{{ app()->getLocale()=='ar'?'left':'right' }}"></i></a>
                        </div>
                </div>  
           @endforeach
            {{-- <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <i class="flaticon-barbell display-1 text-primary"></i>
                    <h3 class="text-uppercase my-4">Weight Lefting</h3>
                    <p>Sed amet tempor amet sit kasd sea lorem dolor ipsum elitr dolor amet kasd elitr duo vero amet amet stet</p>
                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <i class="flaticon-bodybuilding display-1 text-primary"></i>
                    <h3 class="text-uppercase my-4">Muscle Building</h3>
                    <p>Sed amet tempor amet sit kasd sea lorem dolor ipsum elitr dolor amet kasd elitr duo vero amet amet stet</p>
                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div> --}}
        </div>
    </div>
    {{-- <div class="container-fluid programe position-relative px-5 mt-5">
        <div class="row g-5 gb-5">
            <div class="row">

                    @foreach ($services as $service)
                            <div class="col-lg-4 col-md-6">
                                    <div class="bg-light rounded text-center p-5">
                                        <i class="{{ $service->icon }} display-1 text-primary"></i>
                                        <h3 class="text-uppercase my-4">{{ $service->title }}</h3>
                                        <div class="text-limit" style='--lines: 3;'>{!! $service->description !!}</div>
                                        <a class="text-uppercase" href="{{ route('front.show.service',$service->id) }}">{{ __('general.read_more') }} <i class="bi bi-arrow-{{ app()->getLocale()=='ar'?'left':'right' }}"></i></a>
                                    </div>
                            </div>  
                    @endforeach
            </div>
        </div>
    </div> --}}
    <!-- service area end -->