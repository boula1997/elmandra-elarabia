@extends('front.layouts.master')
@section('content')
@include('front.components.breadcrumb',['name'=>($subcategory->title)])
@include('front.components.products')
@endsection
