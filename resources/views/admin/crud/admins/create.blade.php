@extends('admin.components.form')
@section('form_action', route('admins.store'))
@section('form_type', 'POST')
@section('fields_content')
    @method('post')
    <!-- Content Wrapper. Contains blog content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            @include('admin.components.alert-error')
            <div class="container-fluid">
                <div class="row">

                    <!-- left column -->
                    <div class="col-md-12">

                        <!-- general form elements -->
                        <div class="card card-custom">
                            <div class="card-header card-header-tabs-line">
                                @include('admin.components.breadcrumb', [
                                    'module' => 'admins',
                                    'action' => 'create',
                                ])
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">@lang('general.name')</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                         <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('') invalid @enderror"
                                        id="exampleInputName" placeholder="@lang('general.name')">
                                
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">@lang('general.email')</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('') invalid @enderror"
                                        id="exampleInputEmail" placeholder="@lang('general.email')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">@lang('general.phone')</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <input type="text" name="phone" value="{{ old('phone') }}" class="form-control @error('') invalid @enderror"
                                        id="exampleInputphone" placeholder="@lang('general.phone')">
                                    </div>
                                </div>
                              
                                <div class="form-group">
                                    <label for="exampleInputEmail1">@lang('general.password')</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                         <input type="password" name="password" value="{{ old('password') }}"
                                        class="form-control @error('') invalid @enderror" id="exampleInputPassword" placeholder="@lang('general.password')">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">@lang('general.confirm_password')</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <input type="password" name="confirm-password" value="{{ old('confirm-password') }}"
                                        class="form-control @error('') invalid @enderror" id="exampleInputConfirmpassword"
                                        placeholder="@lang('general.confirm_password')">
                                    </div>
                                </div>
                                
                                <div class="form-group d-none">
                                    <label for="exampleInputEmail1">@lang('general.role')</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <select name="roles" id="" class="form-control @error('') invalid @enderror">
                                                {{ $role=str_contains(url()->previous(),'/Admin')?'admin':(str_contains(url()->previous(),'/Seller')?'seller':'marketer' )}}
                                                <option value="{{ $role }}">{{ $role }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    @include('admin.components.image', [
                                        'label' => __('general.image'),
                                        'value' => old('image'),
                                        'name' => 'image',
                                        'id' => 'kt_image_3',
                                        'accept' => 'image/*',
                                        'required' => true,
                                    ])

                                </div>
                                <div class="card-footer mb-5">
                                    <button type="submit" class="btn btn-outline-primary px-5">@lang('general.save')</button>
                                    <a onclick="history.back()"
                                        class="btn btn-outline-danger px-5
                                            ">@lang('general.cancel')</a>
                                </div>
                            </div>
                            <!-- /.card -->


                        </div>
                        <!--/.col (left) -->

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
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
@endpush
