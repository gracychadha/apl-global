@extends('website.layout.app')
@section('title', 'Welcome to APL GLOBAL LOGISTICS')
@section('content')
    <!-- slider -->
    @include('website.components.home.slider')

    <!-- Marquee -->
    @include('website.components.home.marque')

    <!-- About us Start -->
    @include('website.components.home.about-us')



    <!-- Service Start -->
    @include('website.components.home.services')
    <!-- why choose -->
    @include('website.components.home.why-choose')
    @include('website.components.home.what-we-do')


    <!-- Flip Box Start -->
    @include('website.components.home.award')

    <!-- Fid Start -->
    @include('website.components.home.counter')



    <!-- portfolio -->
    @include('website.components.home.portfolio')
    <!-- Testimonial Start -->
    @include('website.components.home.testimonial')

    @include('website.components.home.blog-section')


@endsection