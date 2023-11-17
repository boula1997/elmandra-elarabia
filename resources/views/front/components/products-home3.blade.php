    <!-- Product Section Start -->
    <section>
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="slider-4-1 ratio_65 no-arrow product-wrapper">
                        @foreach ($products as $product)
                            <div>
                                <div class="product-slider wow fadeInUp">
                                    <a href="shop-left-sidebar.html" class="product-slider-image">
                                        <img src="{{asset($product->image)}}" class="w-100 blur-up lazyload rounded-3"
                                            alt="">
                                    </a>

                                    <div class="product-slider-detail">
                                        <div>
                                            <a href="#" class="d-block">
                                                <h3 class="text-title">{{ $product->title }}</h3>
                                            </a>
                                            <h5>{{ $product->subcategory->title }}</h5>
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
                                            <h6>By <span class="theme-color">{{ $product->subcategory->category->title }}</span></h6>
                                            <button onclick="location.href = 'shop-left-sidebar.html';"
                                                class="btn btn-animation product-button btn-sm">{{ __('general.shop_now') }}<i
                                                    class="fa-solid fa-arrow-right icon"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- <div>
                            <div class="product-slider wow fadeInUp" data-wow-delay="0.05s">
                                <a href="shop-left-sidebar.html" class="product-slider-image">
                                    <img src="{{asset('template/assets/images/veg-2/pro/2.jpg')}}" class="w-100 blur-up lazyload rounded-3"
                                        alt="">
                                </a>

                                <div class="product-slider-detail">
                                    <div>
                                        <a href="shop-left-sidebar.html" class="d-block">
                                            <h3 class="text-title">Organic Meat Prepared</h3>
                                        </a>
                                        <h5>Delivered to Your Home</h5>
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
                                        <h6>By <span class="theme-color">Nestfood</span></h6>
                                        <button onclick="location.href = 'shop-left-sidebar.html';"
                                            class="btn btn-animation product-button btn-sm">Shop Now <i
                                                class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-slider wow fadeInUp" data-wow-delay="0.1s">
                                <a href="shop-left-sidebar.html" class="product-slider-image">
                                    <img src="{{asset('template/assets/images/veg-2/pro/3.jpg')}}" class="w-100 blur-up lazyload rounded-3"
                                        alt="">
                                </a>

                                <div class="product-slider-detail">
                                    <div>
                                        <a href="shop-left-sidebar.html" class="d-block">
                                            <h3 class="text-title">Buy More & Save More</h3>
                                        </a>
                                        <h5>Fresh Vegetables & Fruits</h5>
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
                                        <h6>By <span class="theme-color">Nestfood</span></h6>
                                        <button onclick="location.href = 'shop-left-sidebar.html';"
                                            class="btn btn-animation product-button btn-sm">Shop Now <i
                                                class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-slider wow fadeInUp" data-wow-delay="0.15s">
                                <a href="shop-left-sidebar.html" class="product-slider-image">
                                    <img src="{{asset('template/assets/images/veg-2/pro/4.jpg')}}" class="w-100 blur-up lazyload rounded-3"
                                        alt="">
                                </a>

                                <div class="product-slider-detail">
                                    <div>
                                        <a href="shop-left-sidebar.html" class="d-block">
                                            <h3 class="text-title">Fresh Fruits on Go</h3>
                                        </a>
                                        <h5>Fresh Vegetables & Fruits</h5>
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
                                        <h6>By <span class="theme-color">Nestfood</span></h6>
                                        <button onclick="location.href = 'shop-left-sidebar.html';"
                                            class="btn btn-animation product-button btn-sm">Shop Now <i
                                                class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->


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
