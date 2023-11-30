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
                                        <a href="{{ route('front.show-products') }}" class="top-selling-image">
                                            <img src="{{asset($product->image)}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <div class="top-selling-detail">
                                            <a href="{{ route('front.show-products') }}">
                                                <h5>{{$product->title}}</h5>
                                            </a>
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
                                            <h6> {{$product->price}}{{ app()->getLocale()=='ar'?'L.E':'$' }}</h6>
                                        </div>
                                    </div>
                                    @else
                                    @break
                                  @endif
                                @endforeach

                                {{-- <div class="top-selling-contain wow fadeIn" data-wow-delay="0.05s">
                                    <a href="product-left-thumbnail.html" class="top-selling-image">
                                        <img src="{{asset('template/assets/images/veg-2/top-selling/2.jpg')}}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h5>Potato</h5>
                                        </a>
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
                                        <h6>$ 40.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.1s">
                                    <a href="product-left-thumbnail.html" class="top-selling-image">
                                        <img src="{{asset('template/assets/images/veg-2/top-selling/3.jpg')}}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h5>Green Chilli</h5>
                                        </a>
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
                                        <h6>$ 45.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.15s">
                                    <a href="product-left-thumbnail.html" class="top-selling-image">
                                        <img src="{{asset('template/assets/images/veg-2/top-selling/4.jpg')}}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h5>Muffets Burger Bun</h5>
                                        </a>
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
                                        <h6>$ 70.00</h6>
                                    </div>
                                </div> --}}
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
                                            <a href="{{ route('front.show-products') }}" class="top-selling-image">
                                                <img src="{{asset($product->image)}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="{{ route('front.show-products') }}">
                                                    <h5>{{ $product->title }}</h5>
                                                </a>
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
                                                <h6>{{$product->price}}{{ app()->getLocale()=='ar'?'L.E':'$' }}</h6>
                                            </div>
                                        </div>
                                        @else
                                    @break
                                  @endif  
                                @endforeach

                                {{-- <div class="top-selling-contain wow fadeIn" data-wow-delay="0.05s">
                                    <a href="product-left-thumbnail.html" class="top-selling-image">
                                        <img src="{{asset('template/assets/images/veg-2/top-selling/6.jpg')}}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h5>Good Life Raw Peanuts</h5>
                                        </a>
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
                                        <h6>$ 40.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.1s">
                                    <a href="product-left-thumbnail.html" class="top-selling-image">
                                        <img src="{{asset('template/assets/images/veg-2/top-selling/7.jpg')}}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h5>Good Life Raw Peanuts</h5>
                                        </a>
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
                                        <h6>$ 85.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.15s">
                                    <a href="product-left-thumbnail.html" class="top-selling-image">
                                        <img src="{{asset('template/assets/images/veg-2/top-selling/8.jpg')}}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h5>Frooti Mango Drink</h5>
                                        </a>
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
                                        <h6>$ 10.00</h6>
                                    </div>
                                </div> --}}
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
                                                <a href="{{ route('front.show-products') }}" class="top-selling-image">
                                                    <img src="{{asset($product->image)}}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>

                                                <div class="top-selling-detail">
                                                    <a href="{{ route('front.show-products') }}">
                                                        <h5>{{ $product->title }}</h5>
                                                    </a>
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
                                                    <h6>{{$product->price}}{{ app()->getLocale()=='ar'?'L.E':'$' }}</h6>
                                                </div>
                                            </div>
                                          @else
                                          @break
                                        @endif
                                            
                                      
                                @endforeach
{{-- 
                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.05s">
                                    <a href="product-left-thumbnail.html" class="top-selling-image">
                                        <img src="{{asset('template/assets/images/veg-2/top-selling/10.jpg')}}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h5>Long Life Toned Milk</h5>
                                        </a>
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
                                        <h6>$ 40.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.1s">
                                    <a href="product-left-thumbnail.html" class="top-selling-image">
                                        <img src="{{asset('template/assets/images/veg-2/top-selling/11.jpg')}}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h5>Organic Tomato</h5>
                                        </a>
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
                                        <h6>$ 45.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.15s">
                                    <a href="product-left-thumbnail.html" class="top-selling-image">
                                        <img src="{{asset('template/assets/images/veg-2/top-selling/12.jpg')}}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h5>Organic Pure Honey</h5>
                                        </a>
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
                                        <h6>$ 90.00</h6>
                                    </div>
                                </div> --}}
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
                                            <a href="{{ route('front.show-products') }}" class="top-selling-image">
                                                <img src="{{asset($product->image)}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="{{ route('front.show-products') }}">
                                                    <h5>{{ $product->title }}</h5>
                                                </a>
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
                                                <h6>{{$product->price}}{{ app()->getLocale()=='ar'?'L.E':'$' }}</h6>
                                            </div>
                                        </div>
                                        @else
                                        @break
                                      @endif  
                                @endforeach

                                {{-- <div class="top-selling-contain wow fadeIn" data-wow-delay="0.05s">
                                    <a href="product-left-thumbnail.html" class="top-selling-image">
                                        <img src="{{asset('template/assets/images/veg-2/top-selling/14.jpg"')}}
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h5>Cherry Red Premium Imported</h5>
                                        </a>
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
                                        <h6>$ 40.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.1s">
                                    <a href="product-left-thumbnail.html" class="top-selling-image">
                                        <img src="{{asset('template/assets/images/veg-2/top-selling/15.jpg')}}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h5>Meatigo Premium Goat Curry</h5>
                                        </a>
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
                                        <h6>$ 45.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.15s">
                                    <a href="product-left-thumbnail.html" class="top-selling-image">
                                        <img src="{{asset('template/assets/images/veg-2/top-selling/16.jpg')}}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h5>Dates Medjoul Premium Imported</h5>
                                        </a>
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
                                        <h6>$ 70.00</h6>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Selling Section End -->


{{-- @include('front.components.noproducts'); --}}


