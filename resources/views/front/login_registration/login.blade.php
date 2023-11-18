@extends('front.layouts.master')
@section('content')
@include('front.components.breadcrumb',['name' => __('general.login')])
@include('front.components.login')
@endsection