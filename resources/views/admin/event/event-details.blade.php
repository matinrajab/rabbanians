@php
    $admin_event_page = true;
    $page_name = 'Event';
    use App\Helpers\DateFormatter;
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h5>Event Details</h5>
                </div>
                <div class="card-body pt-4 p-3">
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Event Name</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $event->name }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Description</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">{!! nl2br($event->description) !!}</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Location</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $event->location }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Start Date</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ DateFormatter::date($event->start_date) }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>End Date</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ DateFormatter::date($event->end_date) }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Image</h6>
                            <div class="col-md-7 d-block shadow-xl border-radius-xl mb-4">
                                <img src="{{ asset('files') }}/event/{{ $event->image }}" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-xl">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Guide Book Link</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $event->guide_book_link }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Fully Funded Link</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $event->fully_funded_link }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Partial Funded Link</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $event->partial_funded_link }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Self Funded Link</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $event->self_funded_link }} </p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-end">
                        <a href="{{ route('admin.events.index') }}"
                            class="btn btn-outline-primary btn-md mt-4 mb-4">back</a>
                        <a href="{{ route('admin.event.edit', $event->id) }}"
                            class="btn bg-gradient-dark btn-md mt-4 mb-4">Edit</a>
                        <a href="{{ route('admin.event.destroy', $event->id) }}"
                            class="btn bg-gradient-danger btn-md mt-4 mb-4">delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 mt-4">
        <div class="card mb-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-4">Gallery</h6>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    @foreach ($event->galleries->sortByDesc('id') as $gallery)
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="{{ asset('files') }}/gallery/{{ $gallery->image }}"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <a href="javascript:;">
                                        <h5> {{ $gallery->title }} </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        {{ $gallery->caption }}
                                    </p>
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="{{ route('admin.gallery.edit', $gallery->id) }}"
                                            class="btn btn-outline-primary btn-sm mb-0">Edit</a>
                                        <a href="{{ route('admin.gallery.destroy', $gallery->id) }}"
                                            class="btn bg-gradient-danger btn-sm mb-0">delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card h-100 card-plain border">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <a href="{{ route('admin.gallery.create', $event->id) }}">
                                    <i class="fa fa-plus text-secondary mb-3"></i>
                                    <h5 class=" text-secondary"> New Photo </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
