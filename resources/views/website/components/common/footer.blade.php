<footer class="footer-style-2 site-footer pbmit-bg-color-light">
    <div class="pbmit-footer-big-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 pbmit-footer-left">
                    <h3 class="pbmit-title">Subscribe to our newsletter</h3>
                </div>
                <div class="col-md-6">
                    <form action="{{ route('subscribe.store') }}" method="POST">
                        @csrf

                        <div class="pbmit-footer-newsletter">
                            <input type="email" name="email" placeholder="Your email" value="{{ old('email') }}"
                                required>

                            <button class="pbmit-btn" type="submit">
                                <span class="pbmit-button-text">Get Started</span>
                            </button>
                        </div>

                        @error('email')
                            <small style="color:red;">
                                {{ $message }}
                            </small>
                        @enderror
                    </form>

                 
                </div>
            </div>
        </div>
    </div>
    <div class="pbmit-footer-widget-area">
        <div class="container">
            <div class="row">
                <div class="pbmit-footer-widget-col-1 col-md-12 col-lg-3">
                    <div class="widget">
                        <img src="{{ asset('website/images/apl-global.svg') }}" alt="img">
                        <div class="textwidget">
                            <div class="pbmit-contact-widget-address">
                                <p align="justify"> At APL Logistics, we are very aware of the critical importance of
                                    each shipment and
                                    how
                                    much it could mean to the daily operations of your business.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="pbmit-footer-widget-col-3 col-md-12 col-lg-3">
                    <div class="widget">
                        <h2 class="widget-title">Who We Are</h2>
                        <div class="textwidget">
                            <ul>
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                <li><a href="{{ route('our-team') }}">Meet Our Team</a></li>
                                <li><a href="{{ route('our-blogs') }}">News & Media</a></li>
                                <li><a href="{{ route('gallery') }}">Our Gallery</a></li>
                                <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                                <li><a href="{{ route('career') }}">Work With Us</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pbmit-footer-widget-col-3 col-md-12 col-lg-3">
                    <div class="widget">
                        <h2 class="widget-title">What We Do</h2>
                        <div class="textwidget">
                            <ul>
                                <li><a href="{{ route('air-freight') }}">Air Freight</a></li>
                                <li><a href="{{ route('ocean-freight') }}">Ocean Freight</a></li>
                                <li><a href="{{ route('road-freight') }}">Road Freight</a></li>
                                <li><a href="{{ route('warehousing') }}">Warehousing</a></li>
                                <li><a href="{{ route('packaging') }}">Packaging</a></li>
                                <li><a href="{{ route('customs-brokerage') }}">Customs Brokerage</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pbmit-footer-widget-col-3 col-md-12 col-lg-3">
                    <div class="widget">
                        <h2 class="widget-title">Contact Us </h2>
                        <div class="textwidget">
                            <div class="pbmit-contact-widget-phone">+971 4 2949439</div>
                            <div><a href="mailto:info@aplgloballogistic.com"
                                    target="_blank">[info@aplgloballogistic.com]</a>
                            </div>


                        </div>
                        <div class="textwidget">
                            <ul class="pbmit-social-links">
                                <li class="pbmit-social-li pbmit-social-facebook">
                                    <a href="#" target="_blank">
                                        <span><i class="pbmit-base-icon-facebook-f"></i></span>
                                    </a>
                                </li>
                                <li class="pbmit-social-li pbmit-social-twitter">
                                    <a href="#" target="_blank">
                                        <span><i class="pbmit-base-icon-twitter-1"></i></span>
                                    </a>
                                </li>
                                <li class="pbmit-social-li pbmit-social-instagram">
                                    <a href="#" target="_blank">
                                        <span><i class="pbmit-base-icon-instagram"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pbmit-footer-text-area">
        <div class="container">
            <div class="pbmit-footer-text-inner">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="pbmit-footer-copyright-text-area"> &copy; <?php echo date('Y'); ?>
                            <a href="{{ route('home') }}">Apl Global Logistics </a>, Designed and Developed by <a
                                href="https://vibrantick.in/" target="_blank">Vibrantick Infotech Solutions</a>.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="d-flex justify-content-end pbmit-footer-menu ">
                            <li class="me-2">
                                <a href="{{ route('privacy-policy') }}">
                                    <span>Privacy Policy</span>
                                </a>
                            </li>|
                            <li class="ms-2">
                                <a href="{{ route('terms-conditions') }}">
                                    <span>Terms and Conditions</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>