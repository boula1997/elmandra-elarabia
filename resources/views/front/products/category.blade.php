@extends('front.layouts.master')
@section('content')
@include('front.components.breadcrumb',['name'=>$category->title ])
@include('front.components.categoryproducts')
@endsection
