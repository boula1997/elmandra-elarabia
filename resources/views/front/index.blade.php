@extends('front.layouts.master')
@section('content')
    @include('front.components.slider')
    @include('front.components.about')
    @include('front.components.services-home') 
    @include('front.components.process')
    @include('front.components.counter')
    @include('front.components.team')
    @include('front.components.testimonial')
    
    {{-- 
    @include('front.components.projects')
    @include('front.components.slider')
    @include('front.components.testimonial')
    @include('front.components.team')
    @include('front.components.stat')
    --}}
@endsection
