@extends('front.layouts.master')
@section('content')
    @include('front.components.breadcrumb', ['name' => __('general.team')])
    @include('front.components.team')
@endsection
