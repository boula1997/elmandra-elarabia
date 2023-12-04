@extends('admin.components.form')
@section('form_action', route('orderproducts.store'))
@section('form_type', 'POST')
@section('fields_content')
    <div class="content-wrapper p-5">
        <div class="container">
            <div class="card card-custom mb-2">
            <div class="card-header card-header-tabs-line">
                @include('admin.components.breadcrumb', ['module' => 'orderproducts', 'action' => 'create'])
            </div>
               
                <div class="card-body">
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
                                        <h5 class="font-weight-bolder text-dark">@lang('general.address'):</h5>
                                        <p class="m-0">{{ $order->address }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-7 bg-light p-3 rounded h-100">
                                    <div class="card-title fw-bold">
                                        <h5 class="font-weight-bolder text-dark">@lang('general.total-delivery'):</h5>
                                        <p class="m-0">{{ $order->total }} {{ __('general.pound') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-custom">
                <div class="card-body">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('general.products') }}</label>
                                    <select class="form-select form-select-lg" name="product_id" id="product">
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}" {{ old('product_id')==$product->id? 'selected' : '' }}>{{ $product->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('general.count') <span class="text-danger"> * </span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <input type="text" name="count"
                                            placeholder="@lang('general.count')"
                                            class="form-control  pl-1 min-h-40px @error('count') is-invalid @enderror"
                                            value="{{old('count')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('general.stores') }}</label>
                                    <select class="form-select form-select-lg" name="store_id" id="store">
                                        @foreach ($stores as $store)
                                            <option value="{{ $store->id }}" {{ old('store_id')==$store->id? 'selected' : '' }}>{{ $store->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="mb-7 bg-light p-3 rounded h-100">
                                    <div class="card-title fw-bold">
                                        <input type="hidden" id="order" name="order_id" value="{{$order->id}}">
                                    </div>
                                </div>
                            </div>
                           
    
                        </div>
                        <br>

                    </div>
                </div>
                <div class="card-footer mb-5">
                    <button type="submit"
                        class="btn btn-outline-primary px-5
                            ">@lang('general.save')</button>
                    <a href="{{ route('orders.index') }}"
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
