@extends('user.layouts.app')

@section('content')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">Sponsorship</h2>
            <ul class="careox-breadcrumb list-unstyled">
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li><span>Sponsorship</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="product-details">
        <div class="container">
            <!-- /.product-description -->
            <div class="product-details__description wow fadeInUp" data-wow-delay="300ms">
                <h3 class="product-details__description__title">Description</h3>
                <div class="product-details__description__text text-justify">
                    {!! nl2br($sponsorship->description) !!}
                </div>
            </div>
            <!-- /.product-description -->
            <!-- /.product-description -->
            <div class="product-details__description wow fadeInUp" data-wow-delay="300ms">
                <h3 class="product-details__description__title">Benefits</h3>
                <div class="product-details__description__text text-justify">
                    {!! nl2br($sponsorship->benefits) !!}
                </div>
            </div>
            <!-- /.product-description -->
            <!-- /.product-description -->
            <div class="product-details__description wow fadeInUp" data-wow-delay="300ms">
                <h3 class="product-details__description__title">Contact Us</h3>
                <p class="product-details__description__text text-justify">
                    Phone: {{ $sponsorship->contact_person }}
                    <br>
                    Email: {{ $sponsorship->contact_email }}
                </p>
            </div>
            <!-- /.product-description -->
            <a href="https://wa.me/{{ $sponsorship->contact_person }}" class="careox-btn"><span>join our
                    Sponsorship</span></a>
        </div>
    </section>
    <!-- Products End -->

    @if ($sponsors->isNotEmpty())
        <section class="donations-one">
            <div class="container">
                <div class="sec-title text-center">
                    <h3 class="sec-title__title bw-split-in-left">Our Sponsorship</h3>
                    <!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30 justify-content-center">
                    @foreach ($sponsors as $item)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                            <div class="donations-one__item">
                                <div class="donations-one__item__image">
                                    <img src="{{ asset('files') }}/sponsor/{{ $item->image }}" alt="careox">
                                </div>
                                <div class="donations-one__item__content2">
                                    <h3 class="donations-one__item__title text-center">{{ $item->name }}</h3>
                                </div>
                            </div>
                        </div><!-- /.item -->
                    @endforeach
                </div><!-- /.row -->
            </div>
        </section>
    @endif
@endsection
