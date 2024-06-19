@php
    use App\Helpers\DateFormatter;
@endphp

@extends('user.layouts.app')

@section('content')
    <!-- main-slider-start -->
    <section class="main-slider-one">
        <div class="main-slider-one__carousel careox-owl__carousel owl-carousel"
            data-owl-options='{
		"loop": true,
		"animateOut": "fadeOut",
		"animateIn": "fadeIn",
		"items": 1,
		"autoplay": true,
		"autoplayTimeout": 7000,
		"smartSpeed": 1000,
		"nav": false,
        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
		"dots": true,
		"margin": 0
	    }'>
            @foreach ($banner as $item)
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__bg"
                            style="background-image: url({{ asset('user/assets') }}/images/backgrounds/slider-1-1.jpg);">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <circle class='circle0 steap' cx="50%" cy="55%" r="5.2%" />
                            <circle class='circle1 steap' cx="50%" cy="55%" r="15.6%" />
                            <circle class='circle2 steap' cx="50%" cy="55%" r="26%" />
                            <circle class='circle3 steap' cx="50%" cy="55%" r="36.4%" />
                            <circle class='circle4 steap' cx="50%" cy="55%" r="46.8%" />
                            <circle class='circle5 steap' cx="50%" cy="55%" r="57%" />
                            <circle class='circle6 steap' cx="50%" cy="55%" r="67.7%" />
                            <circle class='circle7 steap' cx="50%" cy="55%" r="78.1%" />
                            <circle class='circle8 steap' cx="50%" cy="55%" r="88.5%" />
                            <circle class='circle9 steap' cx="50%" cy="55%" r="100%" />
                        </svg>
                        <div class="main-slider-one__shape-one"><img
                                src="{{ asset('user/assets') }}/images/shapes/slider-1-shape-1.png" alt="careox"></div>
                        <div class="main-slider-one__shape-two"><img
                                src="{{ asset('user/assets') }}/images/shapes/slider-1-shape-2-rtl.png" alt="careox">
                        </div>
                        <div class="main-slider-one__shape-three"><img
                                src="{{ asset('user/assets') }}/images/shapes/slider-1-shape-3.png" alt="careox"></div>
                        <div class="main-slider-one__shape-four"><img
                                src="{{ asset('user/assets') }}/images/shapes/slider-1-shape-4.png" alt="careox"></div>
                        <div class="main-slider-one__layer"
                            style="background-image: url({{ asset('user/assets') }}/images/shapes/slider-1-layer-bg.png);">
                            <div class="main-slider-one__layer__inner">
                                <img src="{{ asset('files') }}/slide_banner/{{ $item->image }}" alt="careox">
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="main-slider-one__content">
                                        <div class="main-slider-one__image">
                                            <img src="{{ asset('user/assets') }}/images/shapes/slider-1-arrow-rtl.png"
                                                alt="careox">
                                            <img src="{{ asset('user/assets') }}/images/shapes/slider-1-hand.png"
                                                alt="careox">
                                        </div>
                                        <!-- slider-sub-title -->
                                        <h2 class="main-slider-one__title"> {{ $item->title }} </h2>
                                        <!-- slider-title -->
                                        <p class="main-slider-one__text">
                                            {{ $item->subtitle }}
                                        </p><!-- slider-text -->
                                        <div class="main-slider-one__btn">
                                            <a href="{{ $item->cta_url }}"
                                                class="careox-btn"><span>{{ $item->cta_label }}</span></a><!-- slider-btn -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- main-slider-end -->

    <section class="about-one">
        <div class="about-one__shape"><img src="{{ asset('user/assets') }}/images/shapes/about-1-shape-4.png"
                alt="careox"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__image wow fadeInLeft" data-wow-delay="100ms">
                        <div class="about-one__image__one">
                            <img src="{{ asset('files') }}/homepage/{{ $home->image_1 }}" alt="careox">
                        </div>
                        <div class="about-one__image__shape-one"><img
                                src="{{ asset('user/assets') }}/images/shapes/about-1-shape-1.png" alt="careox"></div>
                        <div class="about-one__image__shape-two"><img
                                src="{{ asset('user/assets') }}/images/shapes/about-1-shape-2.png" alt="careox"></div>
                    </div><!-- /.why-choose-two__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="about-one__content text-justify">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline bw-split-in-right"><span
                                    class="sec-title__tagline__border"></span>OUR Vision & Mission</h6>
                            <!-- /.sec-title__tagline -->

                            <h5 class="about-one__content__box__title">Vision</h5>
                        </div><!-- /.sec-title -->
                        <p class="about-one__content__text">
                            {{ $home->vision }}
                        </p>
                        <div class="row gutter-y-30 pb-20">
                            <div class="col-md-6">
                                <div class="about-one__content__box" style="--accent-color: #ffa415;">
                                    <div class="about-one__content__box__top">
                                        <h5 class="about-one__content__box__title">Mission</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="about-one__content__list">
                            @foreach ($missions as $mission)
                                <li>
                                    <span class="about-one__content__list__icon"><i
                                            class="icofont-check-circled"></i></span>
                                    {{ $mission->content }}
                                </li>
                            @endforeach
                        </ul>
                    </div><!-- /.why-choose-two__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-one -->

    <section class="funfact-one">
        <div class="container wow fadeInUp">
            <ul class="list-unstyled funfact-one__list">
                <li class="funfact-one__item count-box" style="--accent-color: #ffa415;">
                    <div class="funfact-one__icon">
                        <i class="icon-charity-two"></i>
                    </div><!-- /.funfact-one__icon -->
                    <div class="funfact-one__content">
                        <h3 class="funfact-one__count"><span class="count-text" data-stop="{{ $home->years_count }}"
                                data-speed="1500"></span>+</h3>
                        <!-- /.funfact-one__count -->
                        <p class="funfact-one__text">Years of <br> Experience</p><!-- /.funfact-one__text -->
                    </div><!-- /.funfact-one__content -->
                </li><!-- /.funfact-one__item -->
                <li class="funfact-one__item count-box" style="--accent-color: #ff5528;">
                    <div class="funfact-one__icon">
                        <i class="icon-zakat"></i>
                    </div><!-- /.funfact-one__icon -->
                    <div class="funfact-one__content">
                        <h3 class="funfact-one__count"><span class="count-text"
                                data-stop="{{ $home->volunteers_count }}" data-speed="1500"></span>+</h3>
                        <!-- /.funfact-one__count -->
                        <p class="funfact-one__text">Volunteers</p><!-- /.funfact-one__text -->
                    </div><!-- /.funfact-one__content -->
                </li><!-- /.funfact-one__item -->
                <li class="funfact-one__item count-box" style="--accent-color: #8139e7;">
                    <div class="funfact-one__icon">
                        <i class="icon-interactions"></i>
                    </div><!-- /.funfact-one__icon -->
                    <div class="funfact-one__content">
                        <h3 class="funfact-one__count"><span class="count-text"
                                data-stop="{{ $home->registrants_count }}" data-speed="1500"></span>+</h3>
                        <!-- /.funfact-one__count -->
                        <p class="funfact-one__text">Registrants</p><!-- /.funfact-one__text -->
                    </div><!-- /.funfact-one__content -->
                </li><!-- /.funfact-one__item -->
                <li class="funfact-one__item count-box" style="--accent-color: #44c895;">
                    <div class="funfact-one__icon">
                        <i class="icon-multiple-users-silhouette"></i>
                    </div><!-- /.funfact-one__icon -->
                    <div class="funfact-one__content">
                        <h3 class="funfact-one__count"><span class="count-text"
                                data-stop="{{ $home->destinations_count }}" data-speed="1500"></span>+</h3>
                        <!-- /.funfact-one__count -->
                        <p class="funfact-one__text">Destinations</p><!-- /.funfact-one__text -->
                    </div><!-- /.funfact-one__content -->
                </li><!-- /.funfact-one__item -->
            </ul><!-- /.list-unstyled funfact-one__list -->
        </div><!-- /.container -->
    </section><!-- /.funfact-one -->

    <!-- Service Start -->
    <section class="service-one">
        <div class="service-one__shape-one"
            style="background-image: url({{ asset('user/assets') }}/images/shapes/service-bg-shape-1.png);">
        </div>
        <div class="service-one__shape-two"
            style="background-image: url({{ asset('user/assets') }}/images/shapes/service-bg-shape-2-rtl.png);"></div>
        <div class="container">
            <div class="sec-title text-center">
                <h3 class="sec-title__title bw-split-in-left">Program Kerja</h3>
                <!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="row gutter-y-30 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                    <div class="service-one__item text-center" style="--accent-color: #ffa415;">
                        <div class="service-one__item__icon">
                            <span class="icon-generous"></span>
                        </div><!-- /.service-icon -->
                        <h3 class="service-one__item__title">Pendidikan</h3><!-- /.service-title -->
                        <p class="service-one__item__text">
                            Memberikan kesempatan kepada delegasi untuk merancang program kerja yang sesuai dengan
                            lokasi dilaksanakan kegiatan pengabdian masyarakat.
                        </p><!-- /.service-title -->
                    </div><!-- /.service-card-one -->
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="service-one__item text-center" style="--accent-color: #ff5528;">
                        <div class="service-one__item__icon">
                            <span class="icon-zakat"></span>
                        </div><!-- /.service-icon -->
                        <h3 class="service-one__item__title">Kesehatan</h3><!-- /.service-title -->
                        <p class="service-one__item__text">
                            Memenuhi kebutuhan kesehatan masyarakat sehingga dapat memberikan kualitas kesehatan
                            yang lebih baik.
                        </p><!-- /.service-title -->
                    </div><!-- /.service-card-one -->
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="service-one__item text-center" style="--accent-color: #8139e7;">
                        <div class="service-one__item__icon">
                            <span class="icon-zakat-two"></span>
                        </div><!-- /.service-icon -->
                        <h3 class="service-one__item__title">Lingkungan</h3><!-- /.service-title -->
                        <p class="service-one__item__text">
                            Diadakannya kajian mendalam mengenai permasalahan juga solusi berkelanjutan guna menjaga
                            lingkungan di masa mendatang.
                        </p><!-- /.service-title -->
                    </div><!-- /.service-card-one -->
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="service-one__item text-center" style="--accent-color: #44c895;">
                        <div class="service-one__item__icon">
                            <span class="icon-charity-three"></span>
                        </div><!-- /.service-icon -->
                        <h3 class="service-one__item__title">Ekonomi Wisata</h3><!-- /.service-title -->
                        <p class="service-one__item__text">
                            Mengoptimalkan potensi lokal dengan harapan dapat menjadi manfaat bagi masyarakat guna
                            meningkatkan taraf ekonomi yang lebih baik.
                        </p><!-- /.service-title -->
                    </div><!-- /.service-card-one -->
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="service-one__item text-center" style="--accent-color: #d340c3;">
                        <div class="service-one__item__icon">
                            <span class="icon-charity-two"></span>
                        </div><!-- /.service-icon -->
                        <h3 class="service-one__item__title">Dakwah Islam</h3><!-- /.service-title -->
                        <p class="service-one__item__text">
                            Menjadi wadah aktualisasi pemuda muslim untuk menyampaikan ilmu dan agama Islam ke
                            khalayak umum dengan cara yang baik dan Hikmah
                        </p><!-- /.service-title -->
                    </div><!-- /.service-card-one -->
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->


    <section class="donations-three donations-three--page">
        <div class="container">
            <div class="sec-title text-center">
                <h3 class="sec-title__title bw-split-in-left">Rabbanians Project</h3>
                <!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="row gutter-y-30">
                @foreach ($openVolunteers as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                        <div class="donations-three__item" style="--accent-color: #ffa415;">
                            <div class="donations-three__item__image">
                                <img src="{{ asset('files') }}/volunteer/{{ $item->image }}" alt="careox">
                                <a href="{{ route('open-volunteers.show', $item) }}"
                                    class="donations-three__item__image__link"></a>
                                <div class="donations-three__item__category"> {{ $item->volunteerType->name }} </div>
                                <a class="donations-three__item__rm" href="{{ route('open-volunteers.show', $item) }}"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                            <div class="donations-three__item__content2">
                                <h3 class="donations-three__item__title"><a
                                        href="{{ route('open-volunteers.show', $item) }}">{{ $item->program_name }}</a>
                                </h3>
                                <p class="donations-three__item__text">{!! nl2br(substr($item->description, 0, 100)) !!}...</p>
                                <div>
                                    <a href=""><i class="icofont-location-pin"></i></a>
                                    <a href="">{{ $item->location }}</a>
                                </div>
                                <div>
                                    <a href=""><i class="icofont-ui-calendar"></i></a>
                                    <a
                                        href="">{{ DateFormatter::startToEnd($item->start_date, $item->end_date) }}</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.item -->
                @endforeach
            </div><!-- /.donations-three__slider -->
        </div>
    </section>


    <section class="video-one">
        <div class="video-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%"
            style="background-image: url({{ asset('files') }}/homepage/{{ $home->image_2 }});"></div>
        <!-- /.video-one__bg -->
        <div class="video-one__shape-one"
            style="background-image: url({{ asset('user/assets') }}/images/shapes/video-shape-1-rtl.png);">
        </div>
        <!-- /.video-one__shape -->
        <div class="video-one__shape-two"
            style="background-image: url({{ asset('user/assets') }}/images/shapes/video-shape-2.png);">
        </div><!-- /.video-one__shape -->
        <div class="container">
            <h2 class="video-one__title">About Us</h2><!-- /.video-one__title -->
            <div class="video-one__text text-justify">{!! nl2br($home->about_us) !!}</div>
            <!-- /.video-one__text -->
            <a href="{{ route('about-us') }}" class="careox-btn"><span>About More</span></a>
        </div><!-- /.container -->
    </section><!-- /.video-one -->

    <!-- Feature Start -->
    <section class="feature-one">
        <div class="feature-one__bg"
            style="background-image: url({{ asset('user/assets') }}/images/shapes/feature-bg-1.png);"></div>
        <div class="container">
            <div class="sec-title text-center">
                <h3 class="sec-title__title bw-split-in-left">Program Unggulan</h3><!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="row gutter-y-30">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                    <div class="feature-one__item" style="--accent-color: #ffa415;">
                        <div class="feature-one__item__shape"
                            style="background-image: url({{ asset('user/assets') }}/images/shapes/feature-1-shape.png);">
                        </div>
                        <div class="feature-one__item__icon"><span class="icon-zakat"></span></div>
                        <h3 class="feature-one__item__title">Wakaf Pelosok Negeri</h3>
                    </div><!-- feature-item -->
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="feature-one__item feature-one__item--reverse" style="--accent-color: #fc5528;">
                        <div class="feature-one__item__inner">
                            <div class="feature-one__item__shape"
                                style="background-image: url({{ asset('user/assets') }}/images/shapes/feature-1-shape.png);">
                            </div>
                            <div class="feature-one__item__icon"><span class="icon-charity-two"></span></div>
                            <h3 class="feature-one__item__title">Wakaf Mushaf Pelosok Negeri</h3>
                        </div>
                    </div><!-- feature-item -->
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="feature-one__item" style="--accent-color: #8139e7;">
                        <div class="feature-one__item__inner">
                            <div class="feature-one__item__shape"
                                style="background-image: url({{ asset('user/assets') }}/images/shapes/feature-1-shape.png);">
                            </div>
                            <div class="feature-one__item__icon"><span class="icon-generous"></span></div>
                            <h3 class="feature-one__item__title">Wakaf Masjid</h3>
                        </div>
                    </div><!-- feature-item -->
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="feature-one__item" style="--accent-color: #44c895;">
                        <div class="feature-one__item__inner">
                            <div class="feature-one__item__shape"
                                style="background-image: url({{ asset('user/assets') }}/images/shapes/feature-1-shape.png);">
                            </div>
                            <div class="feature-one__item__icon"><span class="icon-charity-three"></span></div>
                            <h3 class="feature-one__item__title">Wakaf Sumur & Air Bersih</h3>
                        </div>
                    </div><!-- feature-item -->
                </div>
            </div>
        </div>
    </section>
    <!-- Feature End -->


    <section class="donations-one">
        <div class="container">
            <div class="sec-title text-center">
                <h3 class="sec-title__title bw-split-in-left">Latest Events</h3>
                <!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="row gutter-y-30">
                @foreach ($events as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                        <div class="donations-one__item" style="--accent-color: #ffa415;">
                            <div class="donations-one__item__image">
                                <img src="{{ asset('files') }}/event/{{ $item->image }}" alt="careox">
                                <a href="{{ route('events.show', $item) }}" class="donations-one__item__image__link"></a>
                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title"><a href="{{ route('events.show', $item) }}">
                                        {{ $item->name }} </a></h3>
                                <div class="donations-one__item__text">{!! nl2br(substr($item->description, 0, 100)) !!}...</div>
                                <div>
                                    <a href=""><i class="icofont-location-pin"></i></a>
                                    <a href="{{ route('events.show', $item) }}">{{ $item->location }}</a>
                                </div>
                                <div>
                                    <a href=""><i class="icofont-ui-calendar"></i></a>
                                    <a
                                        href="{{ route('events.show', $item) }}">{{ DateFormatter::startToEnd($item->start_date, $item->end_date) }}</a>
                                </div>
                                <a class="donations-one__item__rm" href="{{ route('events.show', $item) }}"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div><!-- /.item -->
                @endforeach
            </div><!-- /.row -->
        </div>
    </section>


    <section class="testimonials-one">
        <div class="testimonials-one__bg"
            style="background-image: url({{ asset('user/assets') }}/images/shapes/testimonial-bg-1.png);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title text-left">

                        <h6 class="sec-title__tagline bw-split-in-right"><span
                                class="sec-title__tagline__border"></span>Our testimonials</h6>
                        <!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title bw-split-in-left">What They’re Talking <br>About Us?</h3>
                        <!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <p class="testimonials-one__text">
                        <br>
                    </p>
                    <ul class="testimonials-one__image careox-slick__carousel"
                        data-slick-options='{
					"slidesToShow": 3,
					"slidesToScroll": 1,
					"autoplay": true,
					"centerMode": true,
					"asNavFor": ".testimonials-one__carousel",
					"focusOnSelect": true,
					"dots": false,
					"centerPadding": 0,
					"arrows": true,
					"nextArrow": "<button class=\"next\"><i class=\"icon-right-arrow-two\"></i></button>",
            		"prevArrow": "<button class=\"prev\"><i class=\"icon-right-arrow-two1\"></i></button>"
					}'>
                        @foreach ($testimonials as $item)
                            <!-- Testimonial Item -->
                            <li role="presentation">
                                <div class="testimonials-one__image__item" style="--accent-color: #ffa415;"><img
                                        src='{{ asset('files') }}/testimonial/{{ $item->profile_picture }}'
                                        alt='careox'>
                                </div>
                            </li>
                            <!-- Testimonial Item -->
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="testimonials-one__wrapper"
                        style="background-image: url({{ asset('user/assets') }}/images/resources/testimonail-1-bg.jpg);">
                        <div class="testimonials-one__carousel careox-slick__carousel"
                            data-slick-options='{
						"slidesToShow": 2,
						"slidesToScroll": 1,
						"vertical": true,
						"asNavFor": ".testimonials-one__image",
						"autoplay": true,
						"dots": false,
						"centerPadding": 0,
						"arrows": false,
						"responsive": [
							{
								"breakpoint": 992,
								"settings": {
									"slidesToShow": 1,
									"vertical": false,
									"slidesToScroll": 1
								}
							}
						]
						}'>
                            @foreach ($testimonials as $item)
                                <div class="item">
                                    <div class="testimonials-card @@extraClassName"
                                        style='--accent-color: #ffa415;'>
                                        <div class="testimonials-card__image">
                                            <img src="{{ asset('files') }}/testimonial/{{ $item->profile_picture }}"
                                                alt="Testimonial">
                                        </div><!-- /.testimonials-card__image -->
                                        <div class="testimonials-card__content">
                                            {!! nl2br($item->content) !!}
                                        </div><!-- /.testimonials-card__content -->
                                        <h3 class="testimonials-card__name">
                                            {{ $item->name }}
                                        </h3><!-- /.testimonials-card__name -->
                                        <p class="testimonials-card__designation">{{ $item->title }}</p>
                                        <!-- /.testimonials-card__designation -->
                                        <div class="testimonials-card__quote"><i class="icofont-quote-left"></i></div>
                                    </div><!-- /.testimonials-card -->
                                </div><!-- /.item -->
                            @endforeach
                        </div><!-- /.testimonials-one__carousel -->
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.testimonials-one -->


    <section class="blog-one">
        <div class="container">
            <div class="sec-title text-center">
                <h3 class="sec-title__title bw-split-in-left">News & Articles</h3>
                <!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="row gutter-y-30">
                @foreach ($blogs as $blog)
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'
                            style='--accent-color: #ffa415;'>
                            <div class="blog-card__image">
                                <img src="{{ asset('files') }}/blog/{{ $blog->image }}" alt="blog">
                                <img src="{{ asset('files') }}/blog/{{ $blog->image }}" alt="blog">
                                <a href="{{ route('blogs.show', $blog) }}" class="blog-card__image__link"><span
                                        class="sr-only">There
                                        are Many Variations of Available</span>
                                    <!-- /.sr-only --></a>
                                <div class="blog-card__date"><i
                                        class="icofont-ui-calendar"></i>{{ DateFormatter::date($blog->publication_date) }}
                                </div>
                                <!-- /.blog-card__date -->
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <ul class="list-unstyled blog-card__meta">
                                    <li><a href="">By: {{ $blog->author }}</a></li>
                                </ul><!-- /.list-unstyled blog-card__meta -->
                                <h3 class="blog-card__title"><a
                                        href="{{ route('blogs.show', $blog) }}">{{ $blog->title }}</a>
                                </h3>
                                <!-- /.blog-card__title -->
                                <div class="blog-card__text">
                                    {!! nl2br(substr($blog->content, 0, 100)) !!}...
                                </div><!-- /.blog-card__text -->
                                <a href="{{ route('blogs.show', $blog) }}" class="blog-card__link">
                                    <span class="blog-card__link__front"><span class="icofont-double-right"></span></span>
                                    <span class="blog-card__link__back"><span class="icofont-double-right"></span>Read
                                        More</span>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.col-md-6 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-one blog-one--page -->
@endsection
