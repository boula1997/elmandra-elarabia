@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container p-3">
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'coupons', 'action' => 'show'])
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-7 bg-light p-3 rounded h-100">
                        <div class="card-title fw-bold">
                            <h5 class="font-weight-bolder text-dark">@lang('general.code'):</h5>
                            <p class="m-0">{{ $coupon->code }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-7 bg-light p-3 rounded h-100">
                        <div class="card-title fw-bold">
                            <h5 class="font-weight-bolder text-dark">@lang('general.code'):</h5>
                            <p class="m-0">{{ $coupon->code }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-7 bg-light p-3 rounded h-100">
                        <div class="card-title fw-bold">
                            <h5 class="font-weight-bolder text-dark">@lang('general.marketer'):</h5>
                            <p class="m-0">{{ $coupon->marketer->name }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-7 bg-light p-3 rounded h-100">
                        <div class="card-title fw-bold">
                            <h5 class="font-weight-bolder text-dark">@lang('general.nu_users'):</h5>
                            <p class="m-0">{{ count($coupon->users ) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
