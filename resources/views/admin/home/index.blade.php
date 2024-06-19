@php
    $admin_home_page = true;
    $page_name = 'Homepage';
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h5>Homepage</h5>
                </div>
                <div class="card-body pt-4 p-3">
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>About Us</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {!! nl2br($home->about_us) !!} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Vision</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">{!! nl2br($home->vision) !!}</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Mission</h6>
                            <ul>
                                @foreach ($missions as $mission)
                                    <li>
                                        <p class="text-gradient text-dark mb-2 text-sm"> {{ $mission->content }} </p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Years Count</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $home->years_count }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Volunteers Count</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $home->volunteers_count }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Registrants Count</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $home->registrants_count }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Destinations Count</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $home->destinations_count }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Vision Mission Image</h6>
                            <div class="col-md-6 d-block shadow-xl border-radius-xl mb-4">
                                <img src="{{ asset('files') }}/homepage/{{ $home->image_1 }}" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-xl">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>About Us Image</h6>
                            <div class="col-md-6 d-block shadow-xl border-radius-xl mb-4">
                                <img src="{{ asset('files') }}/homepage/{{ $home->image_2 }}" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-xl">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.homepage.edit') }}" class="btn bg-gradient-dark btn-md mt-4 mb-4">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
