@php
    use App\Helpers\DateFormatter;
@endphp

@extends('user.layouts.app')

@section('content')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">Event Details</h2>
            <ul class="careox-breadcrumb list-unstyled">
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li><span>Event </span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="team-details">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-5">
                    <div class="team-details__image mb-20">
                        <img src="{{ asset('files') }}/event/{{ $event->image }}" alt="careox">
                    </div><!-- /.team-details__image -->
                    <div class="sidebar__single">
                        <h4 class="sidebar__title">Important Link</h4><!-- /.sidebar__title -->
                        <ul class="sidebar__categories list-unstyled">
                            <li><a href="{{ $event->guide_book_link }}">Guide Book</a></li>
                            <li><a href="{{ $event->fully_funded_link }}">Fully Funded Registration</a></li>
                            <li><a href="{{ $event->partial_funded_link }}">Partial Funded Registration</a></li>
                            <li><a href="{{ $event->self_funded_link }}">Self Funded Registration</a></li>
                        </ul><!-- /.sidebar__categories list-unstyled -->
                    </div><!-- /.sidebar__single -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-7">
                    <div class="team-details__content">
                        <h3 class="team-details__title">{{ $event->name }}</h3><!-- /.team-details__title -->
                        <ul class="list-unstyled team-details__list">
                            <li>
                                <i class="icofont-location-pin"></i>
                                {{ $event->location }}
                            </li>
                            <li>
                                <i class="icofont-ui-calendar"></i>
                                {{ DateFormatter::startToEnd($event->start_date, $event->end_date) }}
                            </li>
                        </ul><!-- /.list-unstyled team-details__list -->
                        <div class="team-details__text">
                            {!! nl2br($event->description) !!}
                        </div>
                    </div><!-- /.team-details__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.team-details -->

    @if ($event->galleries->isNotEmpty())
        <section class="team-one">
            <div class="container">
                <div class="sec-title text-center">
                    <h3 class="sec-title__title bw-split-in-left">Gallery</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30 justify-content-center">
                    @foreach ($event->galleries->sortByDesc('id') as $gallery)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                            <div class="donations-one__item" style="--accent-color: #ffa415;">
                                <div class="donations-one__item__image">
                                    <img src="{{ asset('files') }}/gallery/{{ $gallery->image }}" alt="careox">
                                </div>
                                <div class="donations-one__item__content">
                                    <h3 class="donations-one__item__title">{{ $gallery->title }}</h3>
                                    <p class="donations-one__item__text">{{ $gallery->caption }}</p>
                                </div>
                            </div>
                        </div><!-- /.item -->
                    @endforeach
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.team-one -->
    @endif
@endsection
