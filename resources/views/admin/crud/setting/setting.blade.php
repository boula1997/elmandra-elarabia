@extends('admin.components.form')
@section('form_action', route('setting', $setting))
@section('form_type', 'POST')
@section('fields_content')
    <div class="content-wrapper">
        @method('PUT')
                <div class="container p-3">
            @include('admin.components.alert-error')
            <div class="card card-custom mb-2">
                <div class="card-header card-header-tabs-line">
                    {{-- <div class="card-title fw-bold">
                            <h3 class="card-label">@lang('general.add_new')</h3>
                        </div> --}}
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
                                            value="{{ old($locale . '.title', $setting->translate($locale)->title) }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>@lang('general.address') - @lang('general.' . $locale)<span class="text-danger"> * </span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <input type="text" name="{{ $locale . '[address1]' }}"
                                            placeholder="@lang('general.address')"
                                            class="form-control  pl-1 min-h-40px @error($locale . '.address1') is-invalid @enderror"
                                            value="{{ old($locale . '.address1', $setting->translate($locale)->address1) }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>@lang('general.address') - @lang('general.' . $locale)<span class="text-danger"> * </span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <input type="text" name="{{ $locale . '[address2]' }}"
                                            placeholder="@lang('general.address')"
                                            class="form-control  pl-1 min-h-40px @error($locale . '.address2') is-invalid @enderror"
                                            value="{{ old($locale . '.address2', $setting->translate($locale)->address2) }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>@lang('general.appointment1') - @lang('general.' . $locale)<span class="text-danger"> *
                                        </span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <input type="text" name="{{ $locale . '[appointment1]' }}"
                                            placeholder="@lang('general.appointment1')"
                                            class="form-control  pl-1 min-h-40px @error($locale . '.appointment1') is-invalid @enderror"
                                            value="{{ old($locale . '.appointment1', $setting->translate($locale)->appointment1) }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>@lang('general.copyright') - @lang('general.' . $locale)<span class="text-danger"> *
                                        </span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <input type="text" name="{{ $locale . '[copyright]' }}"
                                            placeholder="@lang('general.copyright')"
                                            class="form-control  pl-1 min-h-40px @error($locale . '.copyright') is-invalid @enderror"
                                            value="{{ old($locale . '.copyright', $setting->translate($locale)->copyright) }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>@lang('general.meta_data') - @lang('general.' . $locale)<span class="text-danger"> *
                                        </span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <input type="text" name="{{ $locale . '[meta_data]' }}"
                                            placeholder="@lang('general.meta_data')"
                                            class="form-control  pl-1 min-h-40px @error($locale . '.meta_data') is-invalid @enderror"
                                            value="{{ old($locale . '.meta_data', $setting->translate($locale)->meta_data) }}">
                                    </div>
                                </div>



                                <div class="col-form-group">
                                    <label>@lang('general.description')(@lang('general.' . $locale))<span class="text-danger">*</span></label>
                                    <textarea rows="100" class="summernote @error($locale . '.description') is-invalid @enderror"
                                        name="{{ $locale . '[description]' }}">
                                        {!! old($locale . '.description', $setting->translate($locale)->description) !!} 
                                    </textarea>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ __('general.shipping_value') }}</label>
                                        <input type="number" name="shipping" value="{{ old('shipping',$setting->shipping) }}"
                                            class="form-control" id="exampleInputName" placeholder="@lang('general.shipping')">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ __('general.taxes') }}</label>
                                        <input type="number" name="taxes" value="{{ old('taxes',$setting->taxes) }}"
                                            class="form-control" id="exampleInputName" placeholder="@lang('general.taxes')%">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-check-input" type="checkbox" name="used_car" id="used_car" {{$setting->used_car == 1 ? 'checked' : ''}}>
                                    <label class="form-check-label" for="used_car">
                                    {{ __('general.show_used_car') }} 
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- // TODO(boula): add toogle button to appear or disappear rate easy --}}
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
                                        <input type="hidden" id="latitude" name="latitude" placeholder="latitude" value="{{ old('latitude',$setting->latitude) }}" >
                                        <input type="hidden" id="longitude" name="longitude" placeholder="longitude" value="{{ old('longitude',$setting->longitude) }}" >
                                        <div id="map" style="width:1000px; height:400px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            @include('admin.components.image', [
                                'label' => __('general.logo'),
                                'value' => old('logo', $setting->logo),
                                'name' => 'logo',
                                'id' => 'kt_image_2',
                                'accept' => 'image/*',
                                'required' => true,
                            ])

                        </div>
                        <div class="col-md-6">
                            @include('admin.components.image', [
                                'label' => __('general.white_logo'),
                                'value' => old('white_logo', $setting->white_logo),
                                'name' => 'white_logo',
                                'id' => 'kt_image_2',
                                'accept' => 'image/*',
                                'required' => true,
                            ])

                        </div>
                        <div class="col-md-6">
                            @include('admin.components.image', [
                                'label' => __('general.tab'),
                                'value' => old('tab', $setting->tab),
                                'name' => 'tab',
                                'id' => 'kt_image_3',
                                'accept' => 'image/*',
                                'required' => true,
                            ])

                        </div>
                        <div class="col-md-6">
                            @include('admin.components.image', [
                                'label' => __('general.breadcrumb'),
                                'value' => old('breadcrumb',$setting->breadcrumb),
                                'name' => 'breadcrumb',
                                'id' => 'kt_image_4',
                                'accept' => 'image/*',
                                'required' => true,
                            ])

                        </div>
                    </div>
                </div>
                <div class="card-footer mb-5">
                    <button type="submit" class="btn btn-outline-primary">@lang('general.save')</button>
                    <a href="{{ route('dashboard') }}"
                        class="btn btn-outline-danger font-weight-bold">@lang('general.cancel')</a>
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
                var latitude = '{{ $setting->latitude }}'
                var longitude = '{{ $setting->longitude }}';
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
