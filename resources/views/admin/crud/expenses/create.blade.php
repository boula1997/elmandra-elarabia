@extends('admin.components.form')
@section('form_action', route('expenses.store'))
@section('form_type', 'POST')
@section('fields_content')
    @method('post')
    <div class="content-wrapper">
                <div class="container p-3">
            @include('admin.components.alert-error')
            <div class="card card-custom mb-2">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'expenses', 'action' => 'create'])
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
                {{-- // TODO(ibrahim):change this module inputs to clients required inputs easy --}}
                <div class="card-body">
                    <div class="tab-content">
                        @foreach (config('translatable.locales') as $key => $locale)
                            <div class="tab-pane fade show @if ($key == 0) active @endif"
                                id="{{ $locale }}" role="tabpanel">
                                <div class="col-form-group">
                                    <label>@lang('general.description')(@lang('general.' . $locale))<span class="text-danger">*</span></label>
                                    <textarea rows="100" class=" summernote @error($locale . '.description') is-invalid @enderror"
                                        name="{{ $locale . '[description]' }}">
                                        {!! old($locale . '.description') !!} 
                                    </textarea>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card card-custom">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ __('general.your_location') }}</label>
                                        <input type="hidden" id="latitude" name="latitude" placeholder="latitude" value="{{ old('latitude') }}" >
                                        <input type="hidden" id="longitude" name="longitude" placeholder="longitude" value="{{ old('longitude') }}" >
                                        <div id="map" style="width:1000px; height:400px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('admin.components.images')
                </div>
                <div class="card-footer mb-5">
                    <button type="submit"
                        class="btn btn-outline-primary px-5
                        ">@lang('general.save')</button>
                    <a href="{{ route('expenses.index') }}"
                        class="btn btn-outline-danger px-5
                        ">@lang('general.cancel')</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            // Summernote
            $('.summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>

<script>
    var geocoder = new google.maps.Geocoder();
    var marker = null;
    var map = null;
    function initialize() {
        var $latitude = document.getElementById('latitude');
        var $longitude = document.getElementById('longitude');
        var latitude = 24.695374620580868;
        var longitude = 46.68142318725586;
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
