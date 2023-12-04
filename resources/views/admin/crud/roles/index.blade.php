@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains process content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content pt-2">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card">
                            <div class="card-header">
                                <!-- general form elements -->
                                <div class="row">
                                    <div class="col-md-6 d-flex d-flex justify-content-start">
                                        <h1 class="card-title fw-bold">@lang('general.roles')</h3>
                                    </div>
                                    @can('role-create')
                                        <div class="col-md-6 d-flex d-flex justify-content-end">
                                            <a href="{{ route('roles.create') }}">

                                                <button
                                                    class="btn btn-outline-primary px-5
                                                    "><i
                                                        class="fa fa-plus fa-sm px-2" aria-hidden="true"></i>
                                                    @lang('general.add')</button>
                                            </a>
                                        </div>
                                    @endcan
                                </div>
                            </div>
                            <div class="card-body">
                                


                                <table id="example1" class="table  table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>@lang('general.image')</th>
                                            <th>@lang('general.controls')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $key => $role)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td>
                                                    @include('admin.components.controls', [
                                                        'route' => 'roles',
                                                        'role' => 'role',
                                                        'module' => $role,
                                                    ])
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>


                            </div>
                        </div>

                    </div>

                </div>
                {!! $roles->render() !!}
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


@push('scripts')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
