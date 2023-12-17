    <!-- service area start -->
    <div class="service-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row">
                @foreach ($services as $service)

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="boxShadow-contact">
                            <div class="single-service-inner style-hover-base text-center">
                                <div class="icon-box">
                                    <i class="{{ $service->icon }} fs-1"></i>
                                </div>
                                <div class="details">
                                    <a href="{{route('front.show.service',$service->id)}}" class="text-limit" style="--lines:1;"><h4>{{$service->title}}</h4></a>
                                    <div class="description text-limit" style="--lines:6;"> {!! $service->description !!}</div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    
                @endforeach
            
            </div>
        </div>
    </div>
    <!-- service area end -->