    <!-- Top Selling Section Start -->
    <section class="top-selling-section">
        <div class="container-fluid-lg">
            <div class="slider-4-1">
                <div>
                    <div class="row">
                        <div class="col-12">
                            <div class="top-selling-box">
                                <div class="top-selling-title">
                                    <h3>{{ __('general.top_selling') }}</h3>
                                </div>

                                @foreach ($products as $product)
                                  @if($loop->iteration <= 10)
                                    <div class="top-selling-contain wow fadeInUp">
                                        <a href="{{ route('front.show.product',$product->id) }}" class="top-selling-image">
                                            <img src="{{asset($product->image)}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <div class="top-selling-detail">
                                            <a href="{{ route('front.show.product',$product->id) }}">
                                                <h5>{{$product->title}}</h5>
                                            </a>
                                            <h5>{{$product->unit}}</h5>
                                            <h6> <span class="theme-color">{{ $product->price_bd }}</span> <del>{{ $product->price}}</del>{{ app()->getLocale()=='ar'?'L.E':'$' }}</h6>
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

                <div>
                    <div class="row">
                        <div class="col-12">
                            <div class="top-selling-box">
                                <div class="top-selling-title">
                                    <h3>{{ __('general.trending_products') }}</h3>
                                </div>
                                @foreach ($products as $product)
                                    @if($loop->iteration <= 10)
                                        <div class="top-selling-contain wow fadeInUp">
                                            <a href="{{ route('front.show.product',$product->id) }}" class="top-selling-image">
                                                <img src="{{asset($product->image)}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="{{ route('front.show.product',$product->id) }}">
                                                    <h5>{{ $product->title }}</h5>
                                                </a>
                                                
                                                <h5>{{$product->unit}}</h5>
                                                <h6> <span class="theme-color">{{ $product->price_bd }}</span> <del>{{ $product->price}}</del>{{ app()->getLocale()=='ar'?'L.E':'$' }}</h6>
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

                <div>
                    <div class="row">
                        <div class="col-12">
                            <div class="top-selling-box">
                                <div class="top-selling-title">
                                    <h3>{{ __('general.recently_added') }}</h3>
                                </div>
                                @foreach ($products as $product)
                                        @if($loop->iteration <= 10)
                                            <div class="top-selling-contain wow fadeInUp">
                                                <a href="{{ route('front.show.product',$product->id) }}" class="top-selling-image">
                                                    <img src="{{asset($product->image)}}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>

                                                <div class="top-selling-detail">
                                                    <a href="{{ route('front.show.product',$product->id) }}">
                                                        <h5>{{ $product->title }}</h5>
                                                    </a>
                                                    <h5>{{$product->unit}}</h5>
                                                    <h6> <span class="theme-color">{{ $product->price_bd }}</span> <del>{{ $product->price}}</del>{{ app()->getLocale()=='ar'?'L.E':'$' }}</h6>
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

                <div>
                    <div class="row">
                        <div class="col-12">
                            <div class="top-selling-box">
                                <div class="top-selling-title">
                                    <h3>{{ __('general.top_rated') }}</h3>
                                </div>
                                @foreach ($products as $product)
                                    @if($loop->iteration <= 10)
                                        <div class="top-selling-contain wow fadeInUp">
                                            <a href="{{ route('front.show.product',$product->id) }}" class="top-selling-image">
                                                <img src="{{asset($product->image)}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="{{ route('front.show.product',$product->id) }}">
                                                    <h5>{{ $product->title }}</h5>
                                                </a>
                                             
                                                <h5>{{$product->unit}}</h5>
                                                <h6> <span class="theme-color">{{ $product->price_bd }}</span> <del>{{ $product->price}}</del>{{ app()->getLocale()=='ar'?'L.E':'$' }}</h6>
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
            </div>
        </div>
    </section>
    <!-- Top Selling Section End -->


