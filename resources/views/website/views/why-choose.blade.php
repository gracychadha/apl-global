@extends('website.layout.app')
@section('title', 'About Us')
@section('content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner">
                            <h1 class="pbmit-tbar-title"> Why Choose Us</h1>
                                </div>
                            </div>
                            <div class="pbmit-breadcrumb">
                                <div class="pbmit-breadcrumb-inner">
                                    <span><a title="" href="{{ route('home') }}" class="home"><span>Home</span></a></span>
                                    <span class="sep">
                                        <i class="pbmit-base-icon-angle-right"></i>
                                    </span>
                                    <span><span class="post-root post post-post current-item"> Why Choose Us</span></span>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
            <!-- Title Bar End-->

            <!-- Page Content -->
            <div class="page-content">

                <!-- About Start --> 
                <section class="about-tracking_section">
                    <div class="container pbmit-col-stretched-yes pbmit-col-left">
                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <div class="pbmit-col-stretched-left">
                                    <div class="about-tracking_img">
                                        <img src="{{ asset('website/images/tracking-img.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-6">
                                <div class="about-tracking_left">
                                    <div class="pbmit-heading-subheading">
                                        <h4 class="pbmit-subtitle">About Us</h4>
                                        <h2 class="pbmit-title">Package tracking is easy with order number</h2>
                                        <div class="pbmit-heading_desc">
                                            Our tracking system is updated in real-time, so you can rest assured that you are getting the most up-to-date information on your parcel's progress. 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="pbmit-ihbox-style-2">
                                                <div class="pbmit-ihbox-headingicon">
                                                    <div class="pbmit-ihbox-headingicon d-flex">
                                                        <div class="pbmit-ihbox-icon">
                                                            <div class="pbmit-ihbox-icon-wrapper">
                                                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                                    <i class="pbmit-logistbiz-icon pbmit-logistbiz-icon-check"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pbmit-ihbox-contents">
                                                            <h2 class="pbmit-element-title">Boost your sale</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="pbmit-ihbox-style-2">
                                                <div class="pbmit-ihbox-headingicon">
                                                    <div class="pbmit-ihbox-headingicon d-flex">
                                                        <div class="pbmit-ihbox-icon">
                                                            <div class="pbmit-ihbox-icon-wrapper">
                                                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                                    <i class="pbmit-logistbiz-icon pbmit-logistbiz-icon-check"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pbmit-ihbox-contents">
                                                            <h2 class="pbmit-element-title">New Features</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pt-4">
                                            <div class="pbmit-ihbox-style-2">
                                                <div class="pbmit-ihbox-headingicon">
                                                    <div class="pbmit-ihbox-headingicon d-flex">
                                                        <div class="pbmit-ihbox-icon">
                                                            <div class="pbmit-ihbox-icon-wrapper">
                                                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                                    <i class="pbmit-logistbiz-icon pbmit-logistbiz-icon-check"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pbmit-ihbox-contents">
                                                            <h2 class="pbmit-element-title">New Features</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pt-4">
                                            <div class="pbmit-ihbox-style-2">
                                                <div class="pbmit-ihbox-headingicon">
                                                    <div class="pbmit-ihbox-headingicon d-flex">
                                                        <div class="pbmit-ihbox-icon">
                                                            <div class="pbmit-ihbox-icon-wrapper">
                                                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                                    <i class="pbmit-logistbiz-icon pbmit-logistbiz-icon-check"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pbmit-ihbox-contents">
                                                            <h2 class="pbmit-element-title">Boost your sale</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="about-tracking_btn">
                                        <a href="#" class="pbmit-btn">Get Quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- About End -->

                <!-- Client Start -->
                <section class="client_three">
                    <div class="container-fluid">
                        <div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="false" data-arrows="false" data-columns="6" data-margin="30" data-effect="slide">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Slide1 -->
                                    <article class="pbmit-ele-client pbmit-client-style-3">
                                        <div class="pbmit-border-wrapper text-align-center">
                                            <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                                <h4 class="pbmit-hide">07</h4>
                                                <div class="pbmit-client-hover-img">
                                                    <img src="{{ asset('website/images/homepage-2/client/client-dark-01.png') }}" class="img-fluid" alt="">
                                                </div>
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="{{ asset('website/images/homepage-2/client/client-01.png') }}" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <!-- Slide2 -->
                                    <article class="pbmit-ele-client pbmit-client-style-3">
                                        <div class="pbmit-border-wrapper text-align-center">
                                            <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                                <h4 class="pbmit-hide">07</h4>
                                                <div class="pbmit-client-hover-img">
                                                    <img src="{{ asset('website/images/homepage-2/client/client-dark-02.png') }}" class="img-fluid" alt="">
                                                </div>
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="{{ asset('website/images/homepage-2/client/client-02.png') }}" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <!-- Slide3 -->
                                    <article class="pbmit-ele-client pbmit-client-style-3">
                                        <div class="pbmit-border-wrapper text-align-center">
                                            <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                                <h4 class="pbmit-hide">07</h4>
                                                <div class="pbmit-client-hover-img">
                                                    <img src="{{ asset('website/images/homepage-2/client/client-dark-03.png') }}" class="img-fluid" alt="">
                                                </div>
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="{{ asset('website/images/homepage-2/client/client-03.png') }}" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <!-- Slide4 -->
                                    <article class="pbmit-ele-client pbmit-client-style-3">
                                        <div class="pbmit-border-wrapper text-align-center">
                                            <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                                <h4 class="pbmit-hide">07</h4>
                                                <div class="pbmit-client-hover-img">
                                                    <img src="{{ asset('website/images/homepage-2/client/client-dark-04.png') }}" class="img-fluid" alt="">
                                                </div>
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="{{ asset('website/images/homepage-2/client/client-04.png') }}" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <!-- Slide5 -->
                                    <article class="pbmit-ele-client pbmit-client-style-3">
                                        <div class="pbmit-border-wrapper text-align-center">
                                            <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                                <h4 class="pbmit-hide">07</h4>
                                                <div class="pbmit-client-hover-img">
                                                    <img src="{{ asset('website/images/homepage-2/client/client-dark-05.png') }}" class="img-fluid" alt="">
                                                </div>
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="{{ asset('website/images/homepage-2/client/client-05.png') }}" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="counter-three_box">
                            <div class="pbminfotech-ele-fid-style-3">
                                <div class="pbmit-fld-contents">
                                    <div class="pbmit-fld-wrap">
                                        <h4 class="pbmit-fid-inner">
                                            <span class="pbmit-fid-before"></span>
                                            <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="150" data-interval="20" data-before="" data-before-style="" data-after="" data-after-style="">0</span>
                                            <span class="pbmit-fid"><span>+</span></span>
                                        </h4>
                                        <h3 class="pbmit-fid-title">Most trusted compnies globally</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Client End -->

                <!-- Accordion Start --> 
                <section class="overflow-hidden">
                    <div class="container position-relative">
                        <div class="accordion-two_main"></div>
                        <div class="accordion-two_box">
                            <div class="row">
                                <div class="col-md-12 col-xl-6">
                                    <div class="accordion-two_leftbox">
                                        <div class="pbmit-heading-subheading animation-style1">
                                            <h4 class="pbmit-subtitle">What We Do</h4>
                                            <h2 class="pbmit-title">Creative, flexible & affordable web design.</h2>
                                        </div>
                                        <div class="accordion" id="accordionExample1">
                                            <div class="accordion-item active" id="headingOne1">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                                        <span class="pbmit-accordion-icon pbmit-accordion-icon-left">
                                                            <span class="pbmit-accordion-icon-closed">
                                                                <i class="fa fa-plus"></i>
                                                            </span>
                                                            <span class="pbmit-accordion-icon-opened">
                                                                <i class="fa fa-minus"></i>
                                                            </span>
                                                        </span>
                                                        <span class="pbmit-accordion-title">Endless Possibilities </span>
                                                    </button>
                                                </h2>
                                                <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                                                    <div class="accordion-body">
                                                        Quam nulla porttitor massa id neque aliquam Id leo in vitae turpis massa sed diam vel quam elementum.volutpat maece Iaculis at erat pellentesque adipiscing maecen.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo1">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                                        <span class="pbmit-accordion-icon pbmit-accordion-icon-left">
                                                            <span class="pbmit-accordion-icon-closed">
                                                                <i class="fa fa-plus"></i>
                                                            </span>
                                                            <span class="pbmit-accordion-icon-opened">
                                                                <i class="fa fa-minus"></i>
                                                            </span>
                                                        </span>
                                                        <span class="pbmit-accordion-title">Super Clean Code </span>
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1" data-bs-parent="#accordionExample1">
                                                    <div class="accordion-body">
                                                        Quam nulla porttitor massa id neque aliquam Id leo in vitae turpis massa sed diam vel quam elementum.volutpat maece Iaculis at erat pellentesque adipiscing maecen.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree1">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                                                        <span class="pbmit-accordion-icon pbmit-accordion-icon-left">
                                                            <span class="pbmit-accordion-icon-closed">
                                                                <i class="fa fa-plus"></i>
                                                            </span>
                                                            <span class="pbmit-accordion-icon-opened">
                                                                <i class="fa fa-minus"></i>
                                                            </span>
                                                        </span>
                                                        <span class="pbmit-accordion-title">Free Updates & Support</span>
                                                    </button>
                                                </h2>
                                                <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-bs-parent="#accordionExample1">
                                                    <div class="accordion-body">
                                                        Quam nulla porttitor massa id neque aliquam Id leo in vitae turpis massa sed diam vel quam elementum.volutpat maece Iaculis at erat pellentesque adipiscing maecen.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-6">
                                    <div class="accordion-two-right_img">
                                        <img src="{{ asset('website/images/homepage-2/faq-right-img.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Accordion End --> 

                <!-- Ihbox Start -->
                <section class="ihbox-section_two">
                    <div class="container">
                        <div class="pbmit-heading-subheading text-center">
                            <h4 class="pbmit-subtitle">Why choose us</h4>
                            <h2 class="pbmit-title">We offer smart chat solutions for <br> better collaboration</h2>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-6">
                                <article class="pbmit-miconheading-style-4">
                                    <div class="pbmit-ihbox-style-4">
                                        <div class="pbmit-ihbox-headingicon d-flex">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                                    <img src="{{ asset('website/images/homepage-2/ihbox/iconbox1.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">
                                                    Real-Time Tracking
                                                </h2>
                                                <div class="pbmit-heading-desc">Now were up in the big leagues getting’ our turn at boat And when the odds are against him and their.</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="pbmit-miconheading-style-4">
                                    <div class="pbmit-ihbox-style-4">
                                        <div class="pbmit-ihbox-headingicon d-flex">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                                    <img src="{{ asset('website/images/homepage-2/ihbox/iconbox2.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">
                                                    Transparent Pricing
                                                </h2>
                                                <div class="pbmit-heading-desc">Now were up in the big leagues getting’ our turn at boat And when the odds are against him and their.</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="pbmit-miconheading-style-4">
                                    <div class="pbmit-ihbox-style-4">
                                        <div class="pbmit-ihbox-headingicon d-flex">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                                    <img src="{{ asset('website/images/homepage-2/ihbox/iconbox3.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">
                                                    Warehouse Storage
                                                </h2>
                                                <div class="pbmit-heading-desc">Now were up in the big leagues getting’ our turn at boat And when the odds are against him and their.</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="pbmit-miconheading-style-4">
                                    <div class="pbmit-ihbox-style-4">
                                        <div class="pbmit-ihbox-headingicon d-flex">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                                    <img src="{{ asset('website/images/homepage-2/ihbox/iconbox4.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">
                                                    On Time Delivery
                                                </h2>
                                                <div class="pbmit-heading-desc">Now were up in the big leagues getting’ our turn at boat And when the odds are against him and their.</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="pbmit-miconheading-style-4">
                                    <div class="pbmit-ihbox-style-4">
                                        <div class="pbmit-ihbox-headingicon d-flex">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                                    <img src="{{ asset('website/images/homepage-2/ihbox/iconbox5.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">
                                                    Security For Cargo
                                                </h2>
                                                <div class="pbmit-heading-desc">Now were up in the big leagues getting’ our turn at boat And when the odds are against him and their.</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="pbmit-miconheading-style-4">
                                    <div class="pbmit-ihbox-style-4">
                                        <div class="pbmit-ihbox-headingicon d-flex">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                                    <img src="{{ asset('website/images/homepage-2/ihbox/iconbox6.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">
                                                    Easy Payment Method
                                                </h2>
                                                <div class="pbmit-heading-desc">Now were up in the big leagues getting’ our turn at boat And when the odds are against him and their.</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Ihbox End --> 

            </div>
@endsection