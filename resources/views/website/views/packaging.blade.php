@extends('website.layout.app')
@section('title', 'Packaging - APL GLOBAL LOGISTICS')
@section('content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner">
                            <h1 class="pbmit-tbar-title"> Packaging </h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home') }}" class="home"><span>Home</span></a></span>
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-right"></i>
                            </span>
                            <span><span class="post-root post post-post current-item"> Packaging</span></span>
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
                            <img src="{{ asset('website/images/upload/packaging-main.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="pbmit-entry-content">
                            <h4 class="pbmit_title">Professional Packaging Solutions For Safe Cargo Handling</h4>

                            <p text-align="justify">
                                APL Logistics offers reliable packaging solutions designed to protect goods during storage
                                and transportation. We ensure secure handling and high-quality packaging for all types of
                                cargo.
                            </p>

                            <p text-align="justify">
                                Our packaging services are tailored to meet different shipping requirements using durable
                                materials and professional packing methods. From fragile items to heavy cargo, we focus on
                                safety, protection, and efficient transportation support for domestic and international
                                shipments.
                            </p>
                            <div class="service-list-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Safe & Secure Cargo Packaging</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Custom Packaging Solutions</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Fragile Item Protection Services</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Industrial & Commercial Packaging</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Durable Export Packaging Materials</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Professional Cargo Handling
                                                    Support</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Cost-Effective Packaging Services</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="fa fa-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text">Packaging For Domestic & International
                                                    Shipping</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="service-img_box">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="pbmit-animation-style1">
                                            <img src="{{ asset('website/images/upload/packaging-detail-01.png') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="pbmit-animation-style2">
                                            <img src="{{ asset('website/images/upload/packaging-detail-02.png') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-detail-accordion_box">
                                <h4 class="pbmit_title">Frequently Asked Questions</h4>

                                <p>
                                    Find answers to common questions about our packaging services, cargo protection methods,
                                    and shipping safety solutions.
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
                                                <span class="pbmit-accordion-title">01. What types of products can you
                                                    package?</span>
                                            </button>
                                        </h2>
                                        <div id="collapseOne1" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                We provide packaging solutions for commercial goods, fragile products,
                                                industrial equipment, retail items, and export cargo.
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
                                                <span class="pbmit-accordion-title">02. Do you provide customized packaging
                                                    solutions?</span>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo1" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                Yes, we offer customized packaging services based on cargo type, size, and
                                                transportation requirements to ensure maximum protection.
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
                                                    during packaging?</span>
                                            </button>
                                        </h2>
                                        <div id="collapseThree1" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                We use high-quality packaging materials and professional handling techniques
                                                to protect cargo from damage during transportation and storage.
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