@extends('user.layouts.app')

@section('content')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">About Us</h2>
            <ul class="careox-breadcrumb list-unstyled">
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li><span>About Us</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="about-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="wow fadeInLeft" data-wow-delay="100ms">
                        <div class="about-one__image__one">
                            <img src="{{ asset('files') }}/about_us/{{ $aboutUs->image }}" alt="careox">
                        </div>
                    </div><!-- /.why-choose-two__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="200ms">
                    <div class="about-one__content">
                        <div class="sec-title text-left">
                            <h3 class="sec-title__title bw-split-in-left">About Us</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <div class="about-one__content__text text-justify">
                            {!! nl2br($aboutUs->about_us) !!}
                        </div>
                    </div><!-- /.why-choose-two__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-one -->

    <section class="team-two team-two--page video-one">
        <div class="container">
            <div class="sec-title text-center">

                <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>Our
                    Expert Team</h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title bw-split-in-left">Meet The Team Member</h3><!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="row gutter-y-30">
                @foreach ($teams as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'
                            style='--accent-color: #ffa415;'>
                            <div class="team-card-two__content">
                                <h3 class="team-card-two__title">
                                    <a href="">{{ $item->name }}</a>
                                </h3><!-- /.team-card-two__title -->
                                <p class="team-card-two__designation">{{ $item->position }}</p>
                                <!-- /.team-card-two__designation -->
                            </div><!-- /.team-card-two__content -->
                            <div class="team-card-two__image">
                                <img src="{{ asset('files') }}/team/{{ $item->image }}" alt="Ethel Daley">
                            </div><!-- /.team-card-two__image -->
                        </div><!-- /.team-card-two -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                @endforeach
            </div><!-- /.row -->
            <br>
            <br>
            <a href="{{ route('teams') }}" class="careox-btn"><span>meet all members</span></a>
        </div><!-- /.container -->
    </section><!-- /.team-two -->

    @if ($achievements->isNotEmpty())
        <!-- Service Start -->
        <section class="service-one">
            <div class="service-one__shape-one" style="background-image: url(assets/images/shapes/service-bg-shape-1.png);">
            </div>
            <div class="service-one__shape-two" style="background-image: url(assets/images/shapes/service-bg-shape-2.png);">
            </div>
            <div class="container">
                <div class="sec-title text-center">
                    <h3 class="sec-title__title bw-split-in-left">Achievements</h3>
                    <!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30 justify-content-center">
                    @foreach ($achievements as $item)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                            <div class="donations-one__item">
                                <div class="donations-one__item__image">
                                    <img src="{{ asset('files') }}/achievement/{{ $item->image }}" alt="careox">
                                </div>
                                <div class="donations-one__item__content">
                                    <h3 class="donations-one__item__title">{{ $item->name }}</h3>
                                    <p class="donations-one__item__text">{{ $item->description }}</p>
                                </div>
                            </div>
                        </div><!-- /.item -->
                    @endforeach
                </div><!-- /.row -->
            </div>
        </section>
        <!-- Service End -->
    @endif

    <section class="about-one">
        <div class="about-one__shape"><img src="assets/images/shapes/about-1-shape-4.png" alt="careox"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <section class="contact-map">
                        <div class="container-fluid">
                            <div class="google-map google-map__contact">
                                <iframe title="template google map"
                                    src="https://maps.google.com/maps?q=surabaya&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
                                    class="map__contact" allowfullscreen></iframe>
                            </div>
                            <!-- /.google-map -->
                        </div><!-- /.container-fluid -->
                    </section><!-- /.contact-map -->
                </div><!-- /.col-lg-6 -->
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="about-one__content">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline bw-split-in-right"><span
                                    class="sec-title__tagline__border"></span>Contact Us</h6>
                            <!-- /.sec-title__tagline -->

                            <h5 class="about-one__content__box__title">Address</h5>
                        </div><!-- /.sec-title -->
                        <div class="about-one__content__text text-justify">
                            {{ $contact->address }}
                        </div>
                    </div><!-- /.why-choose-two__content -->
                    <div class="about-one__content">
                        <div class="sec-title text-left">
                            <h5 class="about-one__content__box__title">Contact</h5>
                        </div><!-- /.sec-title -->
                        <div class="about-one__content__text text-justify">
                            Phone : {{ $contact->phone_number }} <br> Email : {{ $contact->email }} <br> Instagram :
                            {{ $contact->instagram }}
                        </div>
                    </div><!-- /.why-choose-two__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-one -->

    <br>
    <br>
    <br>
@endsection
