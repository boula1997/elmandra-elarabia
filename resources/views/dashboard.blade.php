@extends('admin.layouts.master')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@lang('general.dashboard')</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-{{ app()->getLocale() =='ar'?'left':'right' }}">
                                <li class="breadcrumb-item"><a href="#">@lang('general.home')</a></li>
                                <li class="breadcrumb-item active">@lang('general.dashboard')</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{itemsCount('services')}}</h3>

                                    <p>@lang('general.services')</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="{{route('services.index')}}" class="small-box-footer">@lang('general.moreinfo') <i
                                        class="fas fa-arrow-circle-{{ app()->getLocale() =='ar'?'left':'right' }}"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{itemsCount('testimonials')}}</h3>

                                    <p>@lang('general.testimonials')</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="{{route('testimonials.index')}}" class="small-box-footer">@lang('general.moreinfo') <i
                                        class="fas fa-arrow-circle-{{ app()->getLocale() =='ar'?'left':'right' }}"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{itemsCount('categories')}}</h3>

                                    <p>@lang('general.categories')</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="{{route('categories.index')}}" class="small-box-footer">@lang('general.moreinfo') <i
                                        class="fas fa-arrow-circle-{{ app()->getLocale() =='ar'?'left':'right' }}"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{itemsCount('subcategories')}}</h3>

                                    <p>@lang('general.subcategories')</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="{{route('subcategories.index')}}" class="small-box-footer">@lang('general.moreinfo') <i
                                        class="fas fa-arrow-circle-{{ app()->getLocale() =='ar'?'left':'right' }}"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{itemsCount('processes')}}</h3>

                                    <p>@lang('general.processes')</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="{{route('processes.index')}}" class="small-box-footer">@lang('general.moreinfo') <i
                                        class="fas fa-arrow-circle-{{ app()->getLocale() =='ar'?'left':'right' }}"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{itemsCount('orders')}}</h3>

                                    <p>@lang('general.orders')</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="{{route('orders.index')}}" class="small-box-footer">@lang('general.moreinfo') <i
                                        class="fas fa-arrow-circle-{{ app()->getLocale() =='ar'?'left':'right' }}"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{itemsCount('faqs')}}</h3>

                                    <p>@lang('general.faqs')</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{route('faqs.index')}}" class="small-box-footer">@lang('general.moreinfo') <i
                                        class="fas fa-arrow-circle-{{ app()->getLocale() =='ar'?'left':'right' }}"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{itemsCount('users')}}</h3>

                                    <p>@lang('general.userreg')</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="" class="small-box-footer">@lang('general.moreinfo') <i
                                        class="fas fa-arrow-circle-{{ app()->getLocale() =='ar'?'left':'right' }}"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{itemsCount('pages')}}</h3>

                                    <p>@lang('general.pages')</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="{{route('pages.index')}}" class="small-box-footer">@lang('general.moreinfo') <i
                                        class="fas fa-arrow-circle-{{ app()->getLocale() =='ar'?'left':'right' }}"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
@endsection
