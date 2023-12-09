   <!-- Wishlist Section Start -->
   <section class="wishlist-section section-b-space">
    <div class="container-fluid-lg">
        <div class="row g-sm-3 g-2">
            @foreach ($offers as $offer)
                <div class="col-xxl-2 col-lg-3 col-md-4 col-6 product-box-contain">
                    <div class="product-box-3 h-100">
                        <div class="product-header">
                            <div class="product-image">
                                <a href="#">
                                    <img src="{{asset($offer->image)}}" class="img-fluid blur-up lazyload"
                                        alt="">
                                </a>

                                <div class="product-header-top">
                                    <button class="btn wishlist-button close_button">
                                        <i data-feather="x"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="product-footer">
                            <div class="product-detail">
                                <span class="span-name">{{ $offer->title }}</span>
                                <a href="#">
                                    <h5 class="name">{!! $offer->translate(app()->getLocale())->description!!}</h5>
                                </a>
                                {{-- <h6 class="unit mt-1">250 ml</h6>
                                <h5 class="price">
                                    <span class="theme-color">$08.02</span>
                                    <del>$15.15</del>
                                </h5> --}}

                                <div class="add-to-cart-box bg-white mt-2">
                                    <button class="btn btn-add-cart addcart-button">{{ __('general.add') }}
                                        <span class="add-icon bg-light-gray">
                                            <i class="fa-solid fa-plus px-2"></i>
                                        </span>
                                    </button>
                                    <div class="cart_qty qty-box">
                                        <div class="input-group bg-white">
                                            <button type="button" class="qty-left-minus bg-gray" data-type="minus"
                                                data-field="">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <button type="button" class="qty-right-plus bg-gray" data-type="plus"
                                                data-field="">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- Wishlist Section End -->
<!-- Team Start -->
   {{-- <div class="container-fluid p-5" data-aos="zoom-in">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">{{ page('team')->title }}</h5>
            <h1 class="display-5 text-uppercase mb-0">{{ page('team')->subtitle }}</h1>
        </div>
        <div class="row g-5">
            @foreach ($teams as $team)
            <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid team-image" src="{{ asset( $team->image )}}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" target="__blank" href="{{$team->twitter}}"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" target="__blank" href="{{$team->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" target="__blank" href="{{$team->linkedin}}"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <h5 class="text-uppercase text-light">{{ $team->title }}</h5>
                        <p class="text-uppercase text-secondary m-0">{{ $team->subtitle }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
   </div> --}}
<!-- Team End -->

