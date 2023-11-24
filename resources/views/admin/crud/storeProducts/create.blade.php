@extends('admin.components.form')
@section('form_action', route('storeProducts.store'))
@section('form_type', 'POST')
@section('fields_content')
    @method('post')
    <div class="content-wrapper">
                <div class="container p-3">
            @include('admin.components.alert-error')
            <div class="card card-custom mb-2">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'storeProducts', 'action' => 'create'])
                </div>
            </div>
            <div class="card card-custom">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.products') }}</label>
                                <select class="form-select form-select-lg" name="product_id" id="product">
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}" {{ old('product_id')==$product->id? 'selected' : '' }}>{{ $product->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.stores') }}</label>
                                <select class="form-select form-select-lg" name="store_id" id="store">
                                    @foreach ($stores as $store)
                                        <option value="{{ $store->id}}" {{ old('store_id')==$store->id? 'selected' : '' }}>{{ $store->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('general.quantity') }}</label>
                                    <input type="text" name="quantity" value="{{ old('quantity') }}" class="form-control"
                                        id="exampleInputName" placeholder="@lang('general.quantity')">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer mb-5">
                    <button type="submit"
                        class="btn btn-outline-primary px-5
                          ">@lang('general.save')</button>
                    <a href="{{ route('storeProducts.index') }}"
                        class="btn btn-outline-danger px-5
                            ">@lang('general.cancel')</a>
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
    @endpush

@endsection
