@extends('front.layouts.master')
@section('content')
@include('front.components.breadcrumb',['name'=>__('general.categories') ])
@include('front.components.categoryproducts')
@endsection
