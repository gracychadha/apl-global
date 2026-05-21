<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('website/images/favicon-apl.ico') }}">
    <!-- CSS
         ============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('website/css/fontawesome.css') }}">
    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('website/css/flaticon.css') }}">
    <!-- optico Icons -->
    <link rel="stylesheet" href="{{ asset('website/css/pbminfotech-base-icons.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('website/css/themify-icons.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('website/css/swiper.min.css') }}">
    <!-- Magnific -->
    <link rel="stylesheet" href="{{ asset('website/css/magnific-popup.css') }}">
    <!-- AOS -->
    <link rel="stylesheet" href="{{ asset('website/css/aos.css') }}">
    <!-- Shortcode CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/shortcode.css') }}">
    <!-- Base CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/base.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/responsive.css') }}">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/revolution/rs6.css') }}">

</head>

<body>

    <!-- page wrapper -->
    <div class="page-wrapper">

        <!-- header  -->
        @include('website.components.common.header')
        <!-- header end -->

        <div class="page-content">
            @yield('content')
        </div>
        <!-- footer -->
        @include('website.components.common.footer')
        <!-- footer end -->


    </div>
    <!-- page wrapper End -->


    <!-- Scroll To Top -->
    <div class="pbmit-progress-wrap">
        <svg class="pbmit-progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- Scroll To Top End -->

    <!-- JS
        ============================================ -->
    <!-- jQuery JS -->
    <script data-cfasync="false"
        src="{{ asset('website//cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('website/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
    <!-- jquery Waypoints JS -->
    <script src="{{ asset('website/js/jquery.waypoints.min.js') }}"></script>
    <!-- jquery Appear JS -->
    <script src="{{ asset('website/js/jquery.appear.js') }}"></script>
    <!-- Numinate JS -->
    <script src="{{ asset('website/js/numinate.min.js') }}"></script>
    <!-- Slick JS -->
    <script src="{{ asset('website/js/swiper.min.js') }}"></script>
    <!-- Magnific JS -->
    <script src="{{ asset('website/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Circle Progress JS -->
    <script src="{{ asset('website/js/circle-progress.js') }}"></script>
    <!-- countdown JS -->
    <script src="{{ asset('website/js/jquery.countdown.min.js') }}"></script>
    <!-- AOS -->
    <script src="{{ asset('website/js/aos.js') }}"></script>
    <!-- GSAP -->
    <script src="{{ asset('website/js/gsap.js') }}"></script>
    <!-- Scroll Trigger -->
    <script src="{{ asset('website/js/ScrollTrigger.js') }}"></script>
    <!-- Split Text -->
    <script src="{{ asset('website/js/SplitText.js') }}"></script>
    <!-- Cursor -->
    <script src="{{ asset('website/js/cursor.js') }}"></script>
    <!-- Magnetic -->
    <script src="{{ asset('website/js/magnetic.js') }}"></script>
    <!-- GSAP Animation -->
    <script src="{{ asset('website/js/gsap-animation.js') }}"></script>
    <!-- Scripts JS -->
    <script src="{{ asset('website/js/scripts.js') }}"></script>
    <!-- Revolution JS -->
    <script src="{{ asset('website/revolution/rslider.js') }}"></script>
    <script src="{{ asset('website/revolution/rbtools.min.js') }}"></script>
    <script src="{{ asset('website/revolution/rs6.min.js') }}"></script>
    <!-- Google reCAPTCHA v3 -->
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>

    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('{{ config("services.recaptcha.site_key") }}', {
                action: 'contact'
            }).then(function (token) {
                document.getElementById('g-recaptcha-response').value = token;
            });
        });
    </script>
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session("success") }}',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session("error") }}',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
    <script>(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'9fa736c2e85130d2',t:'MTc3ODU2NTc0MS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src=cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head') )[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();</script>
</body>

</html>