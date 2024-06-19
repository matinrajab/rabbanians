@php
    use App\Helpers\DateFormatter;
@endphp

@extends('user.layouts.app')

@section('content')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">Event List</h2>
            <ul class="careox-breadcrumb list-unstyled">
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li><span>Event </span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="donations-one">
        <div class="container">
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
@endsection
