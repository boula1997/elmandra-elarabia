    <!-- Product Section Start -->
    <section>
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="slider-4-1 ratio_65 no-arrow product-wrapper">
                        @foreach ($products as $product)
                            @if($loop->iteration <= 20)
                                <div>
                                    <div class="product-slider wow fadeInUp">
                                        <a href="{{ route('front.show.product', $product->id) }}" class="position-relative">
                                            <img src="{{ asset($product->image) }}"
                                                class="img-fluid blur-up lazyload" alt="">
      
                                        </a>

                                        <div class="product-slider-detail">
                                            <div class="d-flex flex-column">
                                                <div>
                                                    <a href="{{ route('front.show.product',$product->id) }}" class="d-block">
                                                        <h3 class="text-title">{{ $product->title }}</h3>
                                                        <h3 class="text-title">{{ $product->size}} {{ $product->translate(app()->getLocale())->unit}}</h3>
                                                    </a>
                                                    <h5>{{ $product->subcategory->title }}</h5>
                                                  
                                                    <h6>بواسطة <span class="theme-color">{{ $product->subcategory->category->title }}</span></h6>
                                                </div>
                                            </div>
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
    <!-- Product Section End -->

