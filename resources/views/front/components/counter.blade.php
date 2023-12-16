   <!-- Offer Section Start -->

   @if (isset($advertisements[0]))
       <section>
           <div class="container-fluid-lg">
               <div class="row">
                   <div class="col-12">
                       <div class="offer-box hover-effect">
                           <img src="{{ asset($advertisements[0]->image) }}" class="bg-img blur-up lazyload"
                               alt="">
                           <div class="offer-contain p-4">
                               <div class="offer-detail">
                                   <h2 class="text-dark">{{ $advertisements[0]->title }} <span
                                           class="text-danger fw-bold">{{ page('counter')->subtitle }}</span></h2>
                                   <p class="text-content">{!! $advertisements[0]->translate(app()->getLocale())->description !!}</p>
                               </div>
                               <div class="offer-timing">
                                   <div class="time" id="clockdiv-1" data-hours="1" data-minutes="2" data-seconds="3">
                                       <ul>
                                           <li>
                                               <div class="counter">
                                                   <div class="days">
                                                       <h6></h6>
                                                   </div>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="counter">
                                                   <div class="hours">
                                                       <h6></h6>
                                                   </div>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="counter">
                                                   <div class="minutes">
                                                       <h6></h6>
                                                   </div>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="counter">
                                                   <div class="seconds">
                                                       <h6></h6>
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
   @endif
   <!-- Offer Section End -->

   <!-- Facts Start -->
   {{-- <div class="container-fluid bg-dark facts p-5 my-5">
       <div class="row gx-5 gy-4 py-5">
           @foreach ($counters as $counter)
               <div class="col-lg-3 col-md-6" data-aos="flip-up">
                   <div class="d-flex">
                       <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                           style="width: 60px; height: 60px;">
                           <i class="{{ $counter->icon }} fs-4 text-white"></i>
                       </div>
                       <div class="ps-4">
                           <h6 class="text-secondary text-uppercase text-nowrap">{{ $counter->title }}</h6>
                           <h4 class="text-white mb-0" data-toggle="counter-up">{{ $counter->count }}</h4>
                       </div>
                   </div>
               </div>
           @endforeach
       </div>
   </div> --}}
