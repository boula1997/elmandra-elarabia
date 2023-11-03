<div class="container">
    @foreach ($subcategories as $subcategory)
        @if (count($subcategory->products)> 0)
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
                                    {{-- <div>
                                        <h5 class="text-dark mb-0">{{ __('general.stock') }} {{$product->stock}}</h5>
                                    </div> --}}
                                    <div class="d-flex justify-content-between">

                                        <p class="small text-danger"><s>{{ $product->price_bd }} {{ __('general.pound') }}</s></p>
                                        <h5 class="text-dark mb-0">{{ $product->price }} {{ __('general.pound') }}</h5>
                                    </div>

                                    <button
                                        class="btn  btn-sm w-100 mt-1 addCart {{ isInCart($product->id) ? 'd-none' : 'btn-primary' }}"
                                        product_id="{{ $product->id }}"><i class="fas fa-shopping-cart"></i>
                                        {{ __('general.add_to_cart') }}</button>

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

</div>



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
