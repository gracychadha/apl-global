@extends('website.layout.app')
@section('title', 'Air Freight - APL GLOBAL LOGISTICS')
@section('content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner">
                            <h1 class="pbmit-tbar-title"> Air Freight </h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home') }}" class="home"><span>Home</span></a></span>
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-right"></i>
                            </span>
                            <span><span class="post-root post post-post current-item"> Air Freight</span></span>
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
                            <img src="{{ asset('website/images/upload/air-main.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="pbmit-entry-content">
                            <h4 class="pbmit_title">Air Freight Delivering Fast & Secure Cargo Solutions</h4>

                            <p text-align="justify">
                                APL Logistics provides reliable and time-sensitive air freight services for businesses
                                worldwide. We ensure fast, secure, and efficient transportation of cargo with complete
                                shipment monitoring and professional handling.
                            </p>
                            <p text-align="justify">
                                Our air freight solutions are designed to meet urgent delivery requirements while
                                maintaining safety, speed, and cost efficiency. With a strong global network and experienced
                                logistics professionals, we simplify international cargo transportation and customs
                                clearance for smooth worldwide shipping operations.
                            </p>
                            <div class="service-list-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Fast Worldwide Air Cargo Delivery</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Secure Shipment Handling Services</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Real-Time Cargo Tracking System</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Customs Clearance Assistance</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Affordable International Freight
                                                    Solutions</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Door-To-Door Delivery Support</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Professional Logistics Management</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Safe & Timely Cargo Transportation</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="service-img_box">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="pbmit-animation-style1">
                                            <img src="{{ asset('website/images/upload/air-detail-01.png') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="pbmit-animation-style2">
                                            <img src="{{ asset('website/images/upload/air-detail-02.png') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-detail-accordion_box">
                                <h4 class="pbmit_title">Frequently Asked Questions</h4>

                                <p>
                                    Find answers to common questions about our air freight services, shipment process,
                                    delivery timelines, and cargo handling solutions.
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
                                                <span class="pbmit-accordion-title">01. How long does air freight delivery
                                                    take?</span>
                                            </button>
                                        </h2>
                                        <div id="collapseOne1" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                Air freight is one of the fastest shipping methods, and delivery timelines
                                                depend on the destination, customs process, and shipment type.
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
                                                <span class="pbmit-accordion-title">02. Do you provide international air
                                                    cargo services?</span>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo1" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                Yes, we offer reliable international air freight solutions with secure cargo
                                                handling and worldwide delivery support.
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
                                                <span class="pbmit-accordion-title">03. Can I track my shipment
                                                    online?</span>
                                            </button>
                                        </h2>
                                        <div id="collapseThree1" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                Yes, we provide real-time shipment tracking so customers can monitor their
                                                cargo throughout the transportation process.
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