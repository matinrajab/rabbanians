@php
    $admin_event_page = true;
    $page_name = 'Event';
    use App\Helpers\DateFormatter;
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="col-12 mt-4">
        <div class="card mb-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-4">Event</h6>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    @foreach ($events as $event)
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="{{ asset('files') }}/event/{{ $event->image }}" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-xl">
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
                                            <small> {{ DateFormatter::startToEnd($event->start_date, $event->end_date) }}
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
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card h-100 card-plain border">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <a href="{{ route('admin.event.create') }}">
                                    <i class="fa fa-plus text-secondary mb-3"></i>
                                    <h5 class=" text-secondary"> New Event </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
