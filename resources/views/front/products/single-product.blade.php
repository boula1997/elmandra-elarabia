@extends('front.layouts.master')
@section('content')
{{-- @include('front.components.breadcrumb',['name'=>$product->title]) --}}
@include('front.components.breadcrumb',['name'=>$product->title,'mid'=>(__('general.products')),'route_mid'=>'front.product'])
@include('front.components.single-product')

@endsection
