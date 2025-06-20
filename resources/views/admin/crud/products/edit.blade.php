@extends('admin.components.form')
@section('form_action', route('products.update', $product->id))
@section('form_type', 'POST')
@section('fields_content')
    <div class="content-wrapper">
        @method('PUT')
                <div class="container p-3">
            @include('admin.components.alert-error')

            <div class="card card-custom mb-2">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'products', 'action' => 'edit'])
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
                                            class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error($locale . '.title') is-invalid @enderror"
                                            value="{{ old($locale . '.title', $product->translate($locale)->title) }}">
                                    </div>
                                </div>
                                <div class="col-form-group">
                                    <label>@lang('general.description')(@lang('general.' . $locale))<span class="text-danger">*</span></label>
                                    <textarea rows="100" class="summernote @error($locale . '.description') is-invalid @enderror"
                                        name="{{ $locale . '[description]' }}">
                                        {!! old($locale . '.description', $product->translate($locale)->description ?? '') !!}
                                        @if(is_null($product->translate($locale)->description )|| empty(old($locale . '.description', $product->translate($locale)->description)))
                                            <div class="row">
                                                <div class="mt-post-text col-12">
                                                    <table class="product-details-table table table-striped table-bordered"
                                                            dir="{{ $locale == 'ar' ? 'rtl' : 'ltr' }}"
                                                            style="text-align: {{ $locale == 'ar' ? 'right' : 'left' }}">
                                                        <thead>
                                                            <tr>
                                                                <th>{{ $locale == 'ar' ?'الخاصية':'Feature' }}</th>
                                                                <th>{{ $locale == 'ar' ?'التفاصيل':'Details' }}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ $locale == 'ar' ? 'نوع القيادة' : 'Drive Type' }}</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ $locale == 'ar' ? 'المحرك' : 'Engine' }}</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ $locale == 'ar' ? 'قوة الحصان' : 'Horsepower' }}</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ $locale == 'ar' ? 'عزم الدوران (نيوتن متر)' : 'Torque (Nm)' }}</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ $locale == 'ar' ? 'ناقل الحركة' : 'Transmission' }}</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ $locale == 'ar' ? 'نظام الكبح' : 'Braking System' }}</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ $locale == 'ar' ? 'حجم الإطارات' : 'Tire Size' }}</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ $locale == 'ar' ? 'الكابينة' : 'Cabin' }}</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ $locale == 'ar' ? 'معيار العادم' : 'Exhaust Standard' }}</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ $locale == 'ar' ? 'سعة خزان الوقود' : 'Fuel Tank Capacity' }}</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ $locale == 'ar' ? 'الاستخدام الأساسي' : 'Primary Usage' }}</td>
                                                                <td></td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>                                               
                                                </div>
                                            </row>
                                        @endif
                                    </textarea>
                                    
                                </div>
                                
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card card-custom">
                <div class="card-body mb-5">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.companies') }}</label>
                                <select class="form-select form-select-lg" name="company_id" id="company">
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}" {{ old('company_id',$product->company_id)==$company->id? 'selected' : '' }}>{{ $company->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.categories') }}</label>
                                <select class="form-select form-select-lg" name="category_id" id="categories">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id',$product->category_id)==$category->id? 'selected' : '' }}>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.subcategories') }}</label>
                                <select class="form-select form-select-lg" name="subcategory_id" id="subcategories">
                                    @foreach ($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}" {{ old('subcategory_id',$product->subcategory_id)==$subcategory->id? 'selected' : '' }}>{{ $subcategory->title }}</option>
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
                                    <input type="text" name="price"
                                        placeholder="@lang('general.price')"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('price') is-invalid @enderror"
                                        value="{{old('price',$product->price)}}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.kind') }}</label>
                                <select class="form-select form-select-lg" name="kind" id="kind">                                
                                        <option {{ $product->kind == 'tractor_unit' ? 'selected' : '' }} value="tractor_unit" {{ old('kind') }}>{{ __('general.tractor_unit') }}</option>
                                        <option {{ $product->kind == 'truck' ? 'selected' : '' }} value="truck" {{ old('kind') }}>{{ __('general.truck') }}</option>
                                        <option {{ $product->kind == 'semi_trailer' ? 'selected' : '' }} value="semi_trailer" {{ old('kind') }}>{{ __('general.semi_trailer') }}</option>
                                        <option {{ $product->kind == 'trailer' ? 'selected' : '' }} value="trailer" {{ old('kind') }}>{{ __('general.trailer') }}</option>
                                        <option {{ $product->kind == 'tipper' ? 'selected' : '' }} value="tipper" {{ old('kind') }}>{{ __('general.tipper') }}</option>
                                        <option {{ $product->kind == 'mixer' ? 'selected' : '' }} value="mixer" {{ old('kind') }}>{{ __('general.mixer') }}</option>
                                        <option {{ $product->kind == 'spareParts' ? 'selected' : '' }} value="spareParts" {{ old('kind') }}>{{ __('general.spareParts') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.promotions') }}</label>
                                <select class="form-select form-select-lg" name="promotions" id="promotions">                                
                                        <option {{ $product->promotions == 'reduced_in_price' ? 'selected' : '' }} value="reduced_in_price" {{ old('promotions') }}>{{ __('general.reduced_in_price') }}</option>
                                        <option {{ $product->promotions == 'new_in_stock' ? 'selected' : '' }} value="new_in_stock" {{ old('promotions') }}>{{ __('general.new_in_stock') }}</option>                                
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.configuration') }}</label>
                                <select class="form-select form-select-lg" name="configuration" id="configuration">                                
                                        <option {{ $product->configuration == '4*2' ? 'selected' : '' }} value="4*2" {{ old('configuration') }}>4x2</option>
                                        <option {{ $product->configuration == '6*2' ? 'selected' : '' }} value="6*2" {{ old('configuration') }}>6x2</option>                                
                                        <option {{ $product->configuration == '6*4' ? 'selected' : '' }} value="6*4" {{ old('configuration') }}>6x4</option>                                
                                        <option {{ $product->configuration == '8*4' ? 'selected' : '' }} value="8*4" {{ old('configuration') }}>8x4</option>                                
                                        <option {{ $product->configuration == '8*2' ? 'selected' : '' }} value="8*2" {{ old('configuration') }}>8x2</option>                                
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.emission_code') }}</label>
                                <select class="form-select form-select-lg" name="emission_code" id="emission_code">                                
                                        <option {{ $product->emission_code == '0' ? 'selected' : '' }} value="0" {{ old('emission_code') }}>0</option>
                                        <option {{ $product->emission_code == '1' ? 'selected' : '' }} value="1" {{ old('emission_code') }}>1</option>                                
                                        <option {{ $product->emission_code == '2' ? 'selected' : '' }} value="2" {{ old('emission_code') }}>2</option>                                
                                        <option {{ $product->emission_code == '3' ? 'selected' : '' }} value="3" {{ old('emission_code') }}>3</option>                                
                                        <option {{ $product->emission_code == '4' ? 'selected' : '' }} value="4" {{ old('emission_code') }}>4</option>  
                                        <option {{ $product->emission_code == '5' ? 'selected' : '' }} value="5" {{ old('emission_code') }}>5</option>                                
                                        <option {{ $product->emission_code == '6' ? 'selected' : '' }} value="6" {{ old('emission_code') }}>6</option>                                
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.fuel_type') }}</label>
                                <select class="form-select form-select-lg" name="fuel_type" id="fuel_type">                                
                                        <option {{ $product->fuel_type == 'diesel' ? 'selected' : '' }}  value="diesel" {{ old('fuel_type') }}>{{ __('general.diesel') }}</option>
                                        <option {{ $product->fuel_type == 'electrical' ? 'selected' : '' }}  value="electrical" {{ old('fuel_type') }}>{{ __('general.electrical') }}</option>                                                             
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.damaged') }}</label>
                                <select class="form-select form-select-lg" name="damaged" id="damaged">                                
                                        <option {{ $product->damaged == '1' ? 'selected' : '' }} value="1" {{ old('damaged') }}>{{ __('general.yes') }}</option>
                                        <option {{ $product->damaged == '0' ? 'selected' : '' }} value="0" {{ old('damaged') }}>{{ __('general.no') }}</option>                                                             
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
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('engineCapacity') is-invalid @enderror"
                                        value="{{ old('engineCapacity', $product->engineCapacity) }}">
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
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('suspensionType') is-invalid @enderror"
                                        value="{{ old('suspensionType', $product->suspensionType) }}">
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
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('axelsNumber') is-invalid @enderror"
                                        value="{{ old('axelsNumber', $product->axelsNumber) }}">
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
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('gearBox') is-invalid @enderror"
                                        value="{{ old('gearBox', $product->gearBox) }}">
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
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('mileAge') is-invalid @enderror"
                                        value="{{ old('mileAge', $product->mileAge) }}">
                                </div>
                            </div>
                        </div>
                  

                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-check-input" type="checkbox" name="used_car" id="used_car" {{$product->used_car == 1 ? 'checked' : ''}}>
                                    <label class="form-check-label" for="used_car">
                                    {{ __('general.used_car') }} 
                                    </label>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.year') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="year" placeholder="@lang('general.year')"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('year') is-invalid @enderror"
                                        value="{{ old('year', $product->year) }}">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.model') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="model" placeholder="@lang('general.model')"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('model') is-invalid @enderror"
                                        value="{{ old('model', $product->model) }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.engine') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="engine" placeholder="@lang('general.engine')"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('engine') is-invalid @enderror"
                                        value="{{ old('engine', $product->engine) }}">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.wheelbase') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="wheelbase" placeholder="@lang('general.wheelbase')"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('wheelbase') is-invalid @enderror"
                                        value="{{ old('wheelbase', $product->wheelbase) }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.cab') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="cab" placeholder="@lang('general.cab')"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('cab') is-invalid @enderror"
                                        value="{{ old('cab', $product->cab) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.steering') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="steering" placeholder="@lang('general.steering')"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('steering') is-invalid @enderror"
                                        value="{{ old('steering', $product->steering) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.rear_axles') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="rear_axles" placeholder="@lang('general.rear_axles')"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('rear_axles') is-invalid @enderror"
                                        value="{{ old('rear_axles', $product->rear_axles) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.frame') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="frame" placeholder="@lang('general.frame')"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('frame') is-invalid @enderror"
                                        value="{{ old('frame', $product->frame) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.gcw') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="gcw" placeholder="@lang('general.gcw')"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('gcw') is-invalid @enderror"
                                        value="{{ old('gcw', $product->gcw) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.fuel_tanker') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="fuel_tanker" placeholder="@lang('general.fuel_tanker')"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('fuel_tanker') is-invalid @enderror"
                                        value="{{ old('fuel_tanker', $product->fuel_tanker) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.tires') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="tires" placeholder="@lang('general.tires')"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('tires') is-invalid @enderror"
                                        value="{{ old('tires', $product->tires) }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.battery') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="battery" placeholder="@lang('general.battery')"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('battery') is-invalid @enderror"
                                        value="{{ old('battery', $product->battery) }}">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.oversize') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="oversize" placeholder="@lang('general.oversize')"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('oversize') is-invalid @enderror"
                                        value="{{ old('oversize', $product->oversize) }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.transmission') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="transmission" placeholder="@lang('general.transmission')"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('transmission') is-invalid @enderror"
                                        value="{{ old('transmission', $product->transmission) }}">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.color') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="color" placeholder="@lang('general.color')"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('color') is-invalid @enderror"
                                        value="{{ old('color', $product->color) }}">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            @include('admin.components.image', [
                                'label' => __('general.image'),
                                'value' => old('image', $product->image),
                                'name' => 'image',
                                'id' => 'kt_image_3',
                                'accept' => 'image/*',
                                'required' => true,
                            ])

                        </div>

                    @include('admin.components.images', ['images' => $images])
                    </div>
                </div>
                <div class="card-footer mb-5 mt-5">
                    <button type="submit" class="btn btn-outline-success">@lang('general.save')</button>
                    <a href="{{ route('products.index') }}"
                        class="btn btn-outline-danger font-weight-bold">@lang('general.cancel')</a>
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
