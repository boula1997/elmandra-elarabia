<div class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="row">

                            <div class="col-lg-7">
                                <h5 class="mb-3"><a href="{{ route('front.home') }}" class="text-body"><i
                                            class="fas fa-long-arrow-alt-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }} me-2"></i>{{ __('general.continue_shopping') }}</a>
                                </h5>
                                <hr>

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div>
                                        <p class="mb-1">{{ __('general.shopping_cart') }}</p>
                                        <p class="mb-0">{{ __('general.you_have') }} <span id="cart-count2">{{ count(cart()->getItems()) }}</span>
                                            {{ __('general.items_in_your_cart') }}</p>
                                    </div>
                                    {{-- <div>
                                        <p class="mb-0"><span class="text-muted">{{ __('general.sort_by') }}:</span>
                                            <a href="#!" class="text-body">price <i
                                                    class="fas fa-angle-down mt-1"></i></a>
                                        </p>
                                    </div> --}}
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
                                                        <h5 class="fw-normal mb-0">2</h5>
                                                    </div>
                                                    <div style="width: 80px;">
                                                        <h5 class="mb-0">$900</h5>
                                                    </div>
                                                    <button class="removeCart btn btn-transparent"  hash="{{ $item->getHash() }}">
                                                        <i class="fas fa-trash-alt tetx-danger"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-lg-5">

                                <div class="card bg-primary text-white rounded-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h5 class="mb-0">{{ __('general.card_details') }}</h5>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                                                class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                                        </div>

                                        <p class="small mb-2">{{ __('general.card_type') }}</p>
                                        <a href="#!" type="submit" class="text-white"><i
                                                class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                                        <a href="#!" type="submit" class="text-white"><i
                                                class="fab fa-cc-visa fa-2x me-2"></i></a>
                                        {{-- <a href="#!" type="submit" class="text-white"><i
                          class="fab fa-cc-amex fa-2x me-2"></i></a> --}}
                                        <a href="#!" type="submit" class="text-white"><i
                                                class="fab fa-cc-paypal fa-2x"></i></a>

                                        <form class="mt-4">
                                            <div class="form-outline form-white mb-4">
                                                <input type="text" id="typeName"
                                                    class="form-control form-control-lg" siez="17"
                                                    placeholder="{{ __('general.cardholder_name') }}" />
                                                <label class="form-label"
                                                    for="typeName">{{ __('general.cardholder_name') }}</label>
                                            </div>

                                            <div class="form-outline form-white mb-4">
                                                <input type="text" id="typeText"
                                                    class="form-control form-control-lg" siez="17"
                                                    placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                                                <label class="form-label"
                                                    for="typeText">{{ __('general.card_number') }}</label>
                                            </div>

                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <div class="form-outline form-white">
                                                        <input type="text" id="typeExp"
                                                            class="form-control form-control-lg" placeholder="MM/YYYY"
                                                            size="7" id="exp" minlength="7"
                                                            maxlength="7" />
                                                        <label class="form-label"
                                                            for="typeExp">{{ __('general.expiration') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-outline form-white">
                                                        <input type="password" id="typeText"
                                                            class="form-control form-control-lg"
                                                            placeholder="&#9679;&#9679;&#9679;" size="1"
                                                            minlength="3" maxlength="3" />
                                                        <label class="form-label"
                                                            for="typeText">{{ __('general.cvv') }}</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">{{ __('general.subtotal') }}</p>
                                            <p class="mb-2">{{ cart()->getTotal() }}</p>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">{{ __('general.shipping') }}</p>
                                            <p class="mb-2">dd()</p>
                                        </div>

                                        <div class="d-flex justify-content-between mb-4">
                                            <p class="mb-2"> {{ __('general.total') }} </p>
                                            <p class="mb-2">$4818.00</p>
                                        </div>

                                        <div class="col-12 d-flex justify-content-center">
                                            <button type="button" class="btn btn-secondary">
                                                <div class="d-flex justify-content-between">
                                                    <span>$4818.00</span>
                                                    &nbsp;&nbsp;
                                                    <span>{{ __('general.checkout') }} <i
                                                            class="fas fa-long-arrow-alt-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} ms-2"></i></span>
                                                </div>
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
                    $(this).parents().eq(3).remove();
                    $('#cart-count2').text(response.count);
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
