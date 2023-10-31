   <!-- Facts Start -->
   <div class="container-fluid bg-dark facts p-5 my-5">
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
   </div>
