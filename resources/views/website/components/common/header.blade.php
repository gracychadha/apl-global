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
                                        <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>

                                        <li
                                            class="dropdown {{ request()->routeIs('about-us', 'why-choose') ? 'active' : '' }}">
                                            <a href="{{ route('about-us') }}">About Us</a>
                                            <ul>
                                                <!-- <li class="{{ request()->routeIs('about-us') ? 'active' : '' }}">
                                                    <a href="{{ route('about-us') }}">About Us</a>
                                                </li> -->
                                                <li class="{{ request()->routeIs('why-choose') ? 'active' : '' }}">
                                                    <a href="{{ route('why-choose') }}">Why Choose Us</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li
                                            class="dropdown {{ request()->routeIs('air-freight', 'ocean-freight', 'road-freight', 'warehousing', 'packaging', 'customs-brokerage') ? 'active' : '' }}">
                                            <a href="#">Our Services</a>
                                            <ul>
                                                <li class="{{ request()->routeIs('air-freight') ? 'active' : '' }}">
                                                    <a href="{{ route('air-freight') }}">Air Freight</a>
                                                </li>
                                                <li
                                                    class="{{ request()->routeIs('door-to-door-freight') ? 'active' : '' }}">
                                                    <a href="{{ route('door-to-door-freight') }}">Door to Door
                                                        Service</a>
                                                </li>
                                                <li class="{{ request()->routeIs('ocean-freight') ? 'active' : '' }}">
                                                    <a href="{{ route('ocean-freight') }}">Ocean Freight</a>
                                                </li>
                                                <!-- <li class="{{ request()->routeIs('road-freight') ? 'active' : '' }}">
                                                    <a href="{{ route('road-freight') }}">Road Freight</a>
                                                </li> -->
                                                <li class="{{ request()->routeIs('warehousing') ? 'active' : '' }}">
                                                    <a href="{{ route('warehousing') }}">Warehousing</a>
                                                </li>
                                                <li class="{{ request()->routeIs('packaging') ? 'active' : '' }}">
                                                    <a href="{{ route('packaging') }}">Packaging</a>
                                                </li>
                                                <li
                                                    class="{{ request()->routeIs('customs-brokerage') ? 'active' : '' }}">
                                                    <a href="{{ route('customs-brokerage') }}">Customs Brokerage</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="{{ request()->routeIs('gallery') ? 'active' : '' }}">
                                            <a href="{{ route('gallery') }}">Our Gallery</a>
                                        </li>

                                        <li class="{{ request()->routeIs('career') ? 'active' : '' }}">
                                            <a href="{{ route('career') }}">Careers</a>
                                        </li>

                                        <li class="{{ request()->routeIs('contact-us') ? 'active' : '' }}">
                                            <a href="{{ route('contact-us') }}">Contact Us</a>
                                        </li>
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
                            <a class="pbmit-btn" href="https://www.track-trace.com/aircargo" target="_blank">Track &
                                Trace</a>


                        </div>
                        <a href="tel:+971567590009" class="vc-floating-call-btn" aria-label="Call Us">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                        <a href="https://wa.me/+971567590009" class="whatsapp-btn" target="_blank"
                            aria-label="Chat on WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>

                        <!-- Font Awesome -->
                        <link rel="stylesheet"
                            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

                        <style>
                            .whatsapp-btn {
                                position: fixed;
                                right: 30px;
                                top: 20px;
                                width: 60px;
                                height: 60px;
                                background: #25D366;
                                color: #fff;
                                border-radius: 50%;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                font-size: 34px;
                                text-decoration: none;
                                box-shadow: 0 6px 15px rgba(0, 0, 0, .25);
                                z-index: 9999;
                                transition: .3s ease;
                            }

                            .whatsapp-btn:hover {
                                background: #1ebe5d;
                                color: #fff;
                                transform: scale(1.1);
                            }

                            @media (max-width:786px) {
                                .whatsapp-btn {
                                    right: 115px !important;
                                    position: relative;
                                    top: 0px;
                                    width: 45px !important;
                                    height: 45px !important;
                                    font-size: 25px !important;
                                }

                                .vc-floating-call-btn {
                                    right: 15px !important;
                                    width: 45px !important;
                                    font-size: 20px !important;
                                    height: 45px !important;
                                    position: relative !important; 
                                    top: 0px !important;
                                }
                            }

                            /* Floating Call Button */
                            .vc-floating-call-btn {
                                position: fixed;
                                top: 20px;
                                right: 105px;
                                width: 58px;
                                height: 58px;
                                background: #ff001a;
                                color: #fff;
                                border-radius: 50%;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                font-size: 24px;
                                text-decoration: none;
                                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
                                z-index: 9999;
                                transition: all .3s ease;
                                animation: vcCallPulse 1.8s infinite;
                            }

                            .vc-floating-call-btn:hover {
                                background: #b20718;
                                color: #fff;
                                transform: scale(1.08);
                            }

                            @keyframes vcCallPulse {
                                0% {
                                    box-shadow: 0 0 0 0 #ff001a;
                                }

                                70% {
                                    box-shadow: 0 0 0 18px rgba(40, 167, 69, 0);
                                }

                                100% {
                                    box-shadow: 0 0 0 0 rgba(40, 167, 69, 0);
                                }
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>