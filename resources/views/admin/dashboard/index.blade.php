@php
    use App\Helpers\DateFormatter;
    $admin_dashboard_page = true;
    $page_name = 'Dashboard';
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100">
                                <h5 class="font-weight-bolder">Vision & Mission</h5>
                                <p>{!! nl2br(substr($home->vision, 0, 100)) !!}... </p>
                                <ul>
                                    @foreach ($missions as $mission)
                                        <li>{{ substr($mission->content, 0, 30) }}</li>
                                    @endforeach
                                </ul>
                                <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto"
                                    href="{{ route('admin.homepage.show') }}">
                                    Read More
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                            <div class="bg-gradient-primary border-radius-lg h-70">
                                <img src="{{ asset('admin/assets') }}/img/shapes/waves-white.svg"
                                    class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                                <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                    <img class="w-70 position-relative z-index-2 pt-4"
                                        src="{{ asset('admin/assets') }}/img/logos/logo-rabbanians.png" alt="rocket">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card h-100 p-3">
                <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100"
                    style="background-image: url('{{ asset('admin/assets') }}/img/ivancik.jpg');">
                    <span class="mask bg-gradient-dark"></span>
                    <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                        <h5 class="text-white font-weight-bolder mb-4 pt-2">About Us</h5>
                        <div class="text-white">{!! nl2br(substr($aboutUs->about_us, 0, 180)) !!}...</div>
                        <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto"
                            href="{{ route('admin.about-us.show') }}">
                            Read More
                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12 col-xl-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-md-4 text-end">
                            <a href="{{ route('admin.about-us.edit') }}">
                                <i class="fas fa-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Edit Profile"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <p class="text-sm">
                        {{ $contact->address }}
                    </p>
                    <hr class="horizontal gray-light my-4">
                    <ul class="list-group">
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Phone
                                Number:</strong>
                            &nbsp; {{ $contact->phone_number }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp;
                            {{ $contact->email }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Instagram:</strong>
                            &nbsp;
                            {{ $contact->instagram }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Team</h6>
                        </div>
                        <div class="col-6 text-end">
                            <a href="{{ route('admin.about-us.show') }}" class="btn btn-outline-primary btn-sm mb-0">View
                                All</a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group">
                        @foreach ($teams as $team)
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                <div class="avatar me-3">
                                    <img src="{{ asset('files') }}/team/{{ $team->image }}" alt="kal"
                                        class="border-radius-lg shadow">
                                </div>
                                <div class="d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm"> {{ $team->name }} </h6>
                                    <p class="mb-0 text-xs"> {{ $team->position }} </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">rabbanians Projects</h6>
                        </div>
                        <div class="col-6 text-end">
                            <a href="{{ route('admin.open-volunteer.index') }}"
                                class="btn btn-outline-primary btn-sm mb-0">View All</a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group">
                        @foreach ($openVolunteers as $openVolunteer)
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                <div class="avatar me-3">
                                    <img src="{{ asset('files') }}/volunteer/{{ $openVolunteer->image }}" alt="kal"
                                        class="border-radius-lg shadow">
                                </div>
                                <div class="d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">
                                        {{ substr($openVolunteer->program_name, 0, 35) }}{{ Str::length($openVolunteer->program_name) > 35 ? '...' : '' }}
                                    </h6>
                                    <div class="mb-0 text-xs">{!! nl2br(substr($openVolunteer->description, 0, 40)) !!}...</div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-4">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-1">Events</h6>
                    <p class="text-sm">Architects design houses</p>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        @foreach ($events as $event)
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card card-blog card-plain">
                                    <div class="position-relative">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img src="{{ asset('files') }}/event/{{ $event->image }}"
                                                alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                        </a>
                                    </div>
                                    <div class="card-body px-1 pb-0">
                                        <div class="d-flex align-items-center gap-4">
                                            <div>
                                                <i class="fas fa-map-marker-alt me-2" aria-hidden="true"></i>
                                                <small> {{ $event->location }} </small>
                                            </div>
                                            <div>
                                                <i class="far fa-calendar-alt me-2" aria-hidden="true"></i>
                                                <small>
                                                    {{ DateFormatter::startToEnd($event->start_date, $event->end_date) }}
                                                </small>
                                            </div>
                                        </div>
                                        <h5> {{ $event->name }} </h5>
                                        <p class="mb-4 text-sm">
                                            {!! nl2br(substr($event->description, 0, 100)) !!}...
                                        </p>
                                        <div class="d-flex gap-2 align-items-center">
                                            <a href="{{ route('admin.events.show', $event->id) }}"
                                                class="btn btn-outline-primary btn-sm mb-0">more details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card h-100 card-plain border">
                                <div class="card-body d-flex flex-column justify-content-center text-center">
                                    <a href="{{ route('admin.events.index') }}">
                                        <h5 class=" text-secondary"> VIEW ALL </h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-1">Blogs</h6>
                    <p class="text-sm">Architects design houses</p>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        @foreach ($blogs as $blog)
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card card-blog card-plain">
                                    <div class="position-relative">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img src="{{ asset('files') }}/blog/{{ $blog->image }}"
                                                alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                        </a>
                                    </div>
                                    <div class="card-body px-1 pb-0">
                                        <div class="d-flex align-items-center gap-4">
                                            <div>
                                                <i class="far fa-user me-2" aria-hidden="true"></i>
                                                <small>By: {{ $blog->author }}</small>
                                            </div>
                                            <div>
                                                <i class="far fa-calendar-alt me-2" aria-hidden="true"></i>
                                                <small> {{ DateFormatter::date($blog->publication_date) }} </small>
                                            </div>
                                        </div>
                                        <a href="javascript:;">
                                            <h5> {{ $blog->title }} </h5>
                                        </a>
                                        <p class="mb-4 text-sm">
                                            {!! nl2br(substr($blog->content, 0, 100)) !!}...
                                        </p>
                                        <div class="d-flex gap-2 align-items-center">
                                            <a href="{{ route('admin.blogs.show', $blog->id) }}"
                                                class="btn btn-outline-primary btn-sm mb-0">more details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card h-100 card-plain border">
                                <div class="card-body d-flex flex-column justify-content-center text-center">
                                    <a href="{{ route('admin.blogs.index') }}">
                                        <h5 class=" text-secondary"> VIEW ALL </h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
