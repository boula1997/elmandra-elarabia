@extends('admin.components.form')
@section('form_action', route('roles.store'))
@section('form_type', 'POST')
@section('fields_content')
    <!-- Content Wrapper. Contains blog content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-custom">
                            <div class="card-header card-header-tabs-line">
                                @include('admin.components.breadcrumb', [
                                    'module' => 'roles',
                                    'action' => 'create',
                                ])
                            </div>
                            <!-- form start -->
                            <div class="row p-3 mb-5">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>@lang('general.name'):</strong>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                            </div>
                                              {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control @error('') invalid @enderror']) !!}
                                         </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        @include('admin.components.selectAll',['on'=>'success','off'=>'danger'])
                                        <strong>@lang('general.permission'):</strong>
                                        <br />
                                        <div class="row">
                                            @foreach ($permission as $value)
                                                <div class="col-md-3">
                                                    <div
                                                        class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                        <input type="checkbox" name="permission[]"
                                                            value="{{ $value->id }}" class="custom-control-input"
                                                            id="customSwitch{{ $value->id }}">
                                                        <label class="custom-control-label"
                                                            for="customSwitch{{ $value->id }}">{{ __('general.'.$value->name) }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit"
                                        class="btn btn-outline-primary px-5
                                           ">@lang('general.save')</button>
                                </div>
                            </div>
                            <!-- /.card -->


                        </div>
                        <!--/.col (left) -->

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
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

    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endpush
