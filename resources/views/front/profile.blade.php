@extends('front.layouts.master')
@section('content')
    @include('front.components.breadcrumb', ['name' => __('general.profile')])
    @include('front.components.profile')
@endsection
