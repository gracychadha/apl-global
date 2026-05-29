@extends('website.layout.app')
@section('title', 'Road Freight - APL GLOBAL LOGISTICS')
@section('content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner">
                            <h1 class="pbmit-tbar-title"> Road Freight </h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home') }}" class="home"><span>Home</span></a></span>
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-right"></i>
                            </span>
                            <span><span class="post-root post post-post current-item"> Road Freight</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">

        <!-- Service Details -->
        <section class="service_details">
            <div class="container">
                <div class="row">
                    @include('website.components.service.sidebar')
                    <div class="col-lg-9 service-right-col order-1">
                        <div class="pbmit-service-feature-image">
                            <img src="{{ asset('website/images/upload/road-main.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="pbmit-entry-content">
                            <h4 class="pbmit_title">Road Freight Delivering Safe & Timely Transportation</h4>

                            <p text-align="justify">
                                APL Logistics provides reliable road freight services designed to ensure smooth and
                                efficient transportation of goods across local and international routes. We focus on safe
                                cargo handling, timely delivery, and cost-effective logistics solutions.
                            </p>
                            <p text-align="justify">
                                Our road freight network supports businesses with flexible transportation options, real-time
                                tracking, and professional logistics management. With experienced drivers and modern
                                transport facilities, we ensure secure and dependable cargo delivery for every shipment.


                            </p>
                            <div class="service-list-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Domestic & International Road
                                                    Transport</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Safe & Secure Cargo Delivery</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Real-Time Vehicle Tracking</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Flexible Transportation Solutions</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Fast Door-To-Door Delivery</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Experienced Logistics Support Team</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Efficient Supply Chain Management</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Affordable Freight Transportation</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="service-img_box">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="pbmit-animation-style1">
                                            <img src="{{ asset('website/images/upload/road-detail-01.png') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="pbmit-animation-style2">
                                            <img src="{{ asset('website/images/upload/road-detail-02.png') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-detail-accordion_box">
                                <h4 class="pbmit_title">Frequently Asked Questions</h4>

                                <p>
                                    Find answers to common questions about our road freight services, transportation
                                    process, cargo safety, and delivery solutions.
                                </p>
                                <div class="accordion" id="accordionExample1">
                                    <div class="accordion-item active" id="headingOne1">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne1" aria-expanded="false"
                                                aria-controls="collapseOne1">
                                                <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                                    <span class="pbmit-accordion-icon-closed">
                                                        <i class="fa fa-plus"></i>
                                                    </span>
                                                    <span class="pbmit-accordion-icon-opened">
                                                        <i class="fa fa-minus"></i>
                                                    </span>
                                                </span>
                                                <span class="pbmit-accordion-title">01. What areas do you cover for road
                                                    freight services?</span>
                                            </button>
                                        </h2>
                                        <div id="collapseOne1" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                We provide reliable road freight transportation services across domestic and
                                                international routes with timely delivery support.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo1">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo1"
                                                aria-expanded="false" aria-controls="collapseTwo1">
                                                <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                                    <span class="pbmit-accordion-icon-closed">
                                                        <i class="fa fa-plus"></i>
                                                    </span>
                                                    <span class="pbmit-accordion-icon-opened">
                                                        <i class="fa fa-minus"></i>
                                                    </span>
                                                </span>
                                                <span class="pbmit-accordion-title">02. Is cargo tracking available for road
                                                    shipments?</span>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo1" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                Yes, we offer real-time tracking services so customers can monitor their
                                                shipments throughout the transportation process.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree1">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree1"
                                                aria-expanded="false" aria-controls="collapseThree1">
                                                <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                                    <span class="pbmit-accordion-icon-closed">
                                                        <i class="fa fa-plus"></i>
                                                    </span>
                                                    <span class="pbmit-accordion-icon-opened">
                                                        <i class="fa fa-minus"></i>
                                                    </span>
                                                </span>
                                                <span class="pbmit-accordion-title">03. How do you ensure cargo safety
                                                    during transportation?</span>
                                            </button>
                                        </h2>
                                        <div id="collapseThree1" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                We use secure handling procedures, experienced drivers, and modern
                                                transportation systems to ensure maximum cargo safety.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Details End -->

    </div>

@endsection