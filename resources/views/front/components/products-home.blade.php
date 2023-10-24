a  <!-- Class Timetable Start -->
  <div class="container-fluid p-5">
      <div class="mb-5 text-center">
          <h5 class="text-primary text-uppercase"> {{ page('product')->title }} </h5>
          <h1 class="display-5 text-uppercase mb-0">{{ page('product')->subtitle }}</h1>
      </div>
      <div class="tab-class text-center">
          <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase rounded-pill mb-5">
              @foreach ($categories as $category)
                  <li class="nav-item">
                      <a class="nav-link rounded-pill text-white {{ $loop->iteration == 1 ? 'active' : '' }}"
                          data-bs-toggle="pill" href="#tab-{{ $loop->iteration }}">{{ $category->title }}</a>
                  </li>
              @endforeach


          </ul>
          <div class="tab-content">
              @foreach ($categories as $category)
                  <div id="tab-{{ $loop->iteration }}"
                      class="tab-pane fade show p-0 {{ $loop->iteration == 1 ? 'active' : '' }}">
                      <div class="row g-5">
                        @foreach ($category->products as $product)             
                        <div class="col-md-12 col-lg-3 mb-3 mb-lg-3">
                            <div class="card">
                                <div class="img-product-container">
                                    <img src="{{ asset($product->image) }}" class="card-img-top img-product" alt="Laptop" />
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                    </div>
        
                                    <div class="d-flex justify-content-between mb-2">
                                        <h5 class="text-limit" style="--lines:1;" title="{{ $product->title }}">
                                            {{ $product->title }}</h5>
                                    </div>
                                    <div class="d-flex justify-content-between">
        
                                        <p class="small text-danger"><s>$1099</s></p>
                                        <h5 class="text-dark mb-0">$999</h5>
                                    </div>
        
                                    <div class="">
                                        <button class="btn btn-primary btn-sm w-100 mt-1"><i class="fas fa-shopping-cart"></i>
                                            {{ __('general.add_to_cart') }}</button>
                                        {{-- <button class="btn btn-primary btn-sm w-100 mt-1"><i class="fa fa-star"></i>
                                            {{ __('general.add_to_favourite') }}</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
  <!-- Class Timetable Start -->
