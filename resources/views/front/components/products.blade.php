
 <!-- Product Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 mb-5">
            <div class="row g-5 ">
                @foreach ($products as $product)
                    <div class="col-md-4 product-item wow zoomIn" data-wow-delay="0.6s">
                        <div class="rounded-top overflow-hidden">
                            <img class="card-img-top p-1" src="{{$product->image }}" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h3><a href="{{route('front.show.product',$product->id)}}" class="text-limit" style='--lines: 2;' title="{{$product->title}}">{{$product->title}}</a></h3>
                            {{-- <h5 class="m-0">{{$product->title}}</h5> --}}
                            <div class="text-limit description" style="--lines:3;">{!! $product->description !!}</div>
                        </div>
                    </div>
                @endforeach
               
            </div>
        </div>
    </div>
</div>
<!-- Product End -->
<!-- product area start -->
    {{-- <div class="product-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="boxShadow-contact">
                            <div class="single-product-inner style-hover-base text-center">
                                <div class="icon-box">
                                    <i class="{{ $product->icon }} fs-1"></i>
                                </div>
                                <div class="details">
                                    <a href="{{route('front.show.product',$product->id)}}" class="text-limit" style="--lines:1;"><h4>{{$product->title}}</h4></a>
                                    <div class="description text-limit" style="--lines:6;"> {!! $product->description !!}</div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    
                @endforeach
            
            </div>
        </div>
    </div> --}}
    <!-- product area end -->