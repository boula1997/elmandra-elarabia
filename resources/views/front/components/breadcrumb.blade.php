  
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h2  class="display-5 text-uppercase text-white mb-md-4">{{ $name }}</h2>
                <ul class="page-list">
                    <a class="btn btn-primary py-md-3 px-md-5 me-3" href="{{ route('front.home') }}">{{ __('general.home') }}</a>
                    @if (isset($mid) && isset($route_mid))
                        <a  class="btn btn-primary py-md-3 px-md-5 me-3" href="{{ route($route_mid) }}">{{ $mid }}</a>
                    @endif
                    <a class="btn btn-light py-md-3 px-md-5">{{ $name }}</a>
                </ul>
                {{-- <h1 class="display-2 text-uppercase text-white mb-md-4">About Us</h1>
                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="" class="btn btn-light py-md-3 px-md-5">About</a> --}}
            </div>
        </div>
    </div>
  
  <!-- page title start -->
    {{-- <div class="breadcrumb-area bg-black bg-relative">
        <div class="banner-bg-img" style="background-image: url({{ asset('assets/img/bg/1.webp') }});"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="page-title">{{ $name }}</h2>
                        <ul class="page-list">
                            <li><a href="{{ route('front.home') }}">{{ __('general.home') }}</a></li>
                            @if (isset($mid) && isset($route_mid))
                                <li><a href="{{ route($route_mid) }}">{{ $mid }}</a></li>
                            @endif
                            <li><a>{{ $name }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- page title end -->
