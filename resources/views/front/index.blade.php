@extends('front.layouts.master')
@section('content')
    @include('front.components.slider')
    @include('front.components.products-home')
    @include('front.components.about')
    {{-- @include('front.components.services-home')  --}}
    @include('front.components.counter')
    @include('front.components.team')
    {{-- @include('front.components.testimonial') --}}
@endsection
