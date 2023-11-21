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
                            <div class="small-box bg-indigo">
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
                            <div class="small-box bg-pink">
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
                            <div class="small-box bg-teal">
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

                            <!-- small box -->
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-danger">
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
                            <div class="small-box bg-primary">
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
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>{{itemsCount('advertisements')}}</h3>

                                    <p>@lang('general.advertisements')</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="{{route('advertisements.index')}}" class="small-box-footer">@lang('general.moreinfo') <i
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
