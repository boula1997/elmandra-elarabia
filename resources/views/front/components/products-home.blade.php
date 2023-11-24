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
                            <div>
                                    <div class="row m-0">

                                        <div class="col-12 px-0">
                                            <div class="product-box wow fadeIn">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.html">
                                                        <img src="{{ asset($product->image) }}"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <ul class="product-option justify-content-around">

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                            <a href="compare.html">
                                                                <i data-feather="refresh-cw"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                            <a href="wishlist.html" class="notifi-wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <a href="product-left-thumbnail.html">
                                                        <h6 class="name name-2 h-100">{{ $product->title }}</h6>
                                                    </a>

                                                    <div class="product-rating mt-2">
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

                                                    <h6 class="sold weight textus-content fw-normal">1 KG</h6>

                                                    <div class="counter-box">
                                                        <h6 class="sold theme-color">{{ $product->price }} {{ app()->getLocale()=='ar'?'L.E':'$' }}</h6>

                                                        <div class="addtocart_btn pt-5">
                                                            <button class="add-button addcart-button btn buy-button text-light">
                                                                <span>{{ __('general.add') }}</span>
                                                                <i class="fa-solid fa-plus px-2"></i>
                                                            </button>
                                                            <div class="qty-box cart_qty">
                                                                <div class="input-group">
                                                                    <button type="button" class="btn qty-left-minus"
                                                                        data-type="minus" data-field="">
                                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                                    </button>
                                                                    <input class="form-control input-number qty-input" type="text"
                                                                        name="quantity" value="1">
                                                                    <button type="button" class="btn qty-right-plus"
                                                                        data-type="plus" data-field="">
                                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 px-0">
                                            <div class="product-box wow fadeIn">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.html">
                                                        <img src="{{ asset($product->image) }}"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <ul class="product-option justify-content-around">

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                            <a href="compare.html">
                                                                <i data-feather="refresh-cw"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                            <a href="wishlist.html" class="notifi-wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <a href="product-left-thumbnail.html">
                                                        <h6 class="name name-2 h-100">{{ $product->title }}</h6>
                                                    </a>

                                                    <div class="product-rating mt-2">
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

                                                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                                    <div class="counter-box">
                                                        <h6 class="sold theme-color">{{ $product->price }} {{ app()->getLocale()=='ar'?'L.E':'$' }}</h6>

                                                        <div class="addtocart_btn pt-5">
                                                            <button class="add-button addcart-button btn buy-button text-light">
                                                                <span>{{ __('general.add') }}</span>
                                                                <i class="fa-solid fa-plus px-2"></i>
                                                            </button>
                                                            <div class="qty-box cart_qty">
                                                                <div class="input-group">
                                                                    <button type="button" class="btn qty-left-minus"
                                                                        data-type="minus" data-field="">
                                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                                    </button>
                                                                    <input class="form-control input-number qty-input" type="text"
                                                                        name="quantity" value="1">
                                                                    <button type="button" class="btn qty-right-plus"
                                                                        data-type="plus" data-field="">
                                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-12 px-0">
                                            <div class="product-box wow fadeIn" data-wow-delay="0.1s">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.html">
                                                        <img src="{{asset('template/assets/images/veg-2/product/2.png')}}"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <ul class="product-option justify-content-around">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                            <a href="compare.html">
                                                                <i data-feather="refresh-cw"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                            <a href="wishlist.html" class="notifi-wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <a href="product-left-thumbnail.html">
                                                        <h6 class="name name-2 h-100">Fresh Organic Broccoli Crown</h6>
                                                    </a>

                                                    <div class="product-rating mt-2">
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
                                                                <i data-feather="star"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star"></i>
                                                            </li>
                                                        </ul>
                                                        <span>(34)</span>
                                                    </div>

                                                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                                    <div class="counter-box">
                                                        <h6 class="sold theme-color">$ 80.00</h6>

                                                        <div class="addtocart_btn pt-5">
                                                            <button class="add-button addcart-button btn buy-button text-light">
                                                                <span>Add</span>
                                                                <i class="fa-solid fa-plus px-2"></i>
                                                            </button>
                                                            <div class="qty-box cart_qty">
                                                                <div class="input-group">
                                                                    <button type="button" class="btn qty-left-minus"
                                                                        data-type="minus" data-field="">
                                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                                    </button>
                                                                    <input class="form-control input-number qty-input" type="text"
                                                                        name="quantity" value="1">
                                                                    <button type="button" class="btn qty-right-plus"
                                                                        data-type="plus" data-field="">
                                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                            </div>
                            @else
                            @break
                        @endif  
                    @endforeach

                    {{-- <div>
                        <div class="row m-0">
                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{asset('template/assets/images/veg-2/product/3.png')}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name name-2 h-100">Fresh Cavendish Banana</h6>
                                        </a>

                                        <div class="product-rating mt-2">
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
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn pt-5">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus px-2"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{asset('template/assets/images/veg-2/product/4.png')}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name name-2 h-100">Fresh Organic Kivi</h6>
                                        </a>

                                        <div class="product-rating mt-2">
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
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn pt-5">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus px-2"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row m-0">
                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{asset('template/assets/images/veg-2/product/5.png')}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name name-2 h-100">Organic Green Lemon</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn pt-5">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus px-2"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{asset('template/assets/images/veg-2/product/6.png')}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name name-2 h-100">Organic Orange</h6>
                                        </a>

                                        <div class="product-rating mt-2">
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

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn pt-5">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus px-2"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row m-0">
                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{asset('template/assets/images/veg-2/product/7.png')}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name name-2 h-100">Green lettuce</h6>
                                        </a>

                                        <div class="product-rating mt-2">
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

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn pt-5">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus px-2"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{asset('template/assets/images/veg-2/product/8.png')}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name name-2 h-100">Green Papaya</h6>
                                        </a>

                                        <div class="product-rating mt-2">
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

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn pt-5">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus px-2"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row m-0">
                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{asset('template/assets/images/veg-2/product/9.png')}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name name-2 h-100">Green Capsicum</h6>
                                        </a>

                                        <div class="product-rating mt-2">
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

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn pt-5">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus px-2"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{asset('template/assets/images/veg-2/product/10.png')}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name name-2 h-100">Organic Fresh Strawberry</h6>
                                        </a>

                                        <div class="product-rating mt-2">
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

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn pt-5">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus px-2"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row m-0">
                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{asset('template/assets/images/veg-2/product/7.png')}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name name-2 h-100">Green lettuce</h6>
                                        </a>

                                        <div class="product-rating mt-2">
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

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn pt-5">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus px-2"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{asset('template/assets/images/veg-2/product/8.png')}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name name-2 h-100">Green Papaya</h6>
                                        </a>

                                        <div class="product-rating mt-2">
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

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn pt-5">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus px-2"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
{{-- <div class="container">
    @foreach ($subcategories as $subcategory)
        @if (count($subcategory->products) > 0)
            <div id="tab-{{ $loop->iteration }}"
                class="tab-pane fade show p-0 {{ $loop->iteration == 1 ? 'active' : '' }}">
                <div class="row g-5">
                    <h1>{{ __('general.bestsellerin') }} {{ $subcategory->title }}</h1>
                    @foreach ($subcategory->products as $product)
                        <div class="col-md-12 col-lg-3 mb-3 mb-lg-3">
                            <div class="card">
                                <div class="img-product-container">
                                    <img src="{{ asset($product->image) }}" class="card-img-top img-product"
                                        alt="Laptop" />
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <h5 class="text-limit" style="--lines:1;" title="{{ $product->title }}">
                                            {{ $product->title }}</h5>
                                    </div>
                                    <div class="d-flex justify-content-between">

                                        <p class="small text-danger"><s>{{ $product->price_bd }}
                                                {{ __('general.pound') }}</s></p>
                                        <h5 class="text-dark mb-0">{{ $product->price }} {{ __('general.pound') }}</h5>
                                    </div>

                                    @if (auth('web')->user())
                                        <button
                                            class="btn  btn-sm w-100 mt-1 addCart {{ isInCart($product->id) ? 'd-none' : 'btn-primary' }}"
                                            product_id="{{ $product->id }}"><i class="fas fa-shopping-cart"></i>
                                            {{ __('general.add_to_cart') }}</button>
                                    @else
                                        <a href="{{ route('addTo.cart',$product->id) }}">
                                            <button
                                                class="btn  btn-sm w-100 mt-1  {{ isInCart($product->id) ? 'd-none' : 'btn-primary' }}"
                                                product_id="{{ $product->id }}"><i class="fas fa-shopping-cart"></i>
                                                {{ __('general.add_to_cart') }}</button>
                                        </a>
                                    @endif


                                    <button
                                        class="btn  btn-sm w-100 mt-1 removeCart {{ isInCart($product->id) ? 'btn-danger' : 'd-none' }}"
                                        hash="{{ getHash($product->id) }}"><i class="fas fa-trash"></i>
                                        {{ __('general.remove_from_cart') }}</button>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    @endforeach

</div> --}}



@push('js')
    <script>
        $('.addCart').on('click', function(e) {
            $(this).addClass('disabled');
            e.preventDefault();
            var product_id = $(this).attr('product_id');
            let url = "{{ route('addTo.cart', ':id') }}";
            url = url.replace(':id', product_id);
            $.ajax({
                type: 'get',
                url: url,
                success: (response) => {
                    $(this).removeClass('disabled');
                    console.log(response);
                    $('.cart-count').text(response.count);
                    $(this).addClass('d-none').next().removeClass('d-none btn btn-primary').addClass(
                        'btn btn-danger').attr('hash', response.hash);
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "{{ app()->getLocale() == 'ar' ? 'toast-top-left' : 'toast-top-right' }}",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    };

                    toastr.success("{{ __('general.added_successfully') }}");

                },
                error: function(response) {
                    alert(response.error);
                    $(".err").addClass("d-block");
                    $(".err").removeClass("d-none");
                }
            });
        });

        $('.removeCart').on('click', function(e) {
            $(this).addClass('disabled');
            e.preventDefault();
            var hash = $(this).attr('hash');
            let url = "{{ route('removeFrom.cart', ':hash') }}";
            url = url.replace(':hash', hash);
            $.ajax({
                type: 'get',
                url: url,
                success: (response) => {
                    $(this).removeClass('disabled');
                    $(this).addClass('d-none').prev().removeClass('d-none btn btn-danger').addClass(
                        'btn btn-primary').attr('hash', '');
                    $('.cart-count').text(response.count);
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "{{ app()->getLocale() == 'ar' ? 'toast-top-left' : 'toast-top-right' }}",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": " linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    };

                    toastr.success("{{ __('general.removed_successfully') }}");
                },
                error: function(response) {
                    alert(response.error);
                    $(".err").addClass("d-block");
                    $(".err").removeClass("d-none");
                }
            });
        });
    </script>
@endpush
