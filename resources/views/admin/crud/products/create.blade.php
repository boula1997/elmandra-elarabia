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
                                <label for="" class="form-label">{{ __('general.categories') }}</label>
                                <select class="form-select form-select-lg" name="category_id" id="category">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id')==$category->id? 'selected' : '' }}>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

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
                            <div class="form-group">
                                {{-- // TODO(boula): change to static select options --}}
                                <label>@lang('general.kind') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="kind" placeholder="@lang('general.kind')"
                                        class="form-control  pl-1 min-h-40px @error('kind') is-invalid @enderror"
                                        value="{{ old('kind') }}">
                                </div>
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
                                <label>@lang('general.configuration') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="configuration" placeholder="@lang('general.configuration')"
                                        class="form-control  pl-1 min-h-40px @error('configuration') is-invalid @enderror"
                                        value="{{ old('configuration') }}">
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
