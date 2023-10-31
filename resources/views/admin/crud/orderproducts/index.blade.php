@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains orderproduct content -->
    <div class="content-wrapper">
        <div class="container p-3">
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
                                            <h1 class="card-title fw-bold">
                                                <th>@lang('general.orderproducts')</th>
                                            </h3>
                                        </div>
                                        <div class="col-md-6 d-flex d-flex justify-content-end">
                                            <a href="{{ route('orderproducts.create') }}">

                                                <button
                                                    class="btn btn-outline-primary px-5
                                                            "><i
                                                        class="fa fa-plus fa-sm px-2"
                                                        aria-hidden="true"></i>@lang('general.add')</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    
                                    <table id="example1" class="table  table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>@lang('general.title')</th>
                                                <th>@lang('general.count')</th>
                                                <th>@lang('general.total')</th>
                                                <th>@lang('general.controls')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orderproducts as $orderproduct)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $orderproduct->product->title }}</td>
                                                    <td>{{ $orderproduct->product->count }}</td>
                                                    <td>{{ $orderproduct->product->total }} {{ __('general.pound') }}</td>
                                                    <td>
                                                        @include('admin.components.controls', [
                                                            'route' => 'orderproducts',
                                                            'role' => 'orderproduct',
                                                            'module' => $orderproduct,
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

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
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
