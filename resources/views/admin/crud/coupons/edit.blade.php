@extends('admin.components.form')
@section('form_action', route('coupons.update', $coupon->id))
@section('form_type', 'POST')
@section('fields_content')
    <div class="content-wrapper">
        @method('PUT')
        
                <div class="container p-3">
            @include('admin.components.alert-error')
            <div class="card card-custom mb-2">
            </div>
            <div class="card card-custom mb-2">
                 <div class="card-header card-header-tabs-line">
                     @include('admin.components.breadcrumb', ['module' => 'coupons', 'action' => 'edit'])
                 </div>
                
            </div>
            <div class="card card-custom">
                <div class="card-body mb-5">
                    <div class="row mt-5" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ __('general.marketer') }}</label>
                                        <div class="mb-3">
                                            <select
                                                class="form-select form-select-lg @error('marketer_id') is-invalid @enderror"
                                                name="marketer_id" id="">
                                                <option @selected(!old('marketer_id'))>{{ __('general.choose_marketer') }}
                                                </option>
                                                @foreach ($marketers as $marketer)
                                                    <option @selected(old('marketer_id',$coupon->marketer->id) == $coupon->marketer->id) value="{{ $marketer->id }}">{{ $marketer->name }}</option>
                                                @endforeach
                                            </select>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ __('general.code') }}</label>
                                        <input type="text" name="code" value="{{ old('code',$coupon->code) }}" class="form-control"
                                            id="exampleInputName" placeholder="@lang('general.code')">
                                    </div>
                                </div>
                            </div>
                          


                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ __('general.discount') }}</label>
                                        <input type="number" name="discount" value="{{ old('discount',$coupon->discount) }}" class="form-control"
                                            id="exampleInputName" placeholder="@lang('general.discount')">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer mb-5">
                            <button type="submit"
                                class="btn btn-outline-primary px-5
                                  ">@lang('general.save')</button>
                            <a href="{{ route('coupons.index') }}"
                                class="btn btn-outline-danger px-5
                                    ">@lang('general.cancel')</a>
                        </div>
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
