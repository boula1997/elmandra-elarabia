
<!-- Product details page start -->

        <!-- Product Left Sidebar Start -->
        <section class="product-section">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-xxl-9 col-xl-8 col-lg-7 wow fadeInUp">
                        <div class="row g-4">

                            <div class="col-12 wow fadeInUp">
                                <div class="product-section-box">
                                    <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                                data-bs-target="#description" type="button" role="tab"
                                                aria-controls="description" aria-selected="true">{{ __('general.description') }}</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="info-tab" data-bs-toggle="tab"
                                                data-bs-target="#info" type="button" role="tab" aria-controls="info"
                                                aria-selected="false">{{ __('general.additional_info') }}</button>
                                        </li>


                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="review-tab" data-bs-toggle="tab"
                                                data-bs-target="#review" type="button" role="tab" aria-controls="review"
                                                aria-selected="false">{{ __('general.review') }}</button>
                                        </li>
                                    </ul>

                                    <div class="tab-content custom-tab" id="myTabContent">
                                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                                            aria-labelledby="description-tab">
                                            <div class="product-description">
                                                <div class="nav-desh">
                                                    <div class="desh-title">
                                                        <h5>{{ $product->title }} :</h5>
                                                    </div>
                                                    <p>{!!  $product->translate(app()->getLocale())->description !!}</p>
                                                </div>

                                                <div class="banner-contain nav-desh">
                                                    <img src="{{ asset($product->image) }}"
                                                        class="bg-img blur-up lazyload" alt="">
                                                    <div class="banner-details p-center banner-b-space w-100 text-center">
                                                        <div>
                                                            <h2 class="text-white">{{ $product->subcategory->category->title }}</h2>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="nav-desh">
                                                    <div class="desh-title">
                                                        <h5>{{ $product->company->title }} :</h5>
                                                    </div>
                                                    <p>{!! $product->company->translate(app()->getLocale())->description !!}</p>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                                            <div class="table-responsive">
                                                <table class="table info-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>{{ __('general.category') }}</td>
                                                            <td>{{ $product->subcategory->category->title }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{ __('general.subcategory') }}</td>
                                                            <td>{{ $product->subcategory->title }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{ __('general.price') }}</td>
                                                            <td>{{ $product->price }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{ __('general.price_bd') }}</td>
                                                            <td>{{ $product->price_bd }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{ __('general.company') }}</td>
                                                            <td>{{ $product->company->title }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>



                                        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                            <div class="review-box">
                                                <div class="row g-4">
                                                    <div class="col-xl-6">
                                                        <div class="review-title">
                                                            <h4 class="fw-500">{{ __('general.customer_reviews') }}</h4>
                                                        </div>

                                                        <div class="d-flex">
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
                                                                        <i data-feather="star"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i data-feather="star"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <h6 class="ms-3">4.2 Out Of 5</h6>
                                                        </div>

                                                        <div class="rating-box">
                                                            <ul>
                                                                <li>
                                                                    <div class="rating-list">
                                                                        <h5>5 Star</h5>
                                                                        <div class="progress">
                                                                            <div class="progress-bar" role="progressbar"
                                                                                style="width: 68%" aria-valuenow="100"
                                                                                aria-valuemin="0" aria-valuemax="100">68%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li>
                                                                    <div class="rating-list">
                                                                        <h5>4 Star</h5>
                                                                        <div class="progress">
                                                                            <div class="progress-bar" role="progressbar"
                                                                                style="width: 67%" aria-valuenow="100"
                                                                                aria-valuemin="0" aria-valuemax="100">67%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li>
                                                                    <div class="rating-list">
                                                                        <h5>3 Star</h5>
                                                                        <div class="progress">
                                                                            <div class="progress-bar" role="progressbar"
                                                                                style="width: 42%" aria-valuenow="100"
                                                                                aria-valuemin="0" aria-valuemax="100">42%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li>
                                                                    <div class="rating-list">
                                                                        <h5>2 Star</h5>
                                                                        <div class="progress">
                                                                            <div class="progress-bar" role="progressbar"
                                                                                style="width: 30%" aria-valuenow="100"
                                                                                aria-valuemin="0" aria-valuemax="100">30%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li>
                                                                    <div class="rating-list">
                                                                        <h5>1 Star</h5>
                                                                        <div class="progress">
                                                                            <div class="progress-bar" role="progressbar"
                                                                                style="width: 24%" aria-valuenow="100"
                                                                                aria-valuemin="0" aria-valuemax="100">24%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="review-title">
                                                            <h4 class="fw-500">{{ __('general.add_a_review') }}</h4>
                                                        </div>

                                                        <div class="row g-4">
                                                            <div class="col-md-6">
                                                                <div class="form-floating theme-form-floating">
                                                                    <input type="text" class="form-control" id="name"
                                                                        placeholder="{{ __('general.name') }}">
                                                                    <label for="name">{{ __('general.your_name') }}</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-floating theme-form-floating">
                                                                    <input type="email" class="form-control" id="email"
                                                                        placeholder="{{ __('general.email_address') }}">
                                                                    <label for="email">{{ __('general.email_address') }}</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-floating theme-form-floating">
                                                                    <input type="url" class="form-control" id="review1"
                                                                        placeholder="{{ __('general.give_your_review_a_title') }}">
                                                                    <label for="review1">{{ __('general.review_title') }}</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-floating theme-form-floating">
                                                                    <textarea class="form-control"
                                                                        placeholder="{{ __('general.leave_a_comment_here') }}"
                                                                        id="floatingTextarea2"
                                                                        style="height: 150px"></textarea>
                                                                    <label for="floatingTextarea2">{{ __('general.write_your_comment') }}</label>
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
                    </div>

                    <div class="col-xxl-3 col-xl-4 col-lg-5 d-none d-lg-block wow fadeInUp">
                        <div class="right-sidebar-box">

                            <!-- Trending Product -->
                            <div class="pt-25">
                                <div class="category-menu">
                                    <h3>{{ __('general.trending_products') }}</h3>

                                    <ul class="product-list product-right-sidebar border-0 p-0">
                                        @foreach ($product->subcategory->products as $product)
                                             @if ($loop->iteration <= 5)
                                                <li>
                                                    <div class="offer-product">
                                                        <a href="{{ route('front.show.product',$product->id) }}" class="offer-image">
                                                            <img src="{{ asset($product->image) }}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>

                                                        <div class="offer-detail">
                                                            <div>
                                                                <a href="{{ route('front.show.product',$product->id) }}">
                                                                    <h6 class="name">{{ $product->title }}</h6>
                                                                </a>
                                                                <h5 class="span-name">{{ $product->unit }}</h5>
                                                                <h6 class="price theme-color"><span class="theme-color">{{ $product->price_bd }}</span> <del>{{ $product->price}}</del></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </div>
                            </div>

                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Left Sidebar End -->

        <!-- Releted Product Section Start -->
            <section class="product-list-section section-b-space">
                <div class="container-fluid-lg">
                    <div class="title">
                        <h2>{{ __('general.related_products') }}</h2>
                        <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="{{ asset('template/assets/svg/leaf.svg#leaf') }}"></use>
                            </svg>
                        </span>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="slider-6_1 product-wrapper">
                                @foreach ($product->subcategory->products as $product)
                                    @if ($loop->iteration <= 8)
                                    <div class="col-3 px-0 p-3">
                                        <div class="product-box wow fadeIn">
                                            <div class="product-image">
                                                <a href="{{ route('front.show.product', $product->id) }}">
                                                    <img src="{{ asset($product->image) }}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <ul class="product-option justify-content-center eye-show bg-transparent text-white">

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
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Releted Product Section End -->


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