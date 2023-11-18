@extends('front.layouts.master')
@section('content')
    @include('front.components.breadcrumb', ['name' => __('general.testimonials')])
    @include('front.components.testimonial')
@endsection
