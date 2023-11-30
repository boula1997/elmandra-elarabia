<div class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">

                <div class="card full {{ count(cart()->getItems()) > 0 ? '' : 'd-none' }}">
                    <div class="card-body p-4">

                        <div class="row">

                            <div class="col-lg-7" data-aos="fade-right">
                                <h5 class="mb-3"><a href="{{ route('front.home') }}" class="text-body"><i
                                            class="fas fa-long-arrow-alt-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }} me-2"></i>{{ __('general.continue_shopping') }}</a>
                                </h5>
                                <hr>

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div>
                                        <p class="mb-1">{{ __('general.shopping_cart') }}</p>
                                        <p class="mb-0">{{ __('general.you_have') }} <span
                                                class="cart-count">{{ count(cart()->getItems()) }}</span>
                                            {{ __('general.items_in_your_cart') }}</p>
                                    </div>
                                </div>
                                @foreach (cart()->getItems() as $item)
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex flex-row align-items-center">
                                                    <div>
                                                        <img src="{{ cartItem($item->getId())->image }}"
                                                            class="img-fluid rounded-3" alt="Shopping item"
                                                            style="width: 65px;">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5>{{ cartItem($item->getId())->title }}</h5>
                                                        {{-- <p class="small mb-0">256GB, Navy Blue</p> --}}
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                    <div style="width: 50px;">
                                                        <input class="itemCount" type="number" min="1" max="{{ cartItem($item->getId())->stock }}" style="width: 40px"
                                                            class="w-25" name="itemCount"
                                                            value="{{ $item->get('quantity') }}"
                                                            hash="{{ $item->getHash() }}">
                                                </div>
                                                    <div style="width: 80px;">
                                                        <h5 class="mb-0"><span class="itemTotalPrice">{{ $item->get('price')* $item->get('quantity') }}</span> {{ __('general.pound') }}</h5>
                                                    </div>
                                                    <button class="removeCart btn btn-transparent"
                                                        hash="{{ $item->getHash() }}">
                                                        <i class="fas fa-trash-alt tetx-danger"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-lg-5" data-aos="fade-left">

                                <div class="card bg-primary text-white rounded-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h5 class="mb-0 text-white">{{ __('general.card_details') }}</h5>
                                            <img src="{{auth('web')->user()->image}}"
                                                class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                                        </div>


                                        <form id="order-form" method="POST" class="mt-4">
                                            @csrf
                                            <div class="row mb-4">
                                                <div class="col-md-12">
                                                    <div class="form-outline form-white">
                                                        <label class="form-label"
                                                            for="name">{{ __('general.name') }}</label>
                                                        <input type="text" name="name"
                                                            class="form-control form-control-lg"
                                                            placeholder="{{ __('general.name') }}" value="{{ old('name',auth('web')->user()->name) }}" />
                                                        <div id="name" class="err"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-md-12">
                                                    <label class="form-label"
                                                        for="email">{{ __('general.email') }}</label>
                                                    <div class="form-outline form-white">
                                                        <input type="text" name="email"
                                                            class="form-control form-control-lg"
                                                            placeholder="{{ __('general.email') }}" value="{{ old('email',auth('web')->user()->email) }}"  />
                                                        <div id="email" class="err"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-md-12">
                                                    <div class="form-outline form-white">
                                                        <label class="form-label"
                                                            for="phone">{{ __('general.phone') }}</label>
                                                        <input type="text" name="phone"
                                                            class="form-control form-control-lg"
                                                            placeholder="{{ __('general.phone') }}" value="{{ old('phone',auth('web')->user()->phone) }}"  />
                                                        <div id="phone" class="err"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-md-12">
                                                    <label class="form-label"
                                                        for="address">{{ __('general.address') }}</label>
                                                    <div class="form-outline form-white">
                                                        <input type="text" name="address"
                                                            class="form-control form-control-lg"
                                                            placeholder="{{ __('general.address') }}" value="{{ old('address',auth('web')->user()->address) }}"  />
                                                        <div id="address" class="err"></div>
                                                    </div>
                                                </div>
                                            </div>


                                            <hr class="my-4">
{{-- 
                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">{{ __('general.subtotal') }}</p>
                                                <p class="mb-2 cart-total">{{ cart()->getTotal() }} $</p>
                                            </div> --}}

                                            
                                            <div class="d-flex justify-content-between mb-4">
                                                <p class="mb-2"> {{ __('general.total') }} </p>
                                                <p class="mb-2"><span class="cart-total">{{ cart()->getTotal() }}</span> {{ __('general.pound') }}</p>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">{{ __('general.delivery') }}</p>
                                                <p class="mb-2">50 {{ __('general.pound') }}</p>
                                            </div>


                                            <div class="col-12 d-flex justify-content-center">
                                                <button type="submit" class="btn btn-secondary  btn-order">
                                                    <i class="fa fa-spinner fa-spin d-none " id="spinner-order"></i>
                                                    <div class="d-flex justify-content-between">
                                                        <p><span class="cart-total-shipping">{{ cart()->getTotal()+50 }}</span> {{ __('general.pound') }}</p>
                                                        &nbsp;&nbsp;
                                                        <span>{{ __('general.checkout') }} <i
                                                                class="fas fa-long-arrow-alt-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} ms-2"></i></span>
                                                    </div>
                                                </button>
                                            </div>
                                        </form>


                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="card empty {{ count(cart()->getItems()) == 0 ? '' : 'd-none' }}"  data-aos="zoom-in-down">
                    <div class="card-header">
                        <h5>{{ __('general.cart') }}</h5>
                    </div>
                    <div class="card-body cart">
                        <div class="col-sm-12 empty-cart-cls text-center">
                            <img src="{{ asset('images/empty-cart.svg') }}" width="30%" height="30%"
                                class="img-fluid mb-4 mr-3">
                            <h3><strong>{{ __('general.your_cart_is_empty') }}</strong></h3>
                            <h4>{{ __('general.add_something_to_make') }} </h4>
                            <a href="{{ route('front.home') }}" class="btn btn-primary cart-btn-transform m-3"
                                data-abc="true">{{ __('general.continue_shopping') }}</a>


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>




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
                    $(this).parents().eq(3).remove();
                    $('.cart-count').text(response.count);
                    $('.cart-total').text(response.total);
                    $('.cart-total-shipping').text((response.total)+50);
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
    {{-- Item Count --}}
    <script>
        $('.itemCount').on('input', function(e) {
            e.preventDefault(); 
            var hash = $(this).attr('hash');
            var quantity = $(this).val();
            let url = "{{ route('updateItem.count', [':hash',':quantity']) }}";
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
                    $('.cart-total-shipping').text((response.total)+50);
                    $(this).parent().parent().find('.itemTotalPrice').text(response.price*response.quantity);
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
    </script>
    {{-- Item Count --}}

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
@endpush
