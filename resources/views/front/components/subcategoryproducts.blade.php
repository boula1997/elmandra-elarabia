@if (count($subcategory->products) > 0)
<section>
    <div class="container-fluid-lg">
        <div class="title">
            <h2>{{ $subcategory->title }}</h2>
            <span class="title-leaf">
                <svg class="icon-width">
                    <use xlink:href="{{asset('template/assets/svg/leaf.svg#leaf')}}"></use>
                </svg>
            </span>
            <p>{{ page('product_home')->subtitle }}</p>
        </div>
        <div class="product-border">
            <div class="no-arrow">
                <div>
                    <div class="row m-0">
                        @foreach ($subcategory->products as $product)
                            @if ($loop->iteration <= 20)
                                <div class="col-3 px-0 p-3">
                                    <div class="product-box wow fadeIn">
                                        <div class="product-image">
                                            <a href="{{ route('front.show.product', $product->id) }}" class="position-relative">
                                                <img src="{{ asset($product->image) }}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                    @if (in_array($product->id,topSelling()))                                                            
                                                    <span
                                                        class="position-absolute top-0 right-5 start-100 translate-top badge rounded-pill bg-danger">
                                                        الاكثر مبيعا
                                                        <span class="visually-hidden">unread messages</span>
                                                    </span>
                                                    @endif
                                            </a>
                                            <ul
                                                class="product-option justify-content-center eye-show bg-transparent text-white">

                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="{{ route('front.show.product', $product->id) }}">
                                                        <i class="fas fa-eye text-white fa-lg fs-1"></i>

                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <div>

                                                <a href="product-left-thumbnail.html">
                                                    <h6
                                                        class="name name-2 h-100 {{ in_array($product->id, topSelling()) ? 'text-danger' : '' }}">
                                                        {{ $product->title }}</h6>
                                                </a>


                                                <h6 class="sold weight textus-content fw-normal">
                                                    {{ $product->size}} {{ $product->translate(app()->getLocale())->unit}}</h6>
                                            </div>

                                            <div class="counter-box">
                                                <h6 class="price"><span
                                                        class="theme-color">{{ $product->price_bd }}</span>
                                                    <del>{{ $product->price }}</del>
                                                    {{ app()->getLocale() == 'ar' ? 'ر.س' : '$' }}
                                                </h6>

                                                <div class="addtocart_btn pt-5">


                                                    @if (auth('web')->user())
                                                        <button
                                                            class="add-button addcart-button btn buy-button text-light addCart"
                                                            index="{{ $loop->index }}"
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
                                                    <div
                                                        class="qty-box {{ isInCart($product->id) ? 'cart_qty open' : 'cart_qty' }}">
                                                        <div class="input-group">
                                                            <button type="button" class="btn qty-left-minus"
                                                                data-type="minus" data-field="">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <input
                                                                class="form-control input-number qty-input itemCount loop{{ $loop->index }}"
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
            var index = $(this).attr('index');
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
