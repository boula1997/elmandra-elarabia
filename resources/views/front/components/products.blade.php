@if (count($products) > 0)
    <!-- Product Section Start -->
    <section>
        <div class="container-fluid-lg">

            <div class="title">
                <h2>{{ page('product_home')->title }}</h2>
                <span class="title-leaf">
                    <svg class="icon-width">
                        <use xlink:href="{{ asset('template/assets/svg/leaf.svg#leaf') }}"></use>
                    </svg>
                </span>
                <p>{{ page('product_home')->subtitle }}</p>
            </div>

            <div class="product-border">
                <div class="no-arrow">
                    <div>
                        <div class="row m-0">
                            @foreach ($products as $product)
                                @if ($loop->iteration <= 20)
                                    <div class="col-3 px-0 p-3">
                                        <div class="product-box wow fadeIn">
                                            <div class="product-image">
                                                <a href="{{ route('front.show.product', $product->id) }}">
                                                    <img src="{{ asset($product->image) }}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <ul class="product-option justify-content-around">

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                        <a href="{{ route('front.show.product', $product->id) }}">
                                                            <i data-feather="eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <div>

                                                    <a href="product-left-thumbnail.html">
                                                        <h6 class="name name-2 h-100">{{ $product->title }}</h6>
                                                    </a>


                                                    <h6 class="sold weight textus-content fw-normal">{{$product->unit}}</h6>
                                                </div>

                                                <div class="counter-box">
                                                    <h6 class="sold theme-color"><span class="theme-color">{{ $product->price_bd }}</span> <del>{{ $product->price}}</del>
                                                        {{ app()->getLocale() == 'ar' ? 'SAR' : '$' }}</h6>

                                                    <div class="addtocart_btn pt-5">


                                                        @if (auth('web')->user())
                                                            <button
                                                                class="add-button addcart-button btn buy-button text-light addCart" index="{{ $loop->index }}"
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
    </div>
</section>
<!-- Product Section End -->
@endif


@include('front.components.noproducts');

@push('js')
    <script>
        $('.addCart').on('click', function(e) {
            e.preventDefault();
            var product_id = $(this).attr('product_id');
            var index = $(this).attr('index');
            $('.loop'+index).val(1);
            let url = "{{ route('addTo.cart', ':id') }}";
            url = url.replace(':id', product_id);
            $.ajax({
                type: 'get',
                url: url,
                success: (response) => {
                    $(this).next().children().children().next().attr('hash', response.hash);
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

    {{-- Item Count --}}
    <script>
        $('.itemCount').on('change', function(e) {
            console.log('clicked!');
            e.preventDefault();
            var hash = $(this).attr('hash');
            var quantity = $(this).val();
            let url = "{{ route('updateItem.count', [':hash', ':quantity']) }}";
            url = url.replace(':hash', hash);
            url = url.replace(':quantity', quantity);
            $.ajax({
                type: 'get',
                url: url,
                data: {
                    "_token": "{{ csrf_token() }}",
                    'quantity': $("input[name=quantity]").val(),
                },
                success: (response) => {
                    $('.cart-count').text(response.count);
                    $('.cart-total').text(response.total);
                    $('.cart-total-shipping').text((response.total) + 50);
                },
                error: function(response) {

                    $(".err").addClass("d-block");
                    $(".err").removeClass("d-none");
                }
            });
        });
        $('.itemCount').next().on('click', function(e) {
            console.log('clicked!');
            e.preventDefault();
            var hash = $(this).prev().attr('hash');
            var quantity = $(this).prev().val();
            let url = "{{ route('updateItem.count', [':hash', ':quantity']) }}";
            url = url.replace(':hash', hash);
            url = url.replace(':quantity', quantity);
            $.ajax({
                type: 'get',
                url: url,
                data: {
                    "_token": "{{ csrf_token() }}",
                    'quantity': $("input[name=quantity]").val(),
                },
                success: (response) => {
                    $('.cart-count').text(response.count);
                    $('.cart-total').text(response.total);
                    $('.cart-total-shipping').text((response.total) + 50);
                },
                error: function(response) {

                    $(".err").addClass("d-block");
                    $(".err").removeClass("d-none");
                }
            });
        });
        $('.itemCount').prev().on('click', function(e) {
            console.log('clicked!');
            e.preventDefault();
            var hash = $(this).next().attr('hash');
            var quantity = $(this).next().val();
            let url = "{{ route('updateItem.count', [':hash', ':quantity']) }}";
            url = url.replace(':hash', hash);
            url = url.replace(':quantity', quantity);
            $.ajax({
                type: 'get',
                url: url,
                data: {
                    "_token": "{{ csrf_token() }}",
                    'quantity': $("input[name=quantity]").val(),
                },
                success: (response) => {
                    $('.cart-count').text(response.count);
                    $('.cart-total').text(response.total);
                    $('.cart-total-shipping').text((response.total) + 50);

                },
                error: function(response) {

                    $(".err").addClass("d-block");
                    $(".err").removeClass("d-none");
                }
            });
        });
    </script>
    {{-- Item Count --}}
@endpush
