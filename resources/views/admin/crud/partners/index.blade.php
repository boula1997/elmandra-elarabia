@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains partner content -->
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
                                            <h1 class="card-title fw-bold">@lang('general.partners')</h3>
                                        </div>
                                        @can('partner-create')
                                            <div class="col-md-6 d-flex d-flex justify-content-end">
                                                <a href="{{ route('partners.create') }}">

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
                                                <th>@lang('general.title')</th>
                                                <th>@lang('general.controls')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($partners as $partner)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><img width="100" height="100" src="{{ $partner->image }}"
                                                            alt="{{ $partner->title }}"></td>
                                                    <td>{{ $partner->title }}</td>
                                                    <td>
                                                        @include('admin.components.controls', [
                                                            'route' => 'partners',
                                                            'role' => 'partner',
                                                            'module' => $partner,
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
