<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>@yield('title', 'Rabbanians Youth Movement')</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('user/assets') }}/images/favicons/favicon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('user/assets') }}/images/favicons/favicon.png" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('user/assets') }}/images/favicons/favicon.png" />
    <link rel="manifest" href="{{ asset('user/assets') }}/images/favicons/site.webmanifest" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&amp;family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&amp;family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets') }}/css/remixicon.css">
    <link rel="stylesheet" href="{{ asset('user/assets') }}/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('user/assets') }}/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="{{ asset('user/assets') }}/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('user/assets') }}/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('user/assets') }}/vendors/icofont/icofont.min.css" />
    <link rel="stylesheet" href="{{ asset('user/assets') }}/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="{{ asset('user/assets') }}/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="{{ asset('user/assets') }}/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="{{ asset('user/assets') }}/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="{{ asset('user/assets') }}/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="{{ asset('user/assets') }}/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="{{ asset('user/assets') }}/vendors/careox-icons/style.css" />
    <link rel="stylesheet" href="{{ asset('user/assets') }}/vendors/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('user/assets') }}/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('user/assets') }}/vendors/owl-carousel/css/owl.theme.default.min.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('user/assets') }}/css/careox.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-two">
            <div class="container">
                <div class="topbar-two__inner">
                    <ul class="topbar-two__info">
                        <li>
                            <span class="topbar-two__info__icon"><i class="icofont-envelope"></i></span>
                            <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                        </li>
                        <li>
                            <span class="topbar-two__info__icon"><i class="icofont-location-pin"></i></span>
                            <a href="">{{ $contact->address }}</a>
                        </li>
                    </ul><!-- /.topbar-two__info -->
                </div><!-- /.topbar-two__inner -->
            </div><!-- /.container -->
        </div><!-- /.topbar-two -->


        <header class="main-header main-header--four sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="{{ route('homepage') }}">
                            <img src="{{ asset('user/assets') }}/images/logo-rabbanians.png" alt="Careox HTML"
                                height="60">
                        </a>
                    </div><!-- /.main-header__logo -->
                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">

                            <li>
                                <a href="{{ route('homepage') }}">Home</a>
                            </li>

                            <li>
                                <a href="{{ route('open-volunteers.index') }}">Rabbanians project</a>
                            </li>
                            <li>
                                <a href="{{ route('events.index') }}">event</a>
                            </li>
                            <li>
                                <a href="{{ route('blogs.index') }}">blog</a>
                            </li>
                            <li class="dropdown">
                                <a href="#">Collaboration</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('showPartnership') }}">partnership</a></li>
                                    <li><a href="{{ route('showSponsorship') }}">sponsorship</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('about-us') }}">about us</a>
                            </li>
                        </ul>
                    </nav><!-- /.main-header__nav -->
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->
                        <a href="{{ route('open-volunteers.index') }}" class="careox-btn"><span>Explore
                                Now</span></a>
                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
        </header><!-- /.main-header -->

        @yield('content')

        <a href="https://wa.me/{{ $contact->phone_number }}">
            <button class="action-button">
                <i class="ri-whatsapp-line"></i>
            </button>
        </a>

        <footer class="main-footer background-black">
            <div class="main-footer__bg background-black"
                style="background-image: url({{ asset('user/assets') }}/images/backgrounds/footer-bg-1-1.jpg);"></div>
            <!-- /.main-footer__bg -->
            <div class="container pt-60">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget footer-widget--about">
                            <a href="{{ route('homepage') }}" class="footer-widget__logo">
                                <img src="{{ asset('user/assets') }}/images/logo-rabbanians.png" width="223"
                                    alt="Careox HTML Template">
                            </a>
                            <p class="footer-widget__text">
                                Rabbanians Youth Movement adalah organisasi sosial dan dakwah yang mendukung pengabdian
                                masyarakat dan kontribusi pemuda muslim.
                            </p>
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget footer-widget--links-two">
                            <h2 class="footer-widget__title">Quick Link</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="{{ route('homepage') }}">Home</a></li>
                                <li><a href="{{ route('open-volunteers.index') }}">Rabbanians Project</a></li>
                                <li><a href="{{ route('events.index') }}">Latest Events</a></li>
                                <li><a href="{{ route('blogs.index') }}">Latest Blogs </a></li>
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                            </ul><!-- /.list-unstyled footer-widget__links -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="250ms">
                        <div class="footer-widget footer-widget--contact">
                            <h2 class="footer-widget__title">Contact Info</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__info">
                                <li style="--accent-color: #ff5528;">
                                    <span class="footer-widget__info__icon"><i
                                            class="icofont-location-pin"></i></span>
                                    {{ $contact->address }}
                                </li>
                                <li style="--accent-color: #8139e7;">
                                    <span class="footer-widget__info__icon"><i class="icofont-email"></i></span>
                                    <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                                </li>
                                <li style="--accent-color: #ffa415;">
                                    <span class="footer-widget__info__icon"><i class="icofont-phone"></i></span>
                                    {{ $contact->phone_number }}
                                </li>
                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="main-footer__bottom wow fadeInUp" data-wow-delay="300ms">
                <div class="container">
                    <div class="main-footer__bottom__inner">
                        <p class="main-footer__copyright">
                            Copyright ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="/" class="font-weight-bold" target="_blank">Rabbanians</a>
                            Development By
                            <a href="https://punggawastudio.com/" class="font-weight-bold" target="_blank">Punggawa
                                Studio</a>
                        </p>
                    </div><!-- /.main-footer__inner -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__bottom -->
        </footer><!-- /.main-footer -->

    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{ route('homepage') }}" aria-label="logo image"><img
                        src="{{ asset('user/assets') }}/images/logo-rabbanians.png" width="155"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>


    <script src="{{ asset('user/assets') }}/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/jarallax/jarallax.min.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/nouislider/nouislider.min.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/tiny-slider/tiny-slider.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/wnumb/wNumb.min.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/wow/wow.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/isotope/isotope.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/slick/slick.min.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/countdown/countdown.min.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <!-- template js -->
    <script src="{{ asset('user/assets') }}/js/careox.js"></script>

    <!-- toolbar js -->
    <script src="{{ asset('user/assets') }}/vendors/careox-toolbar/js/js.cookie.min.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/careox-toolbar/js/jQuery.style.switcher.min.js"></script>
    <script src="{{ asset('user/assets') }}/vendors/careox-toolbar/js/lang.js"></script>
    <script src="../../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>
    <script src="{{ asset('user/assets') }}/vendors/careox-toolbar/js/careox-toolbar.js"></script>
    @stack('scriptjs')

</body>


</html>
