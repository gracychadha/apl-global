<header class="site-header header-style-1">
    <div class="pbmit-header-overlay">
        <div class="site-header-menu">
            <div class="container p-0">
                <div class="pbmit-header-content d-flex align-items-center justify-content-between">
                    <div class="pbmit-logo-area">
                        <div class="site-branding pbmit-logo-area">
                            <h1 class="site-title">
                                <a href="{{ route('home') }}" rel="home">
                                    <img class="logo-img" src="{{ asset('website/images/apl-global.svg') }}"
                                        alt="Logistbiz">
                                </a>
                            </h1>
                        </div>
                    </div>
                    <div class="site-navigation">
                        <nav class="main-menu navbar-expand-xl navbar-light">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button">
                                    <i class="pbmit-base-icon-menu-1"></i>
                                </button>
                            </div>
                            <div class="pbmit-mobile-menu-bg"></div>
                            <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                                <div class="pbmit-menu-wrap">
                                    <span class="closepanel">
                                        <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg"
                                            width="20.163" height="20.163" viewBox="0 0 26.163 26.163">
                                            <rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
                                            <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)">
                                            </rect>
                                        </svg>
                                    </span>
                                    <ul class="navigation clearfix">
                                        <li class="active">
                                            <a href="{{ route('home') }}">Home</a>

                                        </li>
                                        <li class="dropdown">
                                            <a href="#">About Company</a>
                                            <ul>
                                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                                <li><a href="{{ route('why-choose') }}">Why Choose Us</a></li>

                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Our Services</a>
                                            <ul>
                                                <li><a href="{{ route('air-freight') }}">Air Frieght</a></li>
                                                <li><a href="{{ route('ocean-freight') }}">Ocean Frieght</a></li>
                                                <li><a href="{{ route('road-freight') }}">Road Frieght</a></li>
                                                <li><a href="{{ route('warehousing') }}">Warehousing</a></li>
                                                <li><a href="{{ route('packaging') }}">Packaging</a></li>
                                                <li><a href="{{ route('customs-brokerage') }}">Customs Brokerage</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('gallery') }}">Our Gallery</a> </li>
                                        <li><a href="{{ route('career') }}">Careers</a> </li>
                                        <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="pbmit-right-box d-flex align-items-center">
                        <!-- <div class="pbmit-header-search-btn">
                            <a href="#"><i class="pbmit-base-icon-search-1"></i></a>
                        </div> -->
                        <div class="pbmit-button-box">
                            <a class="pbmit-btn" href="{{ route('track') }}">Track & Trace</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>