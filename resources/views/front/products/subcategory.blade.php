@extends('front.layouts.master')
@section('content')
@include('front.components.breadcrumb',['name'=>$subcategory->title,'mid'=>$subcategory->category->title])
@include('front.components.subcategoryproducts')
@endsection
