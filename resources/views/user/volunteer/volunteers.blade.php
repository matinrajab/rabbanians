@php
    use App\Helpers\DateFormatter;
@endphp

@extends('user.layouts.app')

@section('content')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">Rabbanians Project</h2>
            <ul class="careox-breadcrumb list-unstyled">
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li><span>Rabbanians Project</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="donations-three donations-three--page">
        <div class="container">
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
@endsection
