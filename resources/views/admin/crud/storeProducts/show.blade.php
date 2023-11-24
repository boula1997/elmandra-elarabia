@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container p-3">
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'storeProducts', 'action' => 'show'])
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-7 bg-light p-3 rounded h-100">
                        <div class="card-title fw-bold">
                            <h5 class="font-weight-bolder text-dark">@lang('general.product'):</h5>
                            <p class="m-0">{{ $storeProduct->product->title }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <h5 class="font-weight-bolder text-dark">@lang('general.store'):</h5>
                        <p class="m-0">{{ $storeProduct->store->title}}</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-7 bg-light p-3 rounded h-100">
                        <div class="card-title fw-bold">
                            <h5 class="font-weight-bolder text-dark">@lang('general.quantity'):</h5>
                            <p class="m-0">{{ $storeProduct->quantity }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
