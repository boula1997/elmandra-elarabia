@extends('front.layouts.master')
@section('content')
@include('front.components.breadcrumb',['name'=>__('general.subcategories') ])
@include('front.components.subcategoryproducts')
@endsection
