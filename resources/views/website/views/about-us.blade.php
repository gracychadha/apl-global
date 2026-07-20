@extends('website.layout.app')
@section('title', 'About Us - APL GLOBAL LOGISTICS')
@section('content')

    @include('website.components.about-us.banner')

    @include('website.components.about-us.about-section')
    @include('website.components.about-us.client-section')
    @include('website.components.about-us.progress')
    @include('website.components.home.team')
    <!-- Pricing Start -->
    @include('website.components.home.testimonial')
@endsection