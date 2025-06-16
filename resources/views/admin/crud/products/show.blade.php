@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container p-3">
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'products', 'action' => 'show'])
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
                <div class="card-body p-10">
                    <div class="tab-content">
                        @foreach (config('translatable.locales') as $key => $locale)
                            <div class="tab-pane fade show @if ($key == 0) active @endif"
                                id="{{ $locale }}" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-5 bg-light p-3 rounded h-100">
                                            <div class="card-title fw-bold">
                                                <h5 class="font-weight-bolder text-dark">@lang('general.title'):</h5>
                                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->translate($locale)->title }}</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <br>
                                <br>
                                    <div class="col-md-12">
                                        <div class="mb-5 bg-light p-3 rounded h-100">
                                            <div class="card-title fw-bold">
                                                <h5 class="font-weight-bolder text-dark">@lang('general.description'):</h5>
                                                <p style="margin: 0; color: inherit; font-weight: normal;">{!! $product->translate($locale)->description !!}</p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="card card-custom">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5 class="font-weight-bolder text-dark">@lang('general.category'):</h5>
                                    <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->category->title }}</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5 class="font-weight-bolder text-dark">@lang('general.subcategory'):</h5>
                                    <p style="margin: 0; color: inherit; font-weight: normal;">{{ isset($product->subcategory)?$product->subcategory->title:'NA' }}</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5 class="font-weight-bolder text-dark">@lang('general.company'):</h5>
                                    <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->company->title }}</p>
                                </div>
                            </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.price'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->price }}</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.kind'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->kind }}</p>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.promotions'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ __('general.'.$product->promotions) }}</p>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.configuration'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->configuration }}</p>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.emission_code'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->emission_code }}</p>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.fuel_type'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->fuel_type }}</p>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.damaged'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;"> {{ $product->damaged == '1' ?   __('general.yes') : __('general.no') }}   </p>

                            </div>
                        </div>
                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.engineCapacity'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->engineCapacity }}</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.suspensionType'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->suspensionType }}</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.axelsNumber'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->axelsNumber }}</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.gearBox'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->gearBox }}</p>

                            </div>
                        </div>
                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.mileAge'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->mileAge }}</p>

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
                                <h5 class="font-weight-bolder text-dark">@lang('general.year'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->year }}</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.model'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->model }}</p>

                            </div>
                        </div>

                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.engine'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->engine }}</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.wheelbase'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->wheelbase }}</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.cab'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->cab }}</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.steering'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->steering }}</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.rear_axles'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->rear_axles }}</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.frame'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->frame }}</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.gcw'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->gcw }}</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.fuel_tanker'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->fuel_tanker }}</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.tires'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->tires }}</p>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.battery'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->battery }}</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.oversize'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->oversize }}</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.transmission'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->transmission }}</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 class="font-weight-bolder text-dark">@lang('general.color'):</h5>
                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->color }}</p>

                            </div>
                        </div>


                        <div class="form-group">
                            <img src="{{ $product->image }}" class="w-50">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile1">{{ __('general.images') }}</label>
                            <div class="row">
                                @foreach ($images as $image)
                                    @if (isset($image->id))
                                        <div class="col-md-3">
                                            <img width="100" height="100" class="mx-3" src="{{ $image->url }}"
                                                alt="">
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
