<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
            <a href="{{ route('front.home') }}">
                <img class="animation__shake" src="{{ asset('admin/img/logo.png') }}" alt="AdminLTELogo"
                    height="60" width="60">
            </a>
        </div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class=" px-1 fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            {{-- <a href="{{ route('front.home') }}" class="nav-link">@lang('general.home')</a> --}}
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('dashboard') }}" class="nav-link">@lang('general.home')</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class=" px-1 fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="@lang('general.search')"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class=" px-1 fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class=" px-1 fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>



        </li>

        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li class="{{ app()->getLocale() == $localeCode ? 'd-none' : '' }}">
                <a rel="alternate" hreflang="{{ $localeCode }}"
                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    <img src="{{ asset('flags/' . $localeCode . '.png') }}" class="flag" alt="KSA Flag">
                </a>
            </li>
        @endforeach

        <!-- Newsletters Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('messages.index') }}">
                <i class=" px-1 far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">{{ itemsCount('messages') }}</span>
            </a>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class=" px-1 far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 {{ __('general.notifications') }}</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class=" px-1 fas fa-envelope mr-2"></i> 4 {{ __('general.new_messages ') }}
                    <span class="float-right text-muted text-sm">3 {{ __('general.mins') }}</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class=" px-1 fas fa-users mr-2"></i> 8 {{ __('general.friend_requests') }}
                    <span class="float-right text-muted text-sm">12 {{ __('general.hours') }}</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class=" px-1 fas fa-file mr-2"></i> 3 {{ __('general.new_reports') }}
                    <span class="float-right text-muted text-sm">2 {{ __('general.days') }}</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">{{ __('general.see_all_notifications') }}</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class=" px-1 fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class=" px-1 fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
        <div class="d-flex justify-content-center">
            <img class="logo-side"  src="{{ settings()->white_logo }}" alt="">
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

                @can('admin-list')
                    <li class="nav-item">   
                        <a href="#" class="nav-link">
                            <i class=" px-1 fas fa-users-cog"></i>
                            <p>
                                @lang('general.admins')
                                <i class=" px-1 fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('admins') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admins.index') }}" class="nav-link">
                                    <i class=" px-1 far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('role-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class=" px-1 fas fa-user-tag"></i>
                            <p>
                                @lang('general.roles')
                                <i class=" px-1 fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('roles') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('roles.index') }}" class="nav-link">
                                    <i class=" px-1 far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('user-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class=" px-1 fas fa-users"></i>
                            <p>
                                @lang('general.users')
                                <i class=" px-1 fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('users') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}" class="nav-link">
                                    <i class=" px-1 far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan


                @can('team-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-user-friends"></i>
                            <p>
                                @lang('general.teams') <i class=" px-1 fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('teams') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('teams.index') }}" class="nav-link">
                                    <i class=" px-1 far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan



                @can('product-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fab fa-product-hunt"></i>
                            <p>
                                @lang('general.product') <i class=" px-1 fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('products') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('products.index') }}" class="nav-link">
                                    <i class=" px-1 far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('category-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fab fa-buromobelexperte"></i>
                            <p>
                                @lang('general.categories') <i class=" px-1 fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('categories') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('categories.index') }}" class="nav-link">
                                    <i class=" px-1 far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('subcategory-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fab fa-buromobelexperte"></i>
                            <p>
                                @lang('general.subcategories') <i class=" px-1 fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('subcategories') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('subcategories.index') }}" class="nav-link">
                                    <i class=" px-1 far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('slider-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-sliders-h"></i>
                            <p>
                                @lang('general.sliders') <i class=" px-1 fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('sliders') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('sliders.index') }}" class="nav-link">
                                    <i class=" px-1 far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('testimonial-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class=" px-1 fas fa-comments"></i>
                            <p>
                                @lang('general.testimonials') <i class=" px-1 fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('testimonials') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('testimonials.index') }}" class="nav-link">
                                    <i class=" px-1 far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan


                @can('page-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class=" px-1 fas fa-file"></i>
                            <p>
                                @lang('general.pages')
                                <i class=" px-1 fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('pages') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('pages.index') }}" class="nav-link">
                                    <i class=" px-1 far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan


                @can('counter-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class=" px-1 fas fa-globe"></i>
                            <p>
                                @lang('general.counters') <i class=" px-1 fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('counters') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('counters.index') }}" class="nav-link">
                                    <i class=" px-1 far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can('order-list')
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class=" px-1 fas fa-envelope-open-text"></i>
                        <p>
                            @lang('general.orders') <i class=" px-1 fas fa-angle-left right"></i>
                            <span class="badge badge-info right">{{ itemsCount('orders') }}</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('orders.index') }}" class="nav-link">
                                <i class=" px-1 far fa-circle nav-icon"></i>
                                <p>@lang('general.show')</p>
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan

                @can('contact-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class=" px-1 far fa-address-card"></i>
                            <p>
                                @lang('general.contacts') <i class=" px-1 fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('contacts') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('contacts.index') }}" class="nav-link">
                                    <i class=" px-1 far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan


                @can('message-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class=" px-1 fas fa-envelope-open-text"></i>
                            <p>
                                @lang('general.messages') <i class=" px-1 fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('messages') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('messages.index') }}" class="nav-link">
                                    <i class=" px-1 far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                
              
                @can('newsletter-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class=" px-1 fas fa-envelope-open-text"></i>
                            <p>
                                @lang('general.newsletters') <i class=" px-1 fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('newsletters') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('newsletters.index') }}" class="nav-link">
                                    <i class=" px-1 far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('setting-list')
                    <li class="nav-item">
                        <a href="{{ route('edit.setting') }}" class="nav-link">
                            <i class="fas fa-cog"></i>
                            <p>
                                @lang('general.settings')
                            </p>
                        </a>
                    </li>
                @endcan

                <li class="nav-item pb-3">

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <i class=" px-1 nav-icon  fa fa-sign-out text-white" aria-hidden="true"></i>
                        <button class="btn text-secondary" type="submit">@lang('general.logout')</button>

                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
