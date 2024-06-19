@php
    use App\Helpers\DateFormatter;
@endphp

@extends('user.layouts.app')

@section('content')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">Latest Blog</h2>
            <ul class="careox-breadcrumb list-unstyled">
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li><span>Blog</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="blog-one blog-one--page">
        <div class="container">
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
