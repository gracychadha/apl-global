@extends('website.layout.app')
@section('title', 'Welcome to APL GLOBAL LOGISTICS')
@section('content')
    <!-- slider -->
    @include('website.components.home.slider')

    <!-- Marquee -->
    <!-- @include('website.components.home.marque') -->

    <!-- About us Start -->
    @include('website.components.home.about-us')



    <!-- Service Start -->
    @include('website.components.home.services')
    <!-- why choose -->
    @include('website.components.home.why-choose')
    @include('website.components.home.what-we-do')




    <!-- Fid Start -->
    @include('website.components.home.counter')



    <!-- portfolio -->
    @include('website.components.home.portfolio')
    <!-- Testimonial Start -->
    @include('website.components.home.testimonial')

    @include('website.components.home.blog-section')


@endsection
@push('scripts')
    <script>
                    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?86687';
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = url;
                    var options = {
                        "enabled": true,
                        "chatButtonSetting": {
                            "backgroundColor": "#2ACA45;",
                            "ctaText": "",
                            "borderRadius": "25",
                            "marginLeft": "20",
                            "marginBottom": "30",
                            "marginRight": "50",
                            "position": "left"
                        },
                        "brandSetting": {
                            "brandName": "APL GLOBAL LOGISTICS",
                            "brandSubTitle": "Typically replies within a day",
                            "brandImg": "../website/images/favicon-apl.ico",
                            "welcomeText": "Hi there!\nHow can I help you?",
                            "messageText": "Hello, I have a question about ",
                            "backgroundColor": "#2ACA45;",
                            "ctaText": "Start Chat",
                            "borderRadius": "25",
                            "autoShow": false,
                            "phoneNumber": "+971567590009"
                        }
                    };
                    s.onload = function () {
                        CreateWhatsappChatWidget(options);
                    };
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                </script>


@endpush