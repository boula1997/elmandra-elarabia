@if (count($subcategory->products) > 0)
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
                @foreach ($subcategory->products as $product)
                    @if($loop->iteration <= 20)
                        <div>
                                <div class="row m-0">

                                    <div class="col-12 px-0">
                                        <div class="product-box wow fadeIn">
                                            <div class="product-image">
                                                <a href="{{ route('front.show.product',$product->id) }}">
                                                    <img src="{{ asset($product->image) }}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <ul class="product-option justify-content-around">

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                        <a href="{{ route('front.show.product',$product->id) }}" >
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
                                                <a href="{{ route('front.show.product',$product->id) }}">
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
                                                                <span >{{ __('general.add') }}</span>
                                                                <i class="fa-solid fa-plus px-2"></i>
                                                            </button>
                                                        </a>
                                                    @endif
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
                                                                    <span >{{ __('general.add') }}</span>
                                                                    <i class="fa-solid fa-plus px-2"></i>
                                                                </button>
                                                            </a>
                                                        @endif
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
                        @else
                        @break
                    @endif  
                @endforeach

            </div>
        </div>
    </div>
</section>
@endif

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
                    $(this).addClass('d-none').next().removeClass('d-none btn btn-primary').attr('hash', response.hash);
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
                    $(this).addClass('d-none').prev().addClass(
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
                        "hideEasing": "linear",
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
