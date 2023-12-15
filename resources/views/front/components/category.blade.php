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
                    {{-- // TODO(ibrahim): change categories division according to what client needs --}}
                    @foreach (categories() as $category)
                        <div>
                            <a href="{{ route('front.category',$category->id) }}" class="category-box wow fadeInUp">
                                <div>
                                    <img src="{{ asset($category->image )}}" class="blur-up lazyload" alt="">
                                    <h5>{{ $category->title }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category Section End -->
