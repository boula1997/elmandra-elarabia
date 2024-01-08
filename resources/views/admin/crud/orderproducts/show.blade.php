@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container p-3">
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'orderproducts', 'action' => 'show'])
                </div>
       
                <div class="card-body p-10">
                    <div class="tab-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-7 bg-light p-3 rounded h-100">
                                    <div class="card-title fw-bold">
                                        <h5 class="font-weight-bolder text-dark">@lang('general.name'):</h5>
                                        <p class="m-0">{{ $orderproduct->order->name }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-7 bg-light p-3 rounded h-100">
                                    <div class="card-title fw-bold">
                                        <h5 class="font-weight-bolder text-dark">@lang('general.email'):</h5>
                                        <p class="m-0">{{ $orderproduct->order->email }}</p>
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
                                        <p class="m-0">{{ $orderproduct->order->address }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-7 bg-light p-3 rounded h-100">
                                    <div class="card-title fw-bold">
                                        <h5 class="font-weight-bolder text-dark">@lang('general.total-delivery'):</h5>
                                        <p class="m-0">{{ $orderproduct->order->total }} {{ __('general.pound') }}</p>
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label d-block">@lang('general.product')</label>
                                        <br>
                                        <p class="m-0">{{ $orderproduct->product->title }}</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label d-block">@lang('general.count')</label>
                                        <br>
                                        <p class="m-0">{{ $orderproduct->count }}</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label d-block">@lang('general.total')</label>
                                        <br>
                                        <p class="m-0">{{ $orderproduct->total }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
@endsection
