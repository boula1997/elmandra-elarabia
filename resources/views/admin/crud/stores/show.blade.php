@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container p-3">
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'stores', 'action' => 'show'])
                </div>
                <div class="card-toolbar px-3">
                    <ul class="nav nav-tabs nav-bold nav-tabs-line">
                        @foreach (config('translatable.locales') as $key => $locale)
                            <li class="nav-item">
                                <a class="nav-link  @if ($key == 0) active @endif" data-toggle="tab"
                                    href="{{ '#' . $locale }}">@lang('general.' . $locale)</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-body p-10">
                    <div class="tab-content">
                        @foreach (config('translatable.locales') as $key => $locale)
                        <div class="tab-pane fade show @if ($key == 0) active @endif"
                            id="{{ $locale }}" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-7 bg-light p-3 rounded h-100">
                                        <div class="card-title fw-bold">
                                            <h5 class="font-weight-bolder text-dark">@lang('general.title'):</h5>
                                            <p class="m-0">{{ $store->translate($locale)->title }}</p>
                                        </div>
                                    </div>
                                </div>

                                    <div class="col-md-6">
                                        <div class="mb-7 bg-light p-3 rounded h-100">
                                            <div class="card-title fw-bold">
                                                <h5 class="font-weight-bolder text-dark">@lang('general.address'):</h5>
                                                <p class="m-0">{{ $store->translate($locale)->address }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-7 bg-light p-3 rounded h-100">
                                            <div class="card-title fw-bold">
                                                <h5 class="font-weight-bolder text-dark">@lang('general.description'):</h5>
                                                <p class="m-0">{!! $store->translate($locale)->description !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-7 bg-light p-3 rounded h-100">
                        <div class="card-title fw-bold">
                            <h5 class="font-weight-bolder text-dark">@lang('general.owner'):</h5>
                            <p class="m-0">{{ $store->owner }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-7 bg-light p-3 rounded h-100">
                        <div class="card-title fw-bold">
                            <h5 class="font-weight-bolder text-dark">@lang('general.phone'):</h5>
                            <p class="m-0">{{ $store->phone }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('general.your_location') }}</label>
                                <input type="hidden" id="latitude" name="latitude" placeholder="latitude" value="{{ old('latitude',$store->latitude) }}" >
                                <input type="hidden" id="longitude" name="longitude" placeholder="longitude" value="{{ old('longitude',$store->longitude) }}" >
                                <div id="map" style="width:1000px; height:400px"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

    @push('scripts')
        <script>
            var geocoder = new google.maps.Geocoder();
            var marker = null;
            var map = null;
            function initialize() {
                var $latitude = document.getElementById('latitude');
                var $longitude = document.getElementById('longitude');
                var latitude = '{{ $store->latitude }}'
                var longitude = '{{ $store->longitude }}';
                var zoom = 10;

            var LatLng = new google.maps.LatLng(latitude, longitude);

            var mapOptions = {
                zoom: zoom,
                center: LatLng,
                panControl: false,
                zoomControl: false,
                scaleControl: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }

            map = new google.maps.Map(document.getElementById('map'), mapOptions);
            if (marker && marker.getMap) marker.setMap(map);
            marker = new google.maps.Marker({
                position: LatLng,
                map: map,
                title: 'Drag Me!',
                draggable: true
            });

            google.maps.event.addListener(marker, 'dragend', function(marker) {
                var latLng = marker.latLng;
                $latitude.value = latLng.lat();
                $longitude.value = latLng.lng();
            });


            }
            initialize();
            $('#findbutton').click(function (e) {
                var address = $("#Postcode").val();
                geocoder.geocode({ 'address': address }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        map.setCenter(results[0].geometry.location);
                        marker.setPosition(results[0].geometry.location);
                        $(latitude).val(marker.getPosition().lat());
                        $(longitude).val(marker.getPosition().lng());
                    } else {
                        alert("Geocode was not successful for the following reason: " + status);
                    }
                });
                e.preventDefault();
            });
        </script>
    @endpush
