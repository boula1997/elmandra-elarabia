@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper px-3">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="card card-custom mb-2">
                        <div class="card-header card-header-tabs-line">
                            @include('admin.components.breadcrumb', [
                                'module' => 'roles',
                                'action' => 'show',
                            ])
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('general.name') }}</strong>
                                        {{ $role->name }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($rolePermissions as $v)
                                    
                                    <div class="col-md-3">
                                        <div
                                            class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                            {{-- <input type="checkbox" name="permission[]"
                                                value="{{ $value->id }}" class="custom-control-input"
                                                id="customSwitch{{ $value->id }}"> --}}
                                            <label class="" for="customSwitch">{{ $v->name }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{-- <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('general.permissions') }}</strong>
                                        @if (!empty($rolePermissions))
                                            @foreach ($rolePermissions as $v)
                                                <label class="label label-success">{{ $v->name }},</label>
                                                <div class="col-md-3">
                                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                        <input type="checkbox" name="permission[]"
                                                            value="{{ $value->id }}" class="custom-control-input"
                                                            id="customSwitch{{ $value->id }}">
                                                        <label class="" for="customSwitch{{ $v->id }}">{{ $v->name }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>



    </div>
@endsection
