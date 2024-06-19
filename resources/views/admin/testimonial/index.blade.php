@php
    $admin_testimonial_page = true;
    $page_name = 'Testimonial';
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="col-12 mt-4">
        <div class="card mb-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-4">Testimonial</h6>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    @foreach ($testimonials as $testimonial)
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="{{ asset('files') }}/testimonial/{{ $testimonial->profile_picture }}"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <div class="d-flex align-items-center gap-4">
                                        <div>
                                            <i class="far fa-user me-2" aria-hidden="true"></i>
                                            <small>Title: {{ $testimonial->title }}</small>
                                        </div>
                                    </div>
                                    <a href="javascript:;">
                                        <h5> {{ $testimonial->name }} </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        {!! nl2br(substr($testimonial->content, 0, 100)) !!}...
                                    </p>
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="{{ route('admin.testimonials.show', $testimonial->id) }}"
                                            class="btn btn-outline-primary btn-sm mb-0">more details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card h-100 card-plain border">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <a href="{{ route('admin.testimonial.create') }}">
                                    <i class="fa fa-plus text-secondary mb-3"></i>
                                    <h5 class=" text-secondary"> New Testimonial </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
