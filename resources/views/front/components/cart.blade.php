    <!-- Cart Section Start -->
    <section class="cart-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-sm-5 g-3">
               
                    <div class="col-xxl-9">
                        <div class="cart-table">
                            <div class="table-responsive-xl">
                                <table class="table">
                                    <tbody>
                                        @foreach (cart()->getItems() as $item)
                                            <tr class="product-box-contain">
                                                <td class="product-detail">
                                                    <div class="product border-0">
                                                        <a href="product-left-thumbnail.html" class="product-image">
                                                            <img src="{{ cartItem($item->getId())->image }}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                        <div class="product-detail">
                                                            <ul>
                                                                <li class="name">
                                                                    <a
                                                                        href="product-left-thumbnail.html">{{ cartItem($item->getId())->title }}</a>
                                                                </li>

                                                                <li class="text-content"><span class="text-title">{{ __('general.sold_by') }}</span> {{ __('general.asleltawfeer') }}</li>



                                                                <li>
                                                                    <h5 class="text-content d-inline-block"></h5>
                                                                    <span></span>
                                                                </li>

        

                                                                <li>
                                                                    <h5>{{ __('general.total') }} {{ $item->get('quantity') * $item->get('price') }}</h5>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="price">
                                                    <h4 class="table-title text-content">{{ __('general.price') }}</h4>
                                                    <h5>{{ $item->get('price') }}</h5>
                                                </td>

                                                <td class="quantity">
                                                    <h4 class="table-title text-content">{{ __('general.quantity') }}</h4>
                                                    <div class="quantity-price">
                                                        <div class="cart_qty">
                                                            <div class="input-group">
                                                                <button type="button" class="btn qty-left-minus"
                                                                    data-type="minus" data-field="">
                                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                                </button>
                                                                <input class="form-control input-number qty-input itemCount"
                                                                    type="text" name="itemCount"
                                                                    value="{{ $item->get('quantity') }}" price="{{ $item->get('price') }}"
                                                                    hash="{{ $item->getHash() }}" index="{{ $loop->index }}">
                                                                <button type="button" class="btn qty-right-plus"
                                                                    data-type="plus" data-field="">
                                                                    <i class="fa fa-plus" aria-hidden=true"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="subtotal">
                                                    <h4 class="table-title text-content">{{ __('general.total') }}</h4>
                                                    <h5 class="single-total{{ $loop->index }}">${{$item->get('price') * $item->get('quantity')}}</h5>
                                                </td>

                                                <td class="save-remove">
                                                    <h4 class="table-title text-content">{{ __('general.action') }}</h4>
                                                    <a class="save notifi-wishlist" href="javascript:void(0)">{{ __('general.save_for_later') }}</a>
                                                    <a class="remove close_button removeCart link"
                                                        hash="{{ $item->getHash() }}">{{ __('general.remove') }}</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            <div class="col-md-6">
                <div class="col-xxl-6">
                    <div class="summery-box p-sticky">
                        <div class="summery-header">
                            <h3>{{ __('general.cart_total') }}</h3>
                        </div>

                        <div class="summery-contain">
                            <div class="coupon-cart">
                                <h6 class="text-content mb-2">{{ __('general.coupon_apply') }}</h6>
                                <div class="mb-3 coupon-box input-group">
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="{{ __('general.enter_coupon_code') }}">
                                    <button class="btn-apply">{{ __('general.apply') }}</button>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <h4>Subtotal</h4>
                                    <h4 class="price">{{ cart()->getTotal() }}</h4>
                                </li>

                                <li>
                                    <h4>{{ __('general.coupon_discount') }}</h4>
                                    <h4 class="price">(-) 0.00</h4>
                                </li>

                                <li class="align-items-start">
                                    <h4>Shipping</h4>
                                    <h4 class="price text-end">$25</h4>
                                </li>
                            </ul>
                        </div>

                        <ul class="summery-total">
                            <li class="list-total border-top-0">
                                <h4>Total (USD)</h4>
                                <h4 class="price theme-color cart-total">${{ cart()->getTotal() +25 }}</h4>
                            </li>
                        </ul>
                        <br><br>
                        <br>
                    </div>
                </div>
            </div>
            <form method="post" id="order-form">
                <div class="col-md-6">
                    <div class="col-xxl-6">
                        <div class="summery-box p-sticky">
                            <div class="summery-header">
                                <h3>{{ __('general.personal_information') }}</h3>
                            </div>
    
                            <div class="summery-contain">
                                <div class="coupon-cart">
                                    <h6 class="text-content mb-2">{{ __('general.name') }}</h6>
                                    <div class="mb-3 coupon-box input-group">
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="{{ __('general.name') }}" name="name">
                                        <div id="name"></div>
                                    </div>
                                </div>
                                <div class="coupon-cart">
                                    <h6 class="text-content mb-2">{{ __('general.your_email') }}</h6>
                                    <div class="mb-3 coupon-box input-group">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="{{ __('general.your_email') }}" name="email">
                                        <div id="email"></div>
                                    </div>
                                </div>
                                <div class="coupon-cart">
                                    <h6 class="text-content mb-2">{{ __('general.address') }}</h6>
                                    <div class="mb-3 coupon-box input-group">
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="{{ __('general.address') }}" name="address">
                                        <div id="address"></div>
                                    </div>
                                </div>
                                <div class="coupon-cart">
                                    <h6 class="text-content mb-2">{{ __('general.phone') }}</h6>
                                    <div class="mb-3 coupon-box input-group">
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="{{ __('general.phone') }}" name="phone">
                                        <div id="phone"></div>
                                    </div>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="button-group cart-button">
                        <ul>
                            <li>
                                <button type="submit" class="btn btn-animation proceed-btn fw-bold">{{ __('general.process_to_checkout') }}</button>
                            </li>
    
                            <li>
                                <button onclick="location.href = '{{ route('front.show-products') }}';"
                                    class="btn btn-light shopping-button text-dark">
                                    <i class="fa-solid fa-arrow-left-long"></i>{{ __('general.return_to_shopping') }}</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </section>
    <!-- Cart Section End -->


    @push('js')
        <script>
            $('.removeCart').on('click', function(e) {
                e.preventDefault();
                var hash = $(this).attr('hash');
                let url = "{{ route('removeFrom.cart', ':hash') }}";
                url = url.replace(':hash', hash);
                $.ajax({
                    type: 'get',
                    url: url,
                    success: (response) => {
                        if (response.count > 0) {
                            $('.full').removeClass('d-none');
                            $('.empty').addClass('d-none');
                        } else {
                            $('.full').addClass('d-none');
                            $('.empty').removeClass('d-none');
                        }
                        $(this).parents().eq(1).remove();
                        $('.cart-count').text(response.count);
                        $('.cart-total').text(response.total);
                        $('.single-total').text(response.total);
                        $('.cart-total-shipping').text((response.total) + 50);
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

        <script>
            $('#order-form').submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                $(".err").empty();
                $(".err").addClass("d-none");
                $('#btn-order').attr('disabled', 'disabled').addClass('bg-secondary');
                $('#spinner-order').removeClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: "{{ route('front.order.post') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'name': $("input[name=name]").val(),
                        'email': $("input[name=email]").val(),
                        'phone': $("input[name=phone]").val(),
                        'address': $("input[name=address]").val(),
                    },
                    success: (response) => {
                        $('.cart-count').text(response.count);
                        $('.full').addClass('d-none');
                        $('.empty').removeClass('d-none');
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
                        console.log(response);
                        toastr.success(response.success);

                        this.reset();
                        $('#spinner-order').addClass('d-none');
                        $('#btn-order').removeAttr('disabled').removeClass(
                            'bg-secondary');
                        $('.alert-success').removeClass('d-none').text(response.success);
                        setTimeout(() => {
                            $('.alert-success').addClass('d-none').text(response.success);
                        }, 5000);
                    },
                    error: function(response) {
                        $('#spinner-order').addClass('d-none');
                        $('#btn-order').removeAttr('disabled').removeClass('bg-secondary');

                        $(".err").addClass("d-block");
                        $(".err").removeClass("d-none");
                        if (response.responseJSON.errors.name) {
                            $("#name").append(
                                `<div class="alert alert-danger my-1"  style="text-align:initial !important">${response.responseJSON.errors.name}</div>`
                            );
                        }
                        if (response.responseJSON.errors.email) {
                            $("#email").append(
                                `<div class="alert alert-danger text-initial my-1" style="text-align:initial !important">${response.responseJSON.errors.email}</div>`
                            );
                        }
                        if (response.responseJSON.errors.phone) {
                            $("#phone").append(
                                `<div class="alert alert-danger my-1"   style="text-align:initial !important">${response.responseJSON.errors.phone}</div>`
                            );
                        }

                        if (response.responseJSON.errors.address) {
                            $("#address").append(
                                `<div class="alert alert-danger text-initial my-1" style="text-align:initial !important">${response.responseJSON.errors.address}</div>`
                            );
                        }

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
                var index = $(this).attr('index');
                if (quantity == 0)
                $(this).parents().eq(4).remove();
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
                        $('.single-total'+index).text(quantity * $(this).attr('price'));
                        $('.cart-count').text(response.count);
                        $('.cart-total').text(response.total);
                        $('.cart-total-shipping').text((response.total) + 50);
                        $(this).parent().parent().find('.itemTotalPrice').text(response.price * response
                            .quantity);
                        // $('.itemTotalPrice').remove();
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
                var index = $(this).prev().attr('index');
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
                        $('.single-total'+index).text(quantity * $(this).prev().attr('price'));
                        $('.cart-count').text(response.count);
                        $('.cart-total').text(response.total);
                        $('.cart-total-shipping').text((response.total) + 50);
                        $(this).prev().parent().parent().find('.itemTotalPrice').text(response.price *
                            response.quantity);
                        // $('.itemTotalPrice').remove();
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
                var index = $(this).next().attr('index');
                if (quantity == 0)
                $(this).parents().eq(4).remove();
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
                        $('.single-total'+index).text(quantity * $(this).next().attr('price'));
                        $('.cart-count').text(response.count);
                        $('.cart-total').text(response.total);
                        $('.cart-total-shipping').text((response.total) + 50);
                        $(this).next().parent().parent().find('.itemTotalPrice').text(response.price *
                            response.quantity);
                        // $('.itemTotalPrice').remove();
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

                        $(".err").addClass("d-block");
                        $(".err").removeClass("d-none");
                    }
                });
            });
        </script>
        {{-- Item Count --}}
    @endpush
