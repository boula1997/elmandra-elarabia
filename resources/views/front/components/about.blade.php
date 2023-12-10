           <!-- Fresh Vegetable Section Start -->
           <section class="fresh-vegetable-section section-lg-space">
               <div class="container-fluid-lg">
                   <div class="row gx-xl-5 gy-xl-0 g-3 ratio_148_1">
                       <div class="col-xl-6 col-12">
                           <div class="row g-sm-4 g-2">
                               <div class="col-6">
                                   <div class="fresh-image-2">
                                       <div>
                                           <img src="{{ asset(isset(page('about')->images[0]->url) ? page('about')->images[0]->url : asset('default.jpg')) }}"
                                               class="bg-img blur-up lazyload" alt="">
                                       </div>
                                   </div>
                               </div>

                               <div class="col-6">
                                   <div class="fresh-image">
                                       <div>
                                           <img src="{{ asset(isset(page('about')->images[1]->url) ? page('about')->images[1]->url : asset('default.jpg')) }}"
                                               class="bg-img blur-up lazyload" alt="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="col-xl-6 col-12">
                           <div class="fresh-contain p-center-left">
                               <div>
                                   <div class="review-title">
                                       <h4>{{ page('about')->title }}</h4>
                                       <h2>{{ page('about')->subtitle }}</h2>
                                   </div>

                                   <div class="delivery-list">
                                       <p class="text-content">{!! page('about')->description !!}</p>
                                       <div class="d-flex">
                                           <ul class="delivery-box">
                                               <li>
                                                   <div class="delivery-box">
                                                       <div class="delivery-icon">
                                                           <img src="{{ asset('template/assets/svg/3/delivery.svg') }}"
                                                               class="blur-up lazyload" alt="">
                                                       </div>

                                                       <div class="delivery-detail">
                                                           <h5 class="text">{{ __('general.free_delivery') }}</h5>
                                                       </div>
                                                   </div>
                                               </li>

                                               <li>
                                                   <div class="delivery-box">
                                                       <div class="delivery-icon">
                                                           <img src="{{ asset('template/assets/svg/3/leaf.svg') }}"
                                                               class="blur-up lazyload" alt="">
                                                       </div>

                                                       <div class="delivery-detail">
                                                           <h5 class="text">{{ __('general.daily_mega') }}</h5>
                                                       </div>
                                                   </div>
                                               </li>
                                           </ul>
                                           <ul class="delivery-box">
                                               <li>
                                                   <div class="delivery-box">
                                                       <div class="delivery-icon">
                                                           <img src="{{ asset('template/assets/svg/market.svg') }}"
                                                               class="blur-up lazyload" alt="">
                                                       </div>

                                                       <div class="delivery-detail">
                                                           <h5 class="text">{{ __('general.best_price') }}</h5>
                                                       </div>
                                                   </div>
                                               </li>

                                               <li>
                                                   <div class="delivery-box">
                                                       <div class="delivery-icon">
                                                           <img src="{{ asset('template/assets/svg/product.svg') }}"
                                                               class="blur-up lazyload" alt="">
                                                       </div>

                                                       <div class="delivery-detail">
                                                           <h5 class="text">{{ __('general.every_amazing') }}</h5>
                                                       </div>
                                                   </div>
                                               </li>
                                           </ul>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!-- Fresh Vegetable Section End -->

        
