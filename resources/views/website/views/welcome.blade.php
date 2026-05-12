@extends('website.layout.app')
@section('title', 'Welcome to APL GLOBAL LOGISTICS')
@section('content')
    <!-- slider -->
    @include('website.components.home.slider')



    <!-- Marquee -->
    <section class="marquee_one">
        <div class="container-fluid p-0">
            <div class="swiper-slider marquee">
                <div class="swiper-wrapper">
                    <article class="swiper-slide pbmit-marquee-effect-style-1">
                        <div class="pbmit-tag-wrapper">
                            <h2 class="pbmit-element-title" data-text="Real-time Tracking">
                                Real-time Tracking
                            </h2>
                        </div>
                    </article>
                    <article class="swiper-slide pbmit-marquee-effect-style-1">
                        <div class="pbmit-tag-wrapper">
                            <h2 class="pbmit-element-title" data-text="Transparent Pricing">
                                Transparent Pricing
                            </h2>
                        </div>
                    </article>
                    <article class="swiper-slide pbmit-marquee-effect-style-1">
                        <div class="pbmit-tag-wrapper">
                            <h2 class="pbmit-element-title" data-text="Warehouse">
                                Warehouse
                            </h2>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Marquee End -->

    <!-- Service Start -->
    <section class="section-lgt pbmit-element-service-style-1 service_one">
        <div class="container pbmit-col-stretched-yes pbmit-col-right p-0">
            <div class="pbmit-col-stretched-right">
                <div class="pbmit-element-posts-wrapper row">
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-service-img-wrapper"
                                style="background-image: url('{{ asset('website/images/homepage-1/service/service-01.jpg') }}')">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('website/images/homepage-1/service/service-01.jpg') }}"
                                            class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-number">01</div>
                                <h3 class="pbmit-service-title">
                                    <a href="service-details.html">Air Freight</a>
                                </h3>
                                <div class="pbmit-svg-btn">
                                    <a class="btn-arrow" href="service-details.html">
                                        <i class="pbmit-base-icon-right-arrow-2"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pbminfotech-icon-box">
                                <img src="{{ asset('website/images/homepage-1/service/service-01.jpg') }}" alt="">
                            </div>
                        </div>
                    </article>
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                          <div class="pbmit-service-img-wrapper"
    style="background-image: url('{{ asset('website/images/homepage-1/service/service-02.jpg') }}')">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('website/images/homepage-1/service/service-02.jpg') }}"
                                            class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-number">02</div>
                                <h3 class="pbmit-service-title">
                                    <a href="service-details.html">Train Freight</a>
                                </h3>
                                <div class="pbmit-svg-btn">
                                    <a class="btn-arrow" href="service-details.html">
                                        <i class="pbmit-base-icon-right-arrow-2"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pbminfotech-icon-box">
                                <img src="{{ asset('website/images/homepage-1/service/service-02.jpg') }}" alt="">
                            </div>
                        </div>
                    </article>
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                          <div class="pbmit-service-img-wrapper"
    style="background-image: url('{{ asset('website/images/homepage-1/service/service-03.jpg') }}')">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('website/images/homepage-1/service/service-03.jpg') }}"
                                            class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-number">03</div>
                                <h3 class="pbmit-service-title">
                                    <a href="service-details.html">Sea Freight</a>
                                </h3>
                                <div class="pbmit-svg-btn">
                                    <a class="btn-arrow" href="service-details.html">
                                        <i class="pbmit-base-icon-right-arrow-2"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pbminfotech-icon-box">
                                <img src="{{ asset('website/images/homepage-1/service/service-03.jpg') }}" alt="">
                            </div>
                        </div>
                    </article>
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-service-img-wrapper"
                                style="background-image: url('{{ asset('website/images/homepage-1/service/service-04.jpg') }}')">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('website/images/homepage-1/service/service-04.jpg') }}"
                                            class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-number">04</div>
                                <h3 class="pbmit-service-title">
                                    <a href="service-details.html">Road Freight</a>
                                </h3>
                                <div class="pbmit-svg-btn">
                                    <a class="btn-arrow" href="service-details.html">
                                        <i class="pbmit-base-icon-right-arrow-2"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pbminfotech-icon-box">
                                <img src="{{ asset('website/images/homepage-1/service/service-04.jpg') }}" alt="">
                            </div>
                        </div>
                    </article>
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-service-img-wrapper"
                                style="background-image: url('{{ asset('website/images/homepage-1/service/service-05.jpg') }}')">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('website/images/homepage-1/service/service-05.jpg') }}"
                                            class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-number">05</div>
                                <h3 class="pbmit-service-title">
                                    <a href="service-details.html">Stow Ability</a>
                                </h3>
                                <div class="pbmit-svg-btn">
                                    <a class="btn-arrow" href="service-details.html">
                                        <i class="pbmit-base-icon-right-arrow-2"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pbminfotech-icon-box">
                                <img src="{{ asset('website/images/homepage-1/service/service-05.jpg') }}" alt="">
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->

    <!-- About Us Start -->
    <section class="about-us_one">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-12 col-xl-6">
                    <div class="about-one_imgbox">
                        <div class="about-one_img1">
                            <img src="{{ asset('website/images/homepage-1/about-us-01.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="about-one_img2">
                            <img src="{{ asset('website/images/homepage-1/about-us-02.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-6">
                    <div class="about-one_rightbox">
                        <div class="pbmit-heading-subheading">
                            <h4 class="pbmit-subtitle">About Us</h4>
                            <h2 class="pbmit-title">Shipments delivered on time with no hassle.</h2>
                            <div class="pbmit-heading_desc">
                                Our team discussed every single detail to make sure is the most versatile and unique
                                theme created so far.No coding skills required to create unique sites.
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group list-group-borderless">
                                    <li class="list-group-item">
                                        <span class="pbmit-icon-list-icon">
                                            <i aria-hidden="true"
                                                class="pbmit-logistbiz-icon pbmit-logistbiz-icon-check"></i>
                                        </span>
                                        <span class="pbmit-icon-list-text">Monthly Checkups</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="pbmit-icon-list-icon">
                                            <i aria-hidden="true"
                                                class="pbmit-logistbiz-icon pbmit-logistbiz-icon-check"></i>
                                        </span>
                                        <span class="pbmit-icon-list-text">Caring Medical Team</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="pbmit-icon-list-icon">
                                            <i aria-hidden="true"
                                                class="pbmit-logistbiz-icon pbmit-logistbiz-icon-check"></i>
                                        </span>
                                        <span class="pbmit-icon-list-text">Proactive and Fast Results</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-borderless">
                                    <li class="list-group-item">
                                        <span class="pbmit-icon-list-icon">
                                            <i aria-hidden="true"
                                                class="pbmit-logistbiz-icon pbmit-logistbiz-icon-check"></i>
                                        </span>
                                        <span class="pbmit-icon-list-text">Monthly Checkups</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="pbmit-icon-list-icon">
                                            <i aria-hidden="true"
                                                class="pbmit-logistbiz-icon pbmit-logistbiz-icon-check"></i>
                                        </span>
                                        <span class="pbmit-icon-list-text">Caring Medical Team</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="pbmit-icon-list-icon">
                                            <i aria-hidden="true"
                                                class="pbmit-logistbiz-icon pbmit-logistbiz-icon-check"></i>
                                        </span>
                                        <span class="pbmit-icon-list-text">Proactive and Fast Results</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="about-one-bottom_box">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-3 col-xl-4">
                                    <a class="pbmit-btn pbmit-btn-outline" href="contact-us.html">Get Quote</a>
                                </div>
                                <div class="col-md-9 col-xl-8">
                                    <div class="pbmit-ihbox-style-1">
                                        <div class="pbmit-ihbox-headingicon d-flex">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper">
                                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                        <i class="pbmit-logistbiz-icon pbmit-logistbiz-icon-call"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <div class="pbmit-heading-desc">Call us today</div>
                                                <h2 class="pbmit-element-title">01 234 56789</h2>
                                            </div>
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
    <!-- About Us End -->

    <!-- Ihbox Start -->
    <section class="active-onhover">
        <div class="container">
            <div class="pbmit-heading-subheading">
                <h4 class="pbmit-subtitle">Why logistic</h4>
                <h2 class="pbmit-title">Why should you choose <br> our services?</h2>
            </div>
            <div class="ihbox-section_one">
                <div class="row">
                    <article class="pbmit-miconheading-style-3 col-md-12">
                        <div class="pbmit-ihbox-style-3">
                            <div class="pbmit-ihbox-box d-flex">
                                <div class="pbmit-ihbox-box-number">01</div>
                                <div class="pbmit-ihbox-number">
                                    <h2 class="pbmit-element-title">
                                        Real-time <br>Tracking
                                    </h2>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <div class="pbmit-heading-desc">Labore dolore magna aliqua enim ad min imveniam quis
                                        nostrud exercitation.</div>
                                </div>
                                <div class="pbmit-ihbox-img">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                            <img src="{{ asset('website/images/homepage-1/ihbox/hover-img-01.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="pbmit-miconheading-style-3 col-md-12">
                        <div class="pbmit-ihbox-style-3">
                            <div class="pbmit-ihbox-box d-flex">
                                <div class="pbmit-ihbox-box-number">02</div>
                                <div class="pbmit-ihbox-number">
                                    <h2 class="pbmit-element-title">
                                        Transparent <br>Pricing
                                    </h2>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <div class="pbmit-heading-desc">Labore dolore magna aliqua enim ad min imveniam quis
                                        nostrud exercitation.</div>
                                </div>
                                <div class="pbmit-ihbox-img">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                            <img src="{{ asset('website/images/homepage-1/ihbox/hover-img-02.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="pbmit-miconheading-style-3 col-md-12">
                        <div class="pbmit-ihbox-style-3">
                            <div class="pbmit-ihbox-box d-flex">
                                <div class="pbmit-ihbox-box-number">03</div>
                                <div class="pbmit-ihbox-number">
                                    <h2 class="pbmit-element-title">
                                        Warehouse <br>Storage
                                    </h2>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <div class="pbmit-heading-desc">Labore dolore magna aliqua enim ad min imveniam quis
                                        nostrud exercitation.</div>
                                </div>
                                <div class="pbmit-ihbox-img">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                            <img src="{{ asset('website/images/homepage-1/ihbox/hover-img-03.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="pbmit-miconheading-style-3 col-md-12">
                        <div class="pbmit-ihbox-style-3">
                            <div class="pbmit-ihbox-box d-flex">
                                <div class="pbmit-ihbox-box-number">04</div>
                                <div class="pbmit-ihbox-number">
                                    <h2 class="pbmit-element-title">
                                        On Time <br>Delivery
                                    </h2>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <div class="pbmit-heading-desc">Labore dolore magna aliqua enim ad min imveniam quis
                                        nostrud exercitation.</div>
                                </div>
                                <div class="pbmit-ihbox-img">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                            <img src="{{ asset('website/images/homepage-1/ihbox/hover-img-04.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="pbmit-miconheading-style-3 col-md-12">
                        <div class="pbmit-ihbox-style-3">
                            <div class="pbmit-ihbox-box d-flex">
                                <div class="pbmit-ihbox-box-number">05</div>
                                <div class="pbmit-ihbox-number">
                                    <h2 class="pbmit-element-title">
                                        Security For <br>Cargo
                                    </h2>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <div class="pbmit-heading-desc">Labore dolore magna aliqua enim ad min imveniam quis
                                        nostrud exercitation.</div>
                                </div>
                                <div class="pbmit-ihbox-img">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                            <img src="{{ asset('website/images/homepage-1/ihbox/hover-img-05.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Ihbox End -->

    <!-- Portfolio Start -->
    <section class="portfolio_one">
        <div class="container-fluid">
            <div class="pbmit-heading-style">
                <h2 class="pbmit-title">CaseStudies</h2>
            </div>
            <div class="portfolio-one_slider">
                <div class="swiper-slider" data-loop="true" data-autoplay="true" data-dots="false" data-arrows="false"
                    data-columns="3" data-margin="5" data-effect="slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Slide1 -->
                            <article class="pbmit-portfolio-style-1">
                                <div class="pbminfotech-post-content">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('website/images/homepage-1/portfolio/portfolio-01.jpg') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-titlebox">
                                            <div class="pbmit-port-cat">
                                                <a href="portfolio-grid-col-2.html" rel="tag">Analystics</a>
                                            </div>
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="single-detail-style-1.html">Tribal Information</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <!-- Slide2 -->
                            <article class="pbmit-portfolio-style-1">
                                <div class="pbminfotech-post-content">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('website/images/homepage-1/portfolio/portfolio-02.jpg') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-titlebox">
                                            <div class="pbmit-port-cat">
                                                <a href="portfolio-grid-col-2.html" rel="tag">Distribution</a>
                                            </div>
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="single-detail-style-1.html">Indian Logistic Hubs</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <!-- Slide3 -->
                            <article class="pbmit-portfolio-style-1">
                                <div class="pbminfotech-post-content">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('website/images/homepage-1/portfolio/portfolio-03.jpg') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-titlebox">
                                            <div class="pbmit-port-cat">
                                                <a href="portfolio-grid-col-2.html" rel="tag">Logistics</a>
                                            </div>
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="single-detail-style-1.html">Online Grocery Sales</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <!-- Slide4 -->
                            <article class="pbmit-portfolio-style-1">
                                <div class="pbminfotech-post-content">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('website/images/homepage-1/portfolio/portfolio-04.jpg') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-titlebox">
                                            <div class="pbmit-port-cat">
                                                <a href="portfolio-grid-col-2.html" rel="tag">Warehouse</a>
                                            </div>
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="single-detail-style-1.html">Warehouse Inventory</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <!-- Slide5 -->
                            <article class="pbmit-portfolio-style-1">
                                <div class="pbminfotech-post-content">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('website/images/homepage-1/portfolio/portfolio-05.jpg') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-titlebox">
                                            <div class="pbmit-port-cat">
                                                <a href="portfolio-grid-col-2.html" rel="tag">Analystics</a>
                                            </div>
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="single-detail-style-1.html">Revolutionize business</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <!-- Slide6 -->
                            <article class="pbmit-portfolio-style-1">
                                <div class="pbminfotech-post-content">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('website/images/homepage-1/portfolio/portfolio-06.jpg') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-titlebox">
                                            <div class="pbmit-port-cat">
                                                <a href="portfolio-grid-col-2.html" rel="tag">Distribution</a>
                                            </div>
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="single-detail-style-1.html">Consulting Storage</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio End -->

    <!-- Flip Box Start -->
    <section class="flip-box-section_one" data-cursor="white-color">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-12 col-xl-6 pbmit-col_wrapper">
                    <div class="pbmit-heading-subheading animation-style2">
                        <h4 class="pbmit-subtitle">Awards</h4>
                        <h2 class="pbmit-title">Nominated as fashion designer of the year worldwide.</h2>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 pbmit-col_wrapper">
                    <article class="pbmit-flip-box-style-1">
                        <div class="pbmit-flip-box-heading">
                            <div class="pbmit-iconbox">
                                <div class="pbmit-flip-box-image">
                                    <div class="pbmit-flip-box-image-wrapper pbmit-flip-box-icon-type-image">
                                        <img src="{{ asset('website/images/homepage-1/flip-box/award-01.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-flip-box-contents">
                                <div class="pbmit-flipbox-inner">
                                    <h2 class="pbmit-element-title">
                                        Stand out Performer
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-3 pbmit-col_wrapper">
                    <article class="pbmit-flip-box-style-1">
                        <div class="pbmit-flip-box-heading">
                            <div class="pbmit-iconbox">
                                <div class="pbmit-flip-box-image">
                                    <div class="pbmit-flip-box-image-wrapper pbmit-flip-box-icon-type-image">
                                        <img src="{{ asset('website/images/homepage-1/flip-box/fbox5.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-flip-box-contents">
                                <div class="pbmit-flipbox-inner">
                                    <h2 class="pbmit-element-title">
                                        The Growth Booster
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-3 pbmit-col_wrapper"></div>
                <div class="col-md-6 col-xl-3 pbmit-col_wrapper">
                    <article class="pbmit-flip-box-style-1">
                        <div class="pbmit-flip-box-heading">
                            <div class="pbmit-iconbox">
                                <div class="pbmit-flip-box-image">
                                    <div class="pbmit-flip-box-image-wrapper pbmit-flip-box-icon-type-image">
                                        <img src="{{ asset('website/images/homepage-1/flip-box/award-02.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-flip-box-contents">
                                <div class="pbmit-flipbox-inner">
                                    <h2 class="pbmit-element-title">
                                        Star Employee
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-3 pbmit-col_wrapper">
                    <article class="pbmit-flip-box-style-1">
                        <div class="pbmit-flip-box-heading">
                            <div class="pbmit-iconbox">
                                <div class="pbmit-flip-box-image">
                                    <div class="pbmit-flip-box-image-wrapper pbmit-flip-box-icon-type-image">
                                        <img src="{{ asset('website/images/homepage-1/flip-box/fbox3.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-flip-box-contents">
                                <div class="pbmit-flipbox-inner">
                                    <h2 class="pbmit-element-title">
                                        The Alpha
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-3 pbmit-col_wrapper">
                    <article class="pbmit-flip-box-style-1">
                        <div class="pbmit-flip-box-heading">
                            <div class="pbmit-iconbox">
                                <div class="pbmit-flip-box-image">
                                    <div class="pbmit-flip-box-image-wrapper pbmit-flip-box-icon-type-image">
                                        <img src="{{ asset('website/images/homepage-1/flip-box/fbox4.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-flip-box-contents">
                                <div class="pbmit-flipbox-inner">
                                    <h2 class="pbmit-element-title">
                                        Front Runner
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Flip Box End -->

    <!-- Fid Start -->
    <section class="fid-section_one">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="pbminfotech-ele-fid-style-1">
                        <div class="pbmit-fld-contents">
                            <div class="pbmit-fld-wrap">
                                <h4 class="pbmit-fid-inner">
                                    <span class="pbmit-fid-before"></span>
                                    <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits"
                                        data-from="0" data-to="25" data-interval="5" data-before="" data-before-style=""
                                        data-after="" data-after-style="">25</span>
                                    <span class="pbmit-fid"></span>
                                </h4>
                                <h3 class="pbmit-fid-title">Year of experience</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="pbminfotech-ele-fid-style-2">
                        <div class="pbmit-fld-contents">
                            <div class="pbmit-fld-wrap">
                                <h4 class="pbmit-fid-inner">
                                    <span class="pbmit-fid-before"></span>
                                    <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits"
                                        data-from="0" data-to="70" data-interval="5" data-before="" data-before-style=""
                                        data-after="" data-after-style="">70</span>
                                    <span class="pbmit-fid"></span>
                                </h4>
                                <h3 class="pbmit-fid-title">Skill Trainers</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="pbminfotech-ele-fid-style-1">
                        <div class="pbmit-fld-contents">
                            <div class="pbmit-fld-wrap">
                                <h4 class="pbmit-fid-inner">
                                    <span class="pbmit-fid-before"></span>
                                    <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits"
                                        data-from="0" data-to="12" data-interval="5" data-before="" data-before-style=""
                                        data-after="" data-after-style="">12</span>
                                    <span class="pbmit-fid"></span>
                                </h4>
                                <h3 class="pbmit-fid-title">Award Winning</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="pbminfotech-ele-fid-style-2">
                        <div class="pbmit-fld-contents">
                            <div class="pbmit-fld-wrap">
                                <h4 class="pbmit-fid-inner">
                                    <span class="pbmit-fid-before"></span>
                                    <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits"
                                        data-from="0" data-to="450" data-interval="5" data-before="" data-before-style=""
                                        data-after="" data-after-style="">450</span>
                                    <span class="pbmit-fid"></span>
                                </h4>
                                <h3 class="pbmit-fid-title">Satisfied Customers </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fid End -->

    <!-- Team Start -->
    <section class="pbmit-bg-color-light team_one" data-cursor="white-color">
        <div class="container-fluid p-0">
            <div class="row g-0 align-items-center">
                <div class="col-md-12 col-xl-4">
                    <div class="team-one-left_col">
                        <div class="pbmit-heading-subheading">
                            <h4 class="pbmit-subtitle">Explore Our Team</h4>
                            <h2 class="pbmit-title">Meet our Professionals <br> team</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="pbmit-spinner pbmit-spinner-box-style-1">
                        <a class="pbmit-lightbox-video" href="index.html">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                        <i class="pbmit-base-icon-arrow-right"></i>
                                    </div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" viewBox="0 0 200 200">
                                    <defs>
                                        <path d="M0, 100a100, 100 0 1, 0 200, 0a100, 100 0 1, 0 -200, 0" id="txt-path1">
                                        </path>
                                    </defs>
                                    <text font-size="15" font-family="Prompt,sans-serif" font-weight="400">
                                        <textPath startOffset="0" xlink:href="#txt-path">See All member - See All member
                                            - See All member -</textPath>
                                    </text>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 col-xl-6">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <article class="pbmit-team-style-1">
                                <div class="pbminfotech-post-item">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('website/images/homepage-1/team/team-01.jpg') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-box-social-links">
                                            <ul class="pbmit-social-links pbmit-team-social-links">
                                                <li class="pbmit-social-li pbmit-social-facebook">
                                                    <a href="#" title="Facebook" target="_blank">
                                                        <span><i class="pbmit-base-icon-facebook-f"></i></span>
                                                    </a>
                                                </li>
                                                <li class="pbmit-social-li pbmit-social-twitter">
                                                    <a href="#" title="Twitter" target="_blank">
                                                        <span><i class="pbmit-base-icon-twitter-1"></i></span>
                                                    </a>
                                                </li>
                                                <li class="pbmit-social-li pbmit-social-instagram">
                                                    <a href="#" title="Instagram" target="_blank">
                                                        <span><i class="pbmit-base-icon-instagram"></i></span>
                                                    </a>
                                                </li>
                                                <li class="pbmit-social-li pbmit-social-youtube">
                                                    <a href="#" title="Youtube" target="_blank">
                                                        <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pbmit-titlebox">
                                            <div class="pbminfotech-box-team-position">Founder</div>
                                            <h3 class="pbmit-team-title">
                                                <a href="team-member-detail.html">David Beckham</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="pbmit-team-style-1">
                                <div class="pbminfotech-post-item">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('website/images/homepage-1/team/team-02.jpg') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-box-social-links">
                                            <ul class="pbmit-social-links pbmit-team-social-links">
                                                <li class="pbmit-social-li pbmit-social-facebook">
                                                    <a href="#" title="Facebook" target="_blank">
                                                        <span><i class="pbmit-base-icon-facebook-f"></i></span>
                                                    </a>
                                                </li>
                                                <li class="pbmit-social-li pbmit-social-twitter">
                                                    <a href="#" title="Twitter" target="_blank">
                                                        <span><i class="pbmit-base-icon-twitter-1"></i></span>
                                                    </a>
                                                </li>
                                                <li class="pbmit-social-li pbmit-social-instagram">
                                                    <a href="#" title="Instagram" target="_blank">
                                                        <span><i class="pbmit-base-icon-instagram"></i></span>
                                                    </a>
                                                </li>
                                                <li class="pbmit-social-li pbmit-social-youtube">
                                                    <a href="#" title="Youtube" target="_blank">
                                                        <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pbmit-titlebox">
                                            <div class="pbminfotech-box-team-position">Founder</div>
                                            <h3 class="pbmit-team-title">
                                                <a href="team-member-detail.html">Micheal Wagou</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="pbmit-team-style-1">
                                <div class="pbminfotech-post-item">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('website/images/homepage-1/team/team-03.jpg') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-box-social-links">
                                            <ul class="pbmit-social-links pbmit-team-social-links">
                                                <li class="pbmit-social-li pbmit-social-facebook">
                                                    <a href="#" title="Facebook" target="_blank">
                                                        <span><i class="pbmit-base-icon-facebook-f"></i></span>
                                                    </a>
                                                </li>
                                                <li class="pbmit-social-li pbmit-social-twitter">
                                                    <a href="#" title="Twitter" target="_blank">
                                                        <span><i class="pbmit-base-icon-twitter-1"></i></span>
                                                    </a>
                                                </li>
                                                <li class="pbmit-social-li pbmit-social-instagram">
                                                    <a href="#" title="Instagram" target="_blank">
                                                        <span><i class="pbmit-base-icon-instagram"></i></span>
                                                    </a>
                                                </li>
                                                <li class="pbmit-social-li pbmit-social-youtube">
                                                    <a href="#" title="Youtube" target="_blank">
                                                        <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pbmit-titlebox">
                                            <div class="pbminfotech-box-team-position">Founder</div>
                                            <h3 class="pbmit-team-title">
                                                <a href="team-member-detail.html">Robert Walter</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="pbmit-team-style-1">
                                <div class="pbminfotech-post-item">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('website/images/homepage-1/team/team-04.jpg') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-box-social-links">
                                            <ul class="pbmit-social-links pbmit-team-social-links">
                                                <li class="pbmit-social-li pbmit-social-facebook">
                                                    <a href="#" title="Facebook" target="_blank">
                                                        <span><i class="pbmit-base-icon-facebook-f"></i></span>
                                                    </a>
                                                </li>
                                                <li class="pbmit-social-li pbmit-social-twitter">
                                                    <a href="#" title="Twitter" target="_blank">
                                                        <span><i class="pbmit-base-icon-twitter-1"></i></span>
                                                    </a>
                                                </li>
                                                <li class="pbmit-social-li pbmit-social-instagram">
                                                    <a href="#" title="Instagram" target="_blank">
                                                        <span><i class="pbmit-base-icon-instagram"></i></span>
                                                    </a>
                                                </li>
                                                <li class="pbmit-social-li pbmit-social-youtube">
                                                    <a href="#" title="Youtube" target="_blank">
                                                        <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pbmit-titlebox">
                                            <div class="pbminfotech-box-team-position">Facilities manager</div>
                                            <h3 class="pbmit-team-title">
                                                <a href="team-member-detail.html">David Beckham</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="pbmit-team-style-1">
                                <div class="pbminfotech-post-item">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('website/images/homepage-1/team/team-05.jpg') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-box-social-links">
                                            <ul class="pbmit-social-links pbmit-team-social-links">
                                                <li class="pbmit-social-li pbmit-social-facebook">
                                                    <a href="#" title="Facebook" target="_blank">
                                                        <span><i class="pbmit-base-icon-facebook-f"></i></span>
                                                    </a>
                                                </li>
                                                <li class="pbmit-social-li pbmit-social-twitter">
                                                    <a href="#" title="Twitter" target="_blank">
                                                        <span><i class="pbmit-base-icon-twitter-1"></i></span>
                                                    </a>
                                                </li>
                                                <li class="pbmit-social-li pbmit-social-instagram">
                                                    <a href="#" title="Instagram" target="_blank">
                                                        <span><i class="pbmit-base-icon-instagram"></i></span>
                                                    </a>
                                                </li>
                                                <li class="pbmit-social-li pbmit-social-youtube">
                                                    <a href="#" title="Youtube" target="_blank">
                                                        <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pbmit-titlebox">
                                            <div class="pbminfotech-box-team-position">Facilities manager</div>
                                            <h3 class="pbmit-team-title">
                                                <a href="team-member-detail.html">Edward Smith</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="pbmit-team-style-1">
                                <div class="pbminfotech-post-item">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('website/images/homepage-1/team/team-06.jpg') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-box-social-links">
                                            <ul class="pbmit-social-links pbmit-team-social-links">
                                                <li class="pbmit-social-li pbmit-social-facebook">
                                                    <a href="#" title="Facebook" target="_blank">
                                                        <span><i class="pbmit-base-icon-facebook-f"></i></span>
                                                    </a>
                                                </li>
                                                <li class="pbmit-social-li pbmit-social-twitter">
                                                    <a href="#" title="Twitter" target="_blank">
                                                        <span><i class="pbmit-base-icon-twitter-1"></i></span>
                                                    </a>
                                                </li>
                                                <li class="pbmit-social-li pbmit-social-instagram">
                                                    <a href="#" title="Instagram" target="_blank">
                                                        <span><i class="pbmit-base-icon-instagram"></i></span>
                                                    </a>
                                                </li>
                                                <li class="pbmit-social-li pbmit-social-youtube">
                                                    <a href="#" title="Youtube" target="_blank">
                                                        <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pbmit-titlebox">
                                            <div class="pbminfotech-box-team-position">Facilities manager</div>
                                            <h3 class="pbmit-team-title">
                                                <a href="team-member-detail.html">Norton Berry</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team End -->

    <!-- Pricing Start -->
    <section class="pricing_one">
        <div class="container">
            <div class="pbmit-heading-subheading text-center">
                <h4 class="pbmit-subtitle">Pricing Table</h4>
                <h2 class="pbmit-title">Choose right plan for logistic</h2>
            </div>
            <div class="pbmit-ptable-cols pbminfotech-ele-ptable-style-1">
                <div class="row">
                    <div class="pbmit-ptable-col col-md-6 col-lg-4">
                        <div class="pbmit-pricing-table-box">
                            <div class="pbmit-heading-wrap d-flex justify-content-between">
                                <div class="pbmit-heading-wrapper">
                                    <h3 class="pbminfotech-ptable-heading">Basic</h3>
                                    <div class="pbminfotech-sep"></div>
                                    <div class="pbminfotech-ptable-desc">For Normally Check up Plan</div>
                                </div>
                                <div class="pbmit-ptable-icon">
                                    <div class="pbmit-ptable-icon-wrapper">
                                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-logistbiz-icon pbmit-logistbiz-icon-storage"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-head-wrap">
                                <div class="pbminfotech-ptable-price-w d-flex">
                                    <div class="pbminfotech-ptable-symbol">$</div>
                                    <div class="pbminfotech-ptable-price">190</div>
                                </div>
                                <div class="pbminfotech-ptable-frequency">M</div>
                            </div>
                            <div class="pbmit-ptable-inner">
                                <div class="pbmit-ptable-lines-w">
                                    <div class="pbmit-ptable-line">Advanced Analytics</div>
                                    <div class="pbmit-ptable-line">Change Management</div>
                                    <div class="pbmit-ptable-line">Corporate Finance</div>
                                    <div class="pbmit-ptable-line">Strategy &amp; Marketing</div>
                                    <div class="pbmit-ptable-line">Information Technology</div>
                                </div>
                            </div>
                            <div class="pbminfotech-ptable-btn pbmit-svg-btn">
                                <a href="#" class="pbmit-btn">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="pbmit-pricing-table-featured-col pbmit-ptable-col col-md-6 col-lg-4">
                        <div class="pbmit-pricing-table-box">
                            <div class="pbmit-ptablebox-featured-w"></div>
                            <div class="pbmit-heading-wrap d-flex justify-content-between">
                                <div class="pbmit-heading-wrapper">
                                    <h3 class="pbminfotech-ptable-heading">Premium</h3>
                                    <div class="pbminfotech-sep"></div>
                                    <div class="pbminfotech-ptable-desc">For Normally Check up Plan</div>
                                </div>
                                <div class="pbmit-ptable-icon">
                                    <div class="pbmit-ptable-icon-wrapper">
                                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-logistbiz-icon pbmit-logistbiz-icon-container-hanging"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-head-wrap">
                                <div class="pbminfotech-ptable-price-w d-flex">
                                    <div class="pbminfotech-ptable-symbol">$</div>
                                    <div class="pbminfotech-ptable-price">290</div>
                                </div>
                                <div class="pbminfotech-ptable-frequency">M</div>
                            </div>
                            <div class="pbmit-ptable-inner">
                                <div class="pbmit-ptable-lines-w">
                                    <div class="pbmit-ptable-line">Advanced Analytics</div>
                                    <div class="pbmit-ptable-line">Change Management</div>
                                    <div class="pbmit-ptable-line">Corporate Finance</div>
                                    <div class="pbmit-ptable-line">Strategy &amp; Marketing</div>
                                    <div class="pbmit-ptable-line">Information Technology</div>
                                </div>
                            </div>
                            <div class="pbminfotech-ptable-btn pbmit-svg-btn">
                                <a href="#" class="pbmit-btn">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="pbmit-ptable-col col-md-6 col-lg-4">
                        <div class="pbmit-pricing-table-box">
                            <div class="pbmit-heading-wrap d-flex justify-content-between">
                                <div class="pbmit-heading-wrapper">
                                    <h3 class="pbminfotech-ptable-heading">Advanced</h3>
                                    <div class="pbminfotech-sep"></div>
                                    <div class="pbminfotech-ptable-desc">For Normally Check up Plan</div>
                                </div>
                                <div class="pbmit-ptable-icon">
                                    <div class="pbmit-ptable-icon-wrapper">
                                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-logistbiz-icon pbmit-logistbiz-icon-worldwide-delivery"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-head-wrap">
                                <div class="pbminfotech-ptable-price-w d-flex">
                                    <div class="pbminfotech-ptable-symbol">$</div>
                                    <div class="pbminfotech-ptable-price">390</div>
                                </div>
                                <div class="pbminfotech-ptable-frequency">M</div>
                            </div>
                            <div class="pbmit-ptable-inner">
                                <div class="pbmit-ptable-lines-w">
                                    <div class="pbmit-ptable-line">Advanced Analytics</div>
                                    <div class="pbmit-ptable-line">Change Management</div>
                                    <div class="pbmit-ptable-line">Corporate Finance</div>
                                    <div class="pbmit-ptable-line">Strategy &amp; Marketing</div>
                                    <div class="pbmit-ptable-line">Information Technology</div>
                                </div>
                            </div>
                            <div class="pbminfotech-ptable-btn pbmit-svg-btn">
                                <a href="#" class="pbmit-btn">Purchase now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pricing-spinner_box">
                <div class="pbmit-spinner pbmit-spinner-box-style-2">
                    <a class="pbmit-lightbox-video" href="#">
                        <div class="pbmit-ihbox-box">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                viewBox="0 0 200 200">
                                <defs>
                                    <path d="M0, 100a100, 100 0 1, 0 200, 0a100, 100 0 1, 0 -200, 0" id="txt-path">
                                    </path>
                                </defs>
                                <text font-size="15" font-family="Prompt,sans-serif" font-weight="400">
                                    <textPath startOffset="0" xlink:href="#txt-path">Best price plan - Best price plan -
                                    </textPath>
                                </text>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing End -->

    <!-- Testimonial Start -->
    <section class="section-lgb overflow-hidden">
        <div class="container pbmit-col-stretched-yes pbmit-col-left">
            <div class="row g-0">
                <div class="col-md-12 col-xl-6">
                    <div class="testimonial-one_left">
                        <div class="pbmit-col-stretched-left">
                            <div class="testimonial-truck1_img">
                                <img src="{{ asset('website/images/homepage-1/testimonial-truck1.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="pbmit-road"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-6">
                    <div class="pbmit-heading-subheading">
                        <h4 class="pbmit-subtitle">Testimonials</h4>
                        <h2 class="pbmit-title">What our happy clients say about?</h2>
                    </div>
                    <div class="testimonial-one_arrow swiper-btn-custom d-flex flex-row-reverse"></div>
                    <div class="swiper-slider" data-arrows-class="testimonial-one_arrow" data-loop="true"
                        data-autoplay="true" data-dots="false" data-arrows="true" data-columns="1" data-margin="30"
                        data-effect="slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Slide1 -->
                                <article class="pbmit-testimonial-style-2">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbminfotech-box-desc">
                                            <blockquote class="pbminfotech-testimonial-text">
                                                <p>“It was really great working with Logistbiz team and I am happy I was
                                                    introduced to this team! It’s not easy to work on a website some”
                                                </p>
                                            </blockquote>
                                        </div>
                                        <div class="pbminfotech-box-author d-flex align-items-center">
                                            <div class="pbminfotech-box-img">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="{{ asset('website/images/homepage-1/testimonial/testimonial-01.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-auther-content">
                                                <h3 class="pbminfotech-box-title">Porter Victoria</h3>
                                                <div class="pbminfotech-testimonial-detail">Ceo &amp; Founder</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide2 -->
                                <article class="pbmit-testimonial-style-2">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbminfotech-box-desc">
                                            <blockquote class="pbminfotech-testimonial-text">
                                                <p>“It was really great working with Logistbiz team and I am happy I was
                                                    introduced to this team! It’s not easy to work on a website some”
                                                </p>
                                            </blockquote>
                                        </div>
                                        <div class="pbminfotech-box-author d-flex align-items-center">
                                            <div class="pbminfotech-box-img">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="{{ asset('website/images/homepage-1/testimonial/testimonial-02.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-auther-content">
                                                <h3 class="pbminfotech-box-title">David Wrner</h3>
                                                <div class="pbminfotech-testimonial-detail">Ceo & Founder</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide3 -->
                                <article class="pbmit-testimonial-style-2">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbminfotech-box-desc">
                                            <blockquote class="pbminfotech-testimonial-text">
                                                <p>“It was really great working with Logistbiz team and I am happy I was
                                                    introduced to this team! It’s not easy to work on a website some”
                                                </p>
                                            </blockquote>
                                        </div>
                                        <div class="pbminfotech-box-author d-flex align-items-center">
                                            <div class="pbminfotech-box-img">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="{{ asset('website/images/homepage-1/testimonial/testimonial-03.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-auther-content">
                                                <h3 class="pbminfotech-box-title">John Martin</h3>
                                                <div class="pbminfotech-testimonial-detail">Ceo & Founder</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial End -->

    <!-- Blog Start -->
    <section class="blog-section_one">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="pbmit-heading-subheading">
                        <h4 class="pbmit-subtitle">Blogs</h4>
                        <h2 class="pbmit-title">News & Articles</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-one_btn">
                        <a class="pbmit-btn" href="blog-classic.html">Show All</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <article class="pbmit-ele-blog pbmit-blog-style-2 col-md-12">
                    <div class="post-item">
                        <div class="pbmit-blog-content d-flex align-items-center">
                            <div class="pbmit-meta-date-wrapper">
                                <span class="pbmit-day-wrap">24</span>
                                <span class="pbmit-date-wrap">Aug 2023</span>
                            </div>
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('website/images/homepage-1/blog/blog-01.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                            <div class="pbmit-box-content-wrapper">
                                <div class="pbmit-category-comment-wraper d-flex align-items-center">
                                    <div class="pbmit-meta-cat-wrapper pbmit-meta-line">
                                        <div class="pbmit-meta-category">
                                            <a href="blog-classic.html" rel="category tag">Development</a>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="pbmit-post-title">
                                    <a href="blog-single-details.html">Your Guide To Picking The Right Shipping
                                        Container</a>
                                </h3>
                            </div>
                            <a class="pbmit-btn pbmit-btn-outline" href="blog-single-details.html">Read Continue</a>
                        </div>
                    </div>
                </article>
                <article class="pbmit-ele-blog pbmit-blog-style-2 col-md-12">
                    <div class="post-item">
                        <div class="pbmit-blog-content d-flex align-items-center">
                            <div class="pbmit-meta-date-wrapper">
                                <span class="pbmit-day-wrap">23</span>
                                <span class="pbmit-date-wrap">Aug 2023</span>
                            </div>
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('website/images/homepage-1/blog/blog-02.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                            <div class="pbmit-box-content-wrapper">
                                <div class="pbmit-category-comment-wraper d-flex align-items-center">
                                    <div class="pbmit-meta-cat-wrapper pbmit-meta-line">
                                        <div class="pbmit-meta-category">
                                            <a href="blog-classic.html" rel="category tag">Construction</a>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="pbmit-post-title">
                                    <a href="blog-single-details.html">The Guide On How to Ship Oversize Loads</a>
                                </h3>
                            </div>
                            <a class="pbmit-btn pbmit-btn-outline" href="blog-single-details.html">Read Continue</a>
                        </div>
                    </div>
                </article>
                <article class="pbmit-ele-blog pbmit-blog-style-2 col-md-12">
                    <div class="post-item">
                        <div class="pbmit-blog-content d-flex align-items-center">
                            <div class="pbmit-meta-date-wrapper">
                                <span class="pbmit-day-wrap">22</span>
                                <span class="pbmit-date-wrap">Aug 2023</span>
                            </div>
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('website/images/homepage-1/blog/blog-03.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                            <div class="pbmit-box-content-wrapper">
                                <div class="pbmit-category-comment-wraper d-flex align-items-center">
                                    <div class="pbmit-meta-cat-wrapper pbmit-meta-line">
                                        <div class="pbmit-meta-category">
                                            <a href="blog-classic.html" rel="category tag">Branding</a>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="pbmit-post-title">
                                    <a href="blog-single-details.html">Remote Asset Monitoring and Control</a>
                                </h3>
                            </div>
                            <a class="pbmit-btn pbmit-btn-outline" href="blog-single-details.html">Read Continue</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- Blog End -->


@endsection