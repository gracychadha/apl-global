@extends('website.layout.app')
@section('title', 'Ocean Freight - APL GLOBAL LOGISTICS')
@section('content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner">
                            <h1 class="pbmit-tbar-title"> Ocean Freight </h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home') }}" class="home"><span>Home</span></a></span>
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-right"></i>
                            </span>
                            <span><span class="post-root post post-post current-item"> Ocean Freight</span></span>
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
                            <img src="{{ asset('website/images/upload/ocean-main.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="pbmit-entry-content">
                            <h4 class="pbmit_title">Ocean Freight Delivering Global Shipping Solutions</h4>

                            <p text-align="justify">
                                APL Logistics offers reliable and cost-effective ocean freight services for international
                                cargo transportation. We ensure safe handling, efficient shipping, and timely delivery for
                                all types of goods across global ports.

                            </p>
                            <p text-align="justify">
                                Our ocean freight solutions are designed to support businesses with flexible shipping
                                options, secure cargo management, and smooth customs clearance services. With a strong
                                global shipping network and experienced logistics professionals, we deliver dependable sea
                                freight solutions tailored to your business needs.

                            </p>
                            <div class="service-list-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Worldwide Sea Freight Services</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Secure Container Transportation</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Import & Export Shipping Support</span>
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
                                                <span class="pbmit-icon-list-text">Cost-Effective Cargo Solutions</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Full Container & LCL Services</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Real-Time Shipment Tracking</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Safe & Timely Global Delivery</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="service-img_box">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="pbmit-animation-style1">
                                            <img src="{{ asset('website/images/upload/ocean-detail-01.png') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="pbmit-animation-style2">
                                            <img src="{{ asset('website/images/upload/ocean-detail-02.png') }}"
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
                                                <span class="pbmit-accordion-title">01. What types of cargo can be shipped
                                                    by ocean freight?</span>
                                            </button>
                                        </h2>
                                        <div id="collapseOne1" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                We handle a wide range of cargo including commercial goods, containers,
                                                machinery, industrial products, and bulk shipments.
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
                                                <span class="pbmit-accordion-title">02. Do you provide international sea
                                                    freight services?</span>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo1" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                Yes, we provide reliable international ocean freight services with global
                                                shipping coverage and customs clearance support.
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
                                                <span class="pbmit-accordion-title">03. Can I track my ocean
                                                    shipment?</span>
                                            </button>
                                        </h2>
                                        <div id="collapseThree1" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                Yes, we offer real-time shipment tracking to help customers monitor their
                                                cargo throughout the shipping journey.
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