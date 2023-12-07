
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
                                                                <h5 class="span-name">{{  $product->translate(app()->getLocale())->unit }}</h5>
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
                                        <div>
                                            <div class="product-box-3 wow fadeInUp">
                                                <div class="product-header">
                                                    <div class="product-image">
                                                        <a href="{{ route('front.show.product',$product->id) }}">
                                                            <img src="{{ asset($product->image) }}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                
                                                        <ul class="product-option">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                                <a href="{{ route('front.show.product',$product->id) }}" >
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                
                                                <div class="product-footer">
                                                    <div class="product-detail">
                                                        <span class="span-name">{{ $product->subcategory->title }}</span>
                                                        <a href="{{ route('front.show.product',$product->id) }}">
                                                            <h5 class="name">{{ $product->title }}</h5>
                                                        </a>
                                                        <h5 class="span-name">{{  $product->translate(app()->getLocale())->unit }}</h5>
                                                        <h5 class="price"><span class="theme-color">{{ $product->price_bd }}</span> <del>{{ $product->price}}</del>
                                                        </h5>
                                                        <div class="add-to-cart-box bg-white">
                                                            <button class="btn btn-add-cart addcart-button">{{ __('general.add') }}
                                                                <span class="add-icon bg-light-gray">
                                                                    <i class="fa-solid fa-plus"></i>
                                                                </span>
                                                            </button>
                                                            <div class="cart_qty qty-box">
                                                                <div class="input-group bg-white">
                                                                    <button type="button" class="qty-left-minus bg-gray"
                                                                        data-type="minus" data-field="">
                                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                                    </button>
                                                                    <input class="form-control input-number qty-input" type="text"
                                                                        name="quantity" value="0">
                                                                    <button type="button" class="qty-right-plus bg-gray"
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
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Releted Product Section End -->
