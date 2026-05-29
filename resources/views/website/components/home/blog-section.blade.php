<section class="blog_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="pbmit-heading-subheading">
                    <h4 class="pbmit-subtitle">Our Blogs</h4>
                    <h2 class="pbmit-title">Latest News & Blogs</h2>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="our-blog_btn">
                    <a href="{{ route('our-blogs') }}" class="pbmit-btn">Show All</a>
                </div>
            </div>
        </div>
        <div class="swiper-slider" data-autoplay="false" data-loop="false" data-dots="false" data-arrows="false"
            data-columns="3" data-margin="30" data-effect="slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- Slide1 -->
                    <article class="pbmit-blog-style-1">
                        <div class="post-item">
                            <div class="pbminfotech-box-content">
                                <div class="pbmit-featured-container">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('website/images/upload/blog-main.png') }}" class="img-fluid"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="pbmit-meta-date-wrapper pbmit-meta-line">
                                        <div class="pbmit-meta-date">
                                            <span class="pbmit-day-wrap">06</span>
                                            <span class="pbmit-date-wrap">December 2019</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-content-wrapper">
                                    <h3 class="pbmit-post-title">
                                        <a href="{{ route('our-blogs') }}">Caesars Rejected Court Shield in Functioning
                                            Product’s Bankruptcy Spin Palace Casino Delete Account Situation</a>
                                    </h3>
                                </div>
                                <a class="pbmit-button" href="{{ route('our-blogs') }}">
                                    <span class="pbmit-button-wrapper">Read More</span>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
              
             
            </div>
        </div>
    </div>
</section>