@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains advertisement content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="container p-3">
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
                                            <h1 class="card-title fw-bold">@lang('general.pages')</h3>
                                        </div>
                                        @can('advertisement-create')
                                            <div class="col-md-6 d-flex d-flex justify-content-end">
                                                <a href="{{ route('advertisements.create') }}">

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
                                                <th>@lang('general.title')</th>
                                                <th>@lang('general.subtitle')</th>
                                                {{-- <th>@lang('general.end_date')</th> --}}
                                                <th>@lang('general.image')</th>
                                                <th>@lang('general.controls')</th>
                                                {{-- // TODO(boula): make advertisments status controled --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($advertisements as $advertisement)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $advertisement->title   }}</td>
                                                    <td>{{ $advertisement->translate(app()->getLocale())->subtitle !==null? $advertisement->translate(app()->getLocale())->subtitle : __('general.nothing')}}</td>

                                                    {{-- <td>{{ $advertisement->start_date!==null?$advertisement->start_date :__('general.nothing')  }}</td>   --}}
                                                    {{-- <td>{{ $advertisement->end_date!==null?$advertisement->end_date :__('general.nothing')  }}</td>  --}}
                                                    <td><img width="100" height="100" src="{{ $advertisement->image }}"
                                                        alt="{{ $advertisement->title }}"></td>
                                                    <td>
                                                        @include('admin.components.controls', [
                                                            'route' => 'advertisements',
                                                            'role' => 'advertisement',
                                                            'module' => $advertisement,
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
        </div>
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
