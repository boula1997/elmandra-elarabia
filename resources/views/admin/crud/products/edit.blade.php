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
                                            class="form-control  pl-1 min-h-40px @error($locale . '.title') is-invalid @enderror"
                                            value="{{ old($locale . '.title', $product->translate($locale)->title) }}">
                                    </div>
                                </div>
                                <div class="col-form-group">
                                    <label>@lang('general.description')(@lang('general.' . $locale))<span class="text-danger">*</span></label>
                                    <textarea rows="100" class="summernote @error($locale . '.description') is-invalid @enderror"
                                        name="{{ $locale . '[description]' }}">
                                        {!! old($locale . '.description', $product->translate($locale)->description) !!} 
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label>@lang('general.unit') - @lang('general.' . $locale)<span class="text-danger"> * </span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <div class="mb-3">
                                            <select
                                                class="form-select form-select-lg @error($locale . '.unit') is-invalid @enderror"
                                                name="{{ $locale . '[unit]' }}" id="">
                                                <option @selected(!old('unit'))>اختر الوحدة</option>
                                                <option @selected(old('unit', $product->unit) == 'لتر') value="لتر">لتر</option>
                                                <option @selected(old('unit', $product->unit) == 'عبوة') value="عبوة">عبوة</option>
                                                <option @selected(old('unit', $product->unit) == 'كيلو') value="كيلو">كيلو</option>
                                            </select>
                                        </div>
                                    </div>
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
                            <div class="form-group">
                                <label>@lang('general.size') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="size" placeholder="@lang('general.size')"
                                        class="form-control  pl-1 min-h-40px @error('size') is-invalid @enderror"
                                        value="{{ old('size', $product->size) }}">
                                </div>
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
                                        value="{{ old('price', $product->price) }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.price_bd') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="price_bd" placeholder="@lang('general.price_bd')"
                                        class="form-control  pl-1 min-h-40px @error('price_bd') is-invalid @enderror"
                                        value="{{ old('price_bd', $product->price_bd) }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('general.stock') <span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="stock" placeholder="@lang('general.stock')"
                                        classs="form-control  pl-1 min-h-40px @error('stock') is-invalid @enderror"
                                        value="{{ old('stock', $product->stock) }}">
                                </div>
                            </div>
                        </div>

                        @foreach ($stores as $store)
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ $store->title }}<span class="text-danger"> * </span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                      
                                        <input type="text" name="quantities[]" placeholder="{{ $store->title }}"
                                            class="form-control  pl-1 min-h-40px @error('quantities') is-invalid @enderror"
                                            value="{{ old('quantities[$loop->index]',$product->storeProducts[$loop->index]->quantity) }}">
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.subcategories') }}</label>
                                <select class="form-select form-select-lg" name="subcategory_id" id="subcategory">
                                    @foreach ($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}"
                                            {{ old('subcategory_id', $subcategory->id) == $subcategory->id ? 'selected' : '' }}>
                                            {{ $subcategory->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.companies') }}</label>
                                <select class="form-select form-select-lg" name="company_id" id="company">
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}"
                                            {{ old('company_id', $company->id) == $company->id ? 'selected' : '' }}>
                                            {{ $company->title }}</option>
                                    @endforeach
                                </select>
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
