   
      <!-- Client Section Start -->
      <section class="client-section section-lg-space">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="about-us-title text-center">
                        <h4>{{ __('general.what_we_do') }}</h4>
                        <h2 class="center">{{ __('general.we_are_trusted') }}</h2>
                    </div>

                    <div class="slider-3_1 product-wrapper">
                        @foreach($counters as $counter)
                            <div>
                                <div class="clint-contain">
                                    <div class="client-icon">
                                        <img src="{{ asset($counter->image) }}"
                                            class="blur-up lazyload" alt="">
                                    </div>
                                    <h2>{{$counter->count}}</h2>
                                    <h4>{{$counter->title}}</h4>
                                    <h4>{{$counter->subtitle}}</h4>
                                    <p>{!! $counter->description !!}</p>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Section End -->