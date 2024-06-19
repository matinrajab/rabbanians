@extends('user.layouts.app')

@section('content')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">Meet The Team</h2>
            <ul class="careox-breadcrumb list-unstyled">
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li><span>Team</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="team-two team-two--page">
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
        </div><!-- /.container -->
    </section><!-- /.team-two -->
@endsection
