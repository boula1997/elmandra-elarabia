@extends('admin.components.form')
@section('form_action', route('roles.update', $role->id))
@section('form_type', 'POST')
@section('fields_content')
    @method('put')
    <!-- Content Wrapper. Contains blog content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-secondary">
                            <div class="card-header card-header-tabs-line">
                                @include('admin.components.breadcrumb', [
                                    'module' => 'roles',
                                    'action' => 'edit',
                                ])
                            </div>
                            <div class="card-header">
                                <h1 class="card-title fw-bold"> @lang('general.create') @lang('general.user')</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->
                            <div class="row p-3">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>@lang('general.name'):</strong>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                            </div>
                                             {!! Form::text('name', old('name', $role->name), ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>@lang('general.permission'):</strong>
                                        @include('admin.components.selectAll',['on'=>'success','off'=>'danger'] )

                                        <br />
                                        <div class="row">
                                            @foreach ($permission as $value)
                                                <div class="col-md-3">
                                                    <div
                                                        class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                        <input type="checkbox" @checked(in_array($value->id, $rolePermissions) ? true : false)
                                                            name="permission[]" value="{{ $value->id }}"
                                                            class="custom-control-input"
                                                            id="customSwitch{{ $value->id }}">
                                                        <label class="custom-control-label"
                                                            for="customSwitch{{ $value->id }}">{{ $value->name }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="text-center">
                                                <button type="submit"
                                                    class="btn btn-outline-primary px-5 mb-5 w-25
                                                ">@lang('general.save')</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->


                        </div>
                        <!--/.col (left) -->

                    </div>
                    <!-- /.row -->
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
