@extends('website.layout.app')
@section('title', 'Gallery')
@section('content')
    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner">
                            <h1 class="pbmit-tbar-title">Gallery</h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home') }}" class="home"><span>Home</span></a></span>
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-right"></i>
                            </span>
                            <span><span class="post-root post post-post current-item">Gallery</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar End-->

    <div class="page-content">

        <!-- Mesonary Col 3 -->
        <section class="section-xl pbmit-element-viewtype-masonry">
            <div class="container p-0">
                <div class="row pbmit-element-posts-wrapper">
                    <article class="pbmit-ele pbmit-portfolio-style-1 col-md-4">
                        <div class="pbminfotech-post-content">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('website/images/portfolio/portfolio-01.jpg') }}" class="img-fluid" alt="">
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
                    <article class="pbmit-ele pbmit-portfolio-style-1 col-md-4">
                        <div class="pbminfotech-post-content">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('website/images/portfolio/portfolio-02.jpg') }}" class="img-fluid" alt="">
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
                    <article class="pbmit-ele pbmit-portfolio-style-1 col-md-4">
                        <div class="pbminfotech-post-content">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('website/images/portfolio/portfolio-03.jpg') }}" class="img-fluid" alt="">
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
                    <article class="pbmit-ele pbmit-portfolio-style-1 col-md-4">
                        <div class="pbminfotech-post-content">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('website/images/portfolio/portfolio-04.jpg') }}" class="img-fluid" alt="">
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
                    <article class="pbmit-ele pbmit-portfolio-style-1 col-md-4">
                        <div class="pbminfotech-post-content">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('website/images/portfolio/portfolio-05.jpg') }}" class="img-fluid" alt="">
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
                    <article class="pbmit-ele pbmit-portfolio-style-1 col-md-4">
                        <div class="pbminfotech-post-content">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('website/images/portfolio/portfolio-06.jpg') }}" class="img-fluid" alt="">
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
                    <article class="pbmit-ele pbmit-portfolio-style-1 col-md-4">
                        <div class="pbminfotech-post-content">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('website/images/portfolio/portfolio-07.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-titlebox">
                                    <div class="pbmit-port-cat">
                                        <a href="portfolio-grid-col-2.html" rel="tag">Logistics</a>
                                    </div>
                                    <h3 class="pbmit-portfolio-title">
                                        <a href="single-detail-style-1.html">Chemical industries</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="pbmit-ele pbmit-portfolio-style-1 col-md-4">
                        <div class="pbminfotech-post-content">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('website/images/portfolio/portfolio-08.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-titlebox">
                                    <div class="pbmit-port-cat">
                                        <a href="portfolio-grid-col-2.html" rel="tag">Warehouse</a>
                                    </div>
                                    <h3 class="pbmit-portfolio-title">
                                        <a href="single-detail-style-1.html">Warehouse Storage</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="pbmit-ele pbmit-portfolio-style-1 col-md-4">
                        <div class="pbminfotech-post-content">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('website/images/portfolio/portfolio-09.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-titlebox">
                                    <div class="pbmit-port-cat">
                                        <a href="portfolio-grid-col-2.html" rel="tag">Analystics</a>
                                    </div>
                                    <h3 class="pbmit-portfolio-title">
                                        <a href="single-detail-style-1.html">Warehouse Loading</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- Mesonary Col 3 End -->

    </div>

@endsection