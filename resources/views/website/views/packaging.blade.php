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
                            <h4 class="pbmit_title">Overview</h4>

                            <p align="justify">
                                Our packaging staff attaches great importance to customizing the booking process for our
                                customers. That’s why we strive to find the air freight solution that best suits your needs.
                                We’ll ask you when the freight is available, what the required delivery date is, and if
                                there’s potential to save on time or cost. Your answers to these and other questions help us
                                decide if you should book the air freight as direct. We’ll also see if our sea-air service
                                is a better solution for you.

                                <br>
                                We have more than twenty years of experience. During that time, we’ve become expert in
                                freight transportation by air and all its related services. We work closely with all major
                                airlines around the world. Ongoing negotiations ensure that we always have the cargo space
                                we need and the ability to offer you competitive rates – even during the high season.

                                <br>
                                Where possible, we’ll erect and dismantle Unit Load Devices (ULDs), reducing significantly
                                the risk of damage to your shipment and saving you time and expense. We can do this because
                                many of our freight stations have their own ground transportation at or around the airport.
                            </p>



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
                            <h4 class="pbmit_title">Stats & Charts</h4>

                            <p align="justify">
                                Our mix of company-owned and contractor assets allows us to retain optimal levels of control
                                whilst expanding our reach to over 96% of towns in Australia. With 40 years of LTL
                                experience, we are now a trusted LTL freight provider for shippers of all sizes and
                                commodity types.
                                <br>

                                Our LTL service extends to all states and territories, and includes multiple per-week
                                services to places many others only serve occasionally, including Darwin, Alice Springs,
                                Newman, Mt. Isa, Launceston and Burnie.
                                <br>

                                We pride ourselves on providing the best transport and shipping services currently available
                                in Australia. Our skilled personnel, utilising the latest communications, tracking and
                                processing software, combined with decades of experience, ensure all freight is are shipped,
                                trans-shipped and delivered as safely, securely, and promptly as possible.


                            </p>
                            <h4 class="pbmit_title">How It Works?
                            </h4>

                            <p align="justify">
                                We have more than twenty years of experience. During that time, we’ve become expert in
                                freight transportation by air and all its related services. We work closely with all major
                                airlines around the world. Ongoing negotiations ensure that we always have the cargo space
                                we need and offer you competitive rates.


                            </p>
                            <div class="service-detail-accordion_box">
                                <h4 class="pbmit_title">Frequently Asked Questions</h4>

                                <p>
                                    Find answers to commonly asked questions about our packaging services, cargo protection
                                    methods,
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
                                                <span class="pbmit-accordion-title">01. Which Plan Is Right For Me?</span>
                                            </button>
                                        </h2>
                                        <div id="collapseOne1" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                Our skilled personnel, utilising the latest communications, tracking and
                                                processing software, combined with decades of experience, ensure all freight
                                                is are shipped, trans-shipped and delivered as safely.
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
                                                <span class="pbmit-accordion-title">02. Do I have to commit to a
                                                    contract?</span>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo1" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                Our skilled personnel, utilising the latest communications, tracking and
                                                processing software, combined with decades of experience, ensure all freight
                                                is are shipped, trans-shipped and delivered as safely.
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
                                                <span class="pbmit-accordion-title">03. What Payment Methods Are
                                                    Available?</span>
                                            </button>
                                        </h2>
                                        <div id="collapseThree1" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                Our skilled personnel, utilising the latest communications, tracking and
                                                processing software, combined with decades of experience, ensure all freight
                                                is are shipped, trans-shipped and delivered as safely.
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