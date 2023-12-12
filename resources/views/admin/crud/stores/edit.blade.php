@extends('admin.components.form')
@section('form_action', route('stores.update', $store->id))
@section('form_type', 'POST')
@section('fields_content')
    <div class="content-wrapper">
        @method('PUT')
        
                <div class="container p-3">
            @include('admin.components.alert-error')
            <div class="card card-custom mb-2">
            </div>
            <div class="card card-custom mb-2">
                 <div class="card-header card-header-tabs-line">
                     @include('admin.components.breadcrumb', ['module' => 'stores', 'action' => 'edit'])
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
                <div class="card-body">
                    <div class="tab-content">
                        @foreach (config('translatable.locales') as $key => $locale)
                        <div class="tab-pane fade show @if ($key == 0) active @endif"
                            id="{{ $locale }}" role="tabpanel">
                            <div class="form-group">
                                <label>@lang('general.title') - @lang('general.' . $locale)<span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="{{ $locale . '[title]' }}"
                                        placeholder="@lang('general.title')"
                                        class="form-control  pl-1 min-h-40px @error($locale . '.title') is-invalid @enderror"
                                        value="{{ old($locale . '.title', $store->translate($locale)->title) }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>@lang('general.address') - @lang('general.' . $locale)<span class="text-danger"> *
                                    </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="{{ $locale . '[address]' }}"
                                        placeholder="@lang('general.address')"
                                        class="form-control  pl-1 min-h-40px @error($locale . '.address') is-invalid @enderror"
                                        value="{{ old($locale . '.address', $store->translate($locale)->address) }}">
                                </div>
                            </div>



                            <div class="col-form-group">
                                <label>@lang('general.description')(@lang('general.' . $locale))<span class="text-danger">*</span></label>
                                <textarea rows="100" class="summernote @error($locale . '.description') is-invalid @enderror"
                                    name="{{ $locale . '[description]' }}">
                                    {!! old($locale . '.description', $store->translate($locale)->description) !!} 
                                </textarea>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card card-custom">
                <div class="card-body mb-5">
                    <div class="row mt-5" >

                       
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ __('general.owner') }}</label>
                                        <input type="text" name="owner" value="{{ old('owner', $store->owner) }}"
                                            class="form-control" id="exampleInputName" placeholder="@lang('general.owner')">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ __('general.phone') }}</label>
                                        <input type="text" name="phone" value="{{ old('phone', $store->phone) }}"
                                            class="form-control" id="exampleInputName" placeholder="@lang('general.phone')">
                                    </div>
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

                        <div class="card-footer mb-5 mt-5">
                            <button type="submit" class="btn btn-outline-success">@lang('general.save')</button>
                            <a href="{{ route('stores.index') }}"
                                class="btn btn-outline-danger font-weight-bold">@lang('general.cancel')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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
    @endsection
