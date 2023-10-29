<div class="container-fluid  bg-hero d-flex justify-content-center align-items-center" style="height: 50vh">
    <div class="row ">
        <div class="col-12 text-center">
            <h2 class="display-5 text-uppercase text-white mb-md-4">{{ $name }}</h2>
            <ul class="page-list">
                <a class="btn btn-primary py-md-2 px-md-3 me-3"
                    href="{{ route('front.home') }}">{{ __('general.home') }}</a>
                @if (isset($mid) && isset($route_mid))
                    <a class="btn btn-primary py-md-2 px-md-3 me-3" href="{{ route($route_mid) }}">{{ $mid }}</a>
                @endif
                <a class="btn btn-light py-md-2 px-md-3">{{ $name }}</a>
            </ul>
        </div>
    </div>
</div>
