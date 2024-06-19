@php
    use App\Helpers\DateFormatter;
@endphp

@extends('user.layouts.app')

@section('content')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">Rabbanians Project Details</h2>
            <ul class="careox-breadcrumb list-unstyled">
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li><span>Rabbanians Project</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="product-details">
        <div class="container">
            <!-- /.product-details -->
            <div class="row">
                <div class="col-lg-6 col-xl-6 wow fadeInLeft" data-wow-delay="200ms">
                    <div class="product-details__img">
                        <img src="{{ asset('files') }}/volunteer/{{ $openVolunteer->image }}" alt="">
                    </div>
                </div><!-- /.column -->
                <div class="col-lg-6 col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                    <div class="product-details__content">
                        <div class="product-details__top">
                            <h3 class="product-details__title"> {{ $openVolunteer->program_name }} </h3>
                            <!-- /.product-title -->
                        </div>
                        <ul class="list-unstyled team-details__list">
                            <li>
                                <i class="icofont-location-pin"></i>
                                {{ $openVolunteer->location }}
                            </li>
                            <li>
                                <i class="icofont-ui-calendar"></i>
                                {{ DateFormatter::startToEnd($openVolunteer->start_date, $openVolunteer->end_date) }}
                            </li>
                        </ul><!-- /.list-unstyled team-details__list -->
                        <div class="product-details__excerpt">
                            <p class="product-details__excerpt-text1">
                                Category : {{ $openVolunteer->volunteerType->name }}
                            </p>
                            <p class="product-details__excerpt-text1">
                                Application Deadline : {{ DateFormatter::date($openVolunteer->application_deadline) }}
                            </p>
                        </div><!-- /.excerp-text -->
                    </div>
                </div>
            </div>
            <!-- /.product-details -->
            <!-- /.product-description -->
            <div class="product-details__description wow fadeInUp" data-wow-delay="300ms">
                <h3 class="product-details__description__title">Description</h3>
                <div class="product-details__description__text text-justify">
                    {!! nl2br($openVolunteer->description) !!}
                </div>
            </div>
            <div class="product-details__description wow fadeInUp" data-wow-delay="300ms">
                <h3 class="product-details__description__title">Requirements</h3>
                <div class="product-details__description__text text-justify">
                    {!! nl2br($openVolunteer->requirements) !!}
                </div>
            </div>
            <div class="product-details__description wow fadeInUp" data-wow-delay="300ms">
                <h3 class="product-details__description__title">Application Process</h3>
                <div class="product-details__description__text text-justify">
                    {!! nl2br($openVolunteer->application_process) !!}
                </div>
            </div>
        </div>
    </section>
    <!-- Products End -->
@endsection
