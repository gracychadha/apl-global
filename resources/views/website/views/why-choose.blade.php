@extends('website.layout.app')
@section('title', 'Why Choose Us - APL GLOBAL LOGISTICS')
@section('content')

    <!-- Title Bar End-->
    @include('website.components.why-choose.banner')

    @include('website.components.why-choose.about-section')
    @include('website.components.home.what-we-do')
    @include('website.components.home.why-choose')


@endsection