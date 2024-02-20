@extends('admin.components.form')
@section('form_action', route('products.store'))
@section('form_type', 'POST')
@section('fields_content')
    <div class="content-wrapper">
        <div class="container p-3">
            @include('admin.components.alert-error')
            <div class="card card-custom mb-2">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'products', 'action' => 'create'])
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
                                            value="{{ old($locale . '.title') }}">
                                    </div>
                                </div>
                                <div class="col-form-group">
                                    <label>@lang('general.description')(@lang('general.' . $locale))<span class="text-danger"></span></label>
                                    <textarea rows="100" class="summernote @error($locale . '.description') is-invalid @enderror"
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

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.companies') }}</label>
                                <select class="form-select form-select-lg" name="company_id" id="company">
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}" {{ old('company_id')==$company->id? 'selected' : '' }}>{{ $company->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.categories') }}</label>
                                <select class="form-select form-select-lg" name="category_id" id="categories">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id')==$category->id? 'selected' : '' }}>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.price') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="price" placeholder="@lang('general.price')"
                                        class="form-control  pl-1 min-h-40px @error('price') is-invalid @enderror"
                                        value="{{ old('price') }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.kind') }}</label>
                                <select class="form-select form-select-lg" name="kind" id="kind">                                
                                        <option value="tractor_unit" {{ old('kind') }}>{{ __('general.tractor_unit') }}</option>
                                        <option value="truck" {{ old('kind') }}>{{ __('general.truck') }}</option>
                                        <option value="semi_trailer" {{ old('kind') }}>{{ __('general.semi_trailer') }}</option>
                                        <option value="trailer" {{ old('kind') }}>{{ __('general.trailer') }}</option>
                                        <option value="tipper" {{ old('kind') }}>{{ __('general.tipper') }}</option>
                                        <option value="mixer" {{ old('kind') }}>{{ __('general.mixer') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.promotions') }}</label>
                                <select class="form-select form-select-lg" name="promotions" id="promotions">                                
                                        <option value="reduced_in_price" {{ old('promotions') }}>{{ __('general.reduced_in_price') }}</option>
                                        <option value="new_in_stock" {{ old('promotions') }}>{{ __('general.new_in_stock') }}</option>                                
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.configuration') }}</label>
                                <select class="form-select form-select-lg" name="configuration" id="configuration">                                
                                        <option value="4*2" {{ old('configuration') }}>4x2</option>
                                        <option value="6*2" {{ old('configuration') }}>6x2</option>                                
                                        <option value="6*4" {{ old('configuration') }}>6x4</option>                                
                                        <option value="8*4" {{ old('configuration') }}>8x4</option>                                
                                        <option value="8*2" {{ old('configuration') }}>8x2</option>                                
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.emission_code') }}</label>
                                <select class="form-select form-select-lg" name="emission_code" id="emission_code">                                
                                        <option value="0" {{ old('emission_code') }}>0</option>
                                        <option value="1" {{ old('emission_code') }}>1</option>                                
                                        <option value="2" {{ old('emission_code') }}>2</option>                                
                                        <option value="3" {{ old('emission_code') }}>3</option>                                
                                        <option value="4" {{ old('emission_code') }}>4</option>  
                                        <option value="5" {{ old('emission_code') }}>5</option>                                
                                        <option value="6" {{ old('emission_code') }}>6</option>                                
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.fuel_type') }}</label>
                                <select class="form-select form-select-lg" name="fuel_type" id="fuel_type">                                
                                        <option value="diesel" {{ old('fuel_type') }}>{{ __('general.diesel') }}</option>
                                        <option value="electrical" {{ old('fuel_type') }}>{{ __('general.electrical') }}</option>                                                             
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.damaged') }}</label>
                                <select class="form-select form-select-lg" name="damaged" id="damaged">                                
                                        <option value="1" {{ old('damaged') }}>{{ __('general.yes') }}</option>
                                        <option value="0" {{ old('damaged') }}>{{ __('general.no') }}</option>                                                             
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.dutch_trucks') }}</label>
                                <select class="form-select form-select-lg" name="dutch_trucks" id="dutch_trucks">                                
                                        <option value="1" {{ old('dutch_trucks') }}>{{ __('general.yes') }}</option>
                                        <option value="0" {{ old('dutch_trucks') }}>{{ __('general.no') }}</option>                                                             
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.engineCapacity') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="engineCapacity" placeholder="@lang('general.engineCapacity')"
                                        class="form-control  pl-1 min-h-40px @error('engineCapacity') is-invalid @enderror"
                                        value="{{ old('engineCapacity') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{-- // TODO(boula): change to select --}}
                                <label>@lang('general.suspensionType') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="suspensionType" placeholder="@lang('general.suspensionType')"
                                        class="form-control  pl-1 min-h-40px @error('suspensionType') is-invalid @enderror"
                                        value="{{ old('suspensionType') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.axelsNumber') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="axelsNumber" placeholder="@lang('general.axelsNumber')"
                                        class="form-control  pl-1 min-h-40px @error('axelsNumber') is-invalid @enderror"
                                        value="{{ old('axelsNumber') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.gearBox') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="gearBox" placeholder="@lang('general.gearBox')"
                                        class="form-control  pl-1 min-h-40px @error('gearBox') is-invalid @enderror"
                                        value="{{ old('gearBox') }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.mileAge') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="mileAge" placeholder="@lang('general.mileAge')"
                                        class="form-control  pl-1 min-h-40px @error('mileAge') is-invalid @enderror"
                                        value="{{ old('mileAge') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.manYear') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="date" name="manYear" placeholder="@lang('general.manYear')"
                                        class="form-control  pl-1 min-h-40px @error('manYear') is-invalid @enderror"
                                        value="{{ old('manYear') }}">
                                </div>
                            </div>
                        </div>





                        <div class="col-md-6">
                            @include('admin.components.image', [
                                'label' => __('general.image'),
                                'value' => old('image'),
                                'name' => 'image',
                                'id' => 'kt_image_3',
                                'accept' => 'image/*',
                                'required' => true,
                            ])

                        </div>


                        @include('admin.components.images')

                    </div>
                </div>
                <div class="card-footer mb-5">
                    <button type="submit"
                        class="btn btn-outline-primary px-5
                        ">@lang('general.save')</button>
                    <a href="{{ route('products.index') }}"
                        class="btn btn-outline-danger px-5
                        ">@lang('general.cancel')</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // $('#companies').append('<option value="">{{ trans('general.category_name') }}</option>');
            let old = $('#categories').attr('old');
            if (old != null) {
                $('#categories').find('option').remove().end();
                var company_id = $('#company').val();
                console.log('company_id', company_id);

                let url = "{{ route('company.categories', [':id']) }}"
                url = url.replace(':id', company_id);
                $.ajax({
                    type: "Get",
                    url: url,
                    datatype: 'JSON',
                    success: function(data) {
                        console.log(data);

                        if (data.status == 200) {
                            alert(1);
                            let equal;
                            data.data.categories.forEach(element => {
                                // equal = {{ old('category_id') }};
                                // console.log(element.id);
                                let equal = '';
                                if (element.id == old)
                                    equal = 'selected';
                                var option =
                                    `<option value ="${element.id}" ${equal}>${element.title}</option>`;
                                $('#categories').append(option);
                            });

                        }	
                    },
                    error: function(reject) {
                        console.log(reject);
                    }
                });
            }
            $('#company').on('change', function() {	

                $('#categories').find('option').remove().end();
                var company_id = $('#company').val();

                let url = "{{ route('company.categories', [':id']) }}"
                url = url.replace(':id', company_id);
                $.ajax({
                    type: "Get",
                    url: url,
                    datatype: 'JSON',
                    success: function(data) {
                        
                    console.log(data.data);
                            let equal;
                            data.data.forEach(element => {
                                let equal = '';
                                if (element.id == old)
                                    equal = 'selected';
                                var option =
                                    `<option value ="${element.id}" ${equal}>${element.title}</option>`;
                                $('#categories').append(option);
                            });


                    
                    },
                    error: function(reject) {
                        console.log(reject);
                    }
                });

            });
        });
    </script>
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
@endpush
