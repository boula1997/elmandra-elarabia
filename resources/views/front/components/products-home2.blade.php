    <!-- Product Section Start -->
    <section>
        <div class="container-fluid-lg">
            <div class="title">
                <h2>{{ page('product_home')->title }}</h2>
                <span class="title-leaf">
                    <svg class="icon-width">
                        <use xlink:href="{{asset('template/assets/svg/leaf.svg#leaf')}}"></use>
                    </svg>
                </span>
                <p>{{ page('product_home')->subtitle }}</p>
            </div>
            <div class="product-border border-row">
                <div class="slider-6_2 no-arrow">
                    @foreach ($products as $product)
                        @if($loop->iteration <= 20)
                        <div class="col-3 px-0 p-3">
                            <div class="product-box wow fadeIn">
                                <div class="product-image">
                                    <a href="{{ route('front.show.product',$product->id) }}">
                                        <img src="{{ asset($product->image) }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <ul class="product-option justify-content-around">

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="{{ route('front.show.product',$product->id) }}">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-detail">
                                    <a href="product-left-thumbnail.html">
                                        <h6 class="name name-2 h-100">{{ $product->title }}</h6>
                                    </a>

                             

                                    <h6 class="sold weight textus-content fw-normal">{{$product->unit}}</h6>

                                    <div class="counter-box">
                                        <h6 class="sold theme-color"><span class="theme-color">{{ $product->price_bd }}</span> <del>{{ $product->price}}</del>
                                            {{ app()->getLocale() == 'ar' ? 'SAR' : '$' }}</h6>

                                        <div class="addtocart_btn pt-5">


                                            @if (auth('web')->user())
                                                <button
                                                    class="add-button addcart-button btn buy-button text-light addCart"
                                                    product_id="{{ $product->id }}">
                                                    <span>{{ __('general.add') }}</span>
                                                    <i class="fa-solid fa-plus px-2"></i>
                                                </button>
                                            @else
                                                <a href="{{ route('user.login') }}">
                                                    <button
                                                        class="add-button addcart-button btn buy-button text-light">
                                                        <span>{{ __('general.add') }}</span>
                                                        <i class="fa-solid fa-plus px-2"></i>
                                                    </button>
                                                </a>
                                            @endif
                                            <div class="qty-box {{ isInCart($product->id) ? 'cart_qty open' : 'cart_qty' }}">
                                                <div class="input-group">
                                                    <button type="button" class="btn qty-left-minus"
                                                        data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input
                                                        class="form-control input-number qty-input itemCount"
                                                        type="text" name="itemCount"
                                                        value="{{ getQuantity($product->id) }}"
                                                        hash="{{ getHash($product->id) }}">
                                                    <button type="button" class="btn qty-right-plus"
                                                        data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden=true"></i>
                                                    </button>
                                                </div>
                                            </div>
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
    </section>
    <!-- Product Section End -->

