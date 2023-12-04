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
                                        <a href="{{ route('front.show.product',$product->id) }}" class="product-slider-image">
                                            <img src="{{asset($product->image)}}" class="w-100 blur-up lazyload rounded-3"
                                                alt="">
                                        </a>

                                        <div class="product-slider-detail">
                                            <div class="d-flex flex-column">
                                                <div>
                                                    <a href="#" class="d-block">
                                                        <h3 class="text-title">{{ $product->title }}</h3>
                                                    </a>
                                                    <h5>{{ $product->subcategory->title }}</h5>
                                                    <div class="product-rating">
                                                        <ul class="rating">
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star"></i>
                                                            </li>
                                                        </ul>
                                                        <span>(34)</span>
                                                    </div>
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

