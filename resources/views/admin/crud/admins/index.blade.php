@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains admin content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content pt-2">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <!-- general form elements -->
                                <div class="row">
                                    <div class="col-md-6 d-flex d-flex justify-content-start">
                                        <h1 class="card-title fw-bold">@lang('general.admins')</h3>
                                    </div>
                                    @can('admin-create')
                                        <div class="col-md-6 d-flex d-flex justify-content-end">
                                            <a href="{{ route('admins.create') }}">

                                                <button class="btn btn-outline-primary px-5"><i class="fa fa-plus fa-sm px-2"
                                                        aria-hidden="true"></i> @lang('general.add')</button>
                                            </a>
                                        </div>
                                    @endcan
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <table id="example1" class="table  table-hover">
                                    <thead class="h-2">
                                        <tr class="p-0 m-0">
                                            <th>#</th>
                                            <th>@lang('general.image')</th>
                                            <th>@lang('general.name')</th>
                                            <th>@lang('general.email')</th>
                                            <th>@lang('general.phone')</th>
                                            <th>@lang('general.verify_status')</th>
                                            <th>@lang('general.nu_users')</th>
                                            {{-- <th>@lang('general.nu_orders')</th> --}}
                                            <th>@lang('general.nu_coupons')</th>
                                            <th>@lang('general.role')</th>
                                            <th>@lang('general.controls')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $admin)
                                            <tr class="p-0 m-0">
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img width="100" height="100" src="{{ $admin->image }}"
                                                        alt="{{ $admin->name }}"></td>
                                                <td>{{ $admin->name }}</td>
                                                <td>{{ $admin->email }}</td>
                                                <td>{{ $admin->phone }}</td>
                                                <td>{{ $admin->verified ? __('general.verifed') : __('general.noverifed') }}
                                                </td>
                                                <td>{{ count($admin->users) }}</td>
                                                {{-- <td>{{ $order_numbers[$loop->index]}}</td> --}}
                                                <td>{{ count($admin->coupons) }}</td>
                                                <td>
                                                    @if (!empty($admin->getRoleNames()))
                                                        @foreach ($admin->getRoleNames() as $v)
                                                            <label class="badge badge-success">{{ $v }}</label>
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>
                                                    @include('admin.components.controls', [
                                                        'route' => 'admins',
                                                        'role' => 'admin',
                                                        'module' => $admin,
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

    <script>
        $('.fa-check-circle').on('click', function(e) {
            $(this).addClass('disabled');

            e.preventDefault();
            var module_id = $(this).attr('module_id');
            let url = "{{ route('verifications.verify', ':id') }}";
            url = url.replace(':id', module_id);
            $.ajax({
                type: 'get',
                url: url,
                success: (response) => {
                    $(this).removeClass('disabled');
                    $(this).addClass('text-success');
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "{{ app()->getLocale() == 'ar' ? 'toast-top-left' : 'toast-top-right' }}",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    };

                    toastr.success("{{ __('general.verified_successfully') }}");

                },
                error: function(response) {
                    alert(response.error);
                    $(".err").addClass("d-block");
                    $(".err").removeClass("d-none");
                }
            });
        });
    </script>
@endpush
