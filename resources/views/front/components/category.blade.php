   <!-- Category Section Start -->
   <section>
    <div class="container-fluid-lg">
        <div class="title">
            <h2>{{ __('general.browse_by_categories') }}</h2>
            <span class="title-leaf">
                <svg class="icon-width">
                    <use xlink:href="{{ asset('template/assets/svg/leaf.svg#leaf') }}"></use>
                </svg>
            </span>
            <p>{{ __('general.top_categories_of') }}</p>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-9">
                    @foreach (categories() as $category)
                        <div>
                            <a href="#" class="category-box wow fadeInUp">
                                <div>
                                    <img src="{{ asset($category->image )}}" class="blur-up lazyload" alt="">
                                    <h5>{{ $category->title }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach

                    {{-- <div>
                        <a href="shop-left-sidebar.html" class="category-box wow fadeInUp" data-wow-delay="0.05s">
                            <div>
                                <img src="{{ asset('template/assets/svg/1/cup.svg') }}" class="blur-up lazyload" alt="">
                                <h5>Beverages</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box wow fadeInUp" data-wow-delay="0.1s">
                            <div>
                                <img src="{{ asset('template/assets/svg/1/meats.svg') }}" class="blur-up lazyload" alt="">
                                <h5>Meats & Seafood</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box wow fadeInUp" data-wow-delay="0.15s">
                            <div>
                                <img src="{{ asset('template/assets/svg/1/breakfast.svg') }}" class="blur-up lazyload" alt="">
                                <h5>Breakfast</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box wow fadeInUp" data-wow-delay="0.2s">
                            <div>
                                <img src="{{ asset('template/assets/svg/1/frozen.svg') }}" class="blur-up lazyload" alt="">
                                <h5>Frozen Foods</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box wow fadeInUp" data-wow-delay="0.25s">
                            <div>
                                <img src="{{ asset('template/assets/svg/1/milk.svg') }}" class="blur-up lazyload" alt="">
                                <h5>Milk & Dairies</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box wow fadeInUp" data-wow-delay="0.3s">
                            <div>
                                <img src="{{ asset('template/assets/svg/1/pet.svg') }}" class="blur-up lazyload" alt="">
                                <h5>Pet Food</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box wow fadeInUp" data-wow-delay="0.35s">
                            <div>
                                <img src="{{ asset('template/assets/svg/1/biscuit.svg') }}" class="blur-up lazyload" alt="">
                                <h5>Biscuits & Snacks</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box wow fadeInUp" data-wow-delay="0.4s">
                            <div>
                                <img src="{{ asset('template/assets/svg/1/grocery.svg') }}" class="blur-up lazyload" alt="">
                                <h5>Grocery & Staples</h5>
                            </div>
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category Section End -->
