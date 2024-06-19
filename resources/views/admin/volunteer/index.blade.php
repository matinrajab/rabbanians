@php
    use App\Helpers\DateFormatter;
    $admin_open_volunteer_page = true;
    $page_name = 'Rabbanians Project';
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="col-12 mt-4">
        <div class="card mb-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-4">Rabbanians Project</h6>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    @foreach ($openVolunteers as $item)
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="{{ asset('files') }}/volunteer/{{ $item->image }}" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <p class="text-gradient text-dark mb-2 text-sm">Category :
                                        {{ $item->volunteerType->name }}
                                    </p>
                                    <div class="d-flex align-items-center gap-4">
                                        <div>
                                            <i class="fas fa-map-marker-alt me-2" aria-hidden="true"></i>
                                            <small> {{ $item->location }} </small>
                                        </div>
                                        <div>
                                            <i class="far fa-calendar-alt me-2" aria-hidden="true"></i>
                                            <small> {{ DateFormatter::startToEnd($item->start_date, $item->end_date) }}
                                            </small>
                                        </div>
                                    </div>
                                    <a href="javascript:;">
                                        <h5> {{ $item->program_name }} </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        {!! nl2br(substr($item->description, 0, 100)) !!}...
                                    </p>
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="{{ route('admin.open-volunteer.show', $item->id) }}"
                                            class="btn btn-outline-primary btn-sm mb-0">more
                                            details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card h-100 card-plain border">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <a href="{{ route('admin.open-volunteer.create') }}">
                                    <i class="fa fa-plus text-secondary mb-3"></i>
                                    <h5 class=" text-secondary"> New Rabbanians Project </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
