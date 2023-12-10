@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container p-3">

            <div class="card card-custom card-stretch gutter-b">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'orders', 'action' => 'show'])
                </div>
                <div class="card-body p-5">
                    <div class="tab-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-7 bg-light p-3 rounded h-100">
                                    <div class="card-title fw-bold">
                                        <h5 class="font-weight-bolder text-dark">@lang('general.name'):</h5>
                                        <p class="m-0">{{ $order->name }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-7 bg-light p-3 rounded h-100">
                                    <div class="card-title fw-bold">
                                        <h5 class="font-weight-bolder text-dark">@lang('general.email'):</h5>
                                        <p class="m-0">{{ $order->email }}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <br>
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="mb-7 bg-light p-3 rounded h-100">
                                    <div class="card-title fw-bold">
                                        <h5 class="font-weight-bolder text-dark">@lang('general.total-delivery'):</h5>
                                        <p class="m-0">{{ $order->total }} {{ __('general.pound') }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('general.your_location') }}</label>
                                            <input type="hidden" id="latitude" name="latitude" placeholder="latitude" value="{{ old('latitude',$order->latitude) }}" >
                                            <input type="hidden" id="longitude" name="longitude" placeholder="longitude" value="{{ old('longitude',$order->longitude) }}" >
                                            <div id="map" style="width:500px; height:300px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <!-- general form elements -->
                    <div class="row">
                        <div class="col-md-6 d-flex d-flex justify-content-start">
                            <h1 class="card-title fw-bold">
                                <th>@lang('general.orderproducts')</th>
                            </h3>
                        </div>
                        @can('orderproduct-create')
                        <div class="col-md-6 d-flex d-flex justify-content-end">
                            <a href="{{ route('orderproduct.create',$order->id) }}">

                                <button
                                    class="btn btn-outline-primary px-5
                                            "><i
                                        class="fa fa-plus fa-sm px-2"
                                        aria-hidden="true"></i>@lang('general.add')</button>
                            </a>
                        </div>
                        @endcan
                    </div>
                </div>
                <div class="card-body">
                    
                    <table id="example1" class="table  table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('general.title')</th>
                                <th>@lang('general.count')</th>
                                <th>@lang('general.total')</th>
                                <th>@lang('general.store')</th>
                                <th>@lang('general.status')</th>
                                <th>@lang('general.controls')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->orderproducts as $orderproduct)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $orderproduct->product->title }}</td>
                                    <td>{{ $orderproduct->count }}</td>
                                    <td>{{ $orderproduct->total }} {{ __('general.pound') }}</td>
                                    <td>{{ $orderproduct->store->title }}</td>
 
                                    <td>{{ $orderproduct->status !==0? __('general.available'): __('general.not_available') }}</td>
                                    <td>
                                        @include('admin.components.controls', [
                                            'route' => 'orderproducts',
                                            'role' => 'orderproduct',
                                            'module' => $orderproduct,
                                        ])
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
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
                var latitude = '{{ $order->latitude }}'
                var longitude = '{{ $order->longitude }}';
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

