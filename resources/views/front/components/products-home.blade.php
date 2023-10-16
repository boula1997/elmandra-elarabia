   <!-- Product Start -->
   <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 mb-5">
            {{-- <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                    <img class="position-absolute w-100 h-100" src="img/before.jpg" style="object-fit: cover;">
                    <img class="position-absolute w-100 h-100" src="img/after.jpg" style="object-fit: cover;">
                </div>
            </div> --}}
            <div class="row justify-content-center ">
                <div class="col-lg-8 text-center">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">{{ page('product')->title }}</h5>
                        <h1 class="display-5 mb-0">{{ page('product')->subtitle }}</h1>
                    </div>
                </div>
            </div>
            <div class="row g-5 ">
                @foreach ($products as $product)
                    <div class="col-md-4 product-item wow zoomIn" data-wow-delay="0.6s">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid rounded-top w-100" src="{{$product->image }}" alt="">
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