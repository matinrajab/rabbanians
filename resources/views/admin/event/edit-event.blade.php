@php
    $admin_event_page = true;
    $page_name = 'Event';
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h6>Edit Event</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="{{ route('admin.event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="name" class="form-control-label">Event Name</label>
                                <input class="form-control" type="text" placeholder="Event Name" id="name" required
                                    name="name" value="{{ $event->name }}" onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" rows="5" placeholder="Description" required name="description">{{ $event->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="location" class="form-control-label">Location</label>
                                <input class="form-control" type="text" placeholder="Location" id="location" required
                                    name="location" value="{{ $event->location }}" onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="start_date" class="form-control-label">Start Date</label>
                                <input class="form-control" type="date" id="start_date" required name="start_date"
                                    value="{{ $event->start_date }}">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="end_date" class="form-control-label">End Date</label>
                                <input class="form-control" type="date" id="end_date" required name="end_date"
                                    value="{{ $event->end_date }}">
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="image" class="form-control-label">Image (max: 2 mb)</label>
                                <div class="col-md-6 d-block shadow-xl border-radius-xl mb-4">
                                    <img src="{{ asset('files') }}/event/{{ $event->image }}" alt="img-blur-shadow"
                                        class="img-fluid shadow border-radius-xl">
                                </div>
                                <div class="col-md-7">
                                    <input class="form-control" type="file" id="image" name="image">
                                    <p class="text-gradient text-dark mb-2 text-sm">Abaikan jika tidak ingin mengubah gambar
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="guide_book_link" class="form-control-label">Guide Book Link</label>
                                <input class="form-control" type="text" placeholder="Guide Book Link"
                                    id="guide_book_link" required name="guide_book_link"
                                    value="{{ $event->guide_book_link }}" onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="fully_funded_link" class="form-control-label">Fully Funded
                                    Link</label>
                                <input class="form-control" type="text" placeholder="Fully Funded Link"
                                    id="fully_funded_link" required name="fully_funded_link"
                                    value="{{ $event->fully_funded_link }}" onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="partial_funded_link" class="form-control-label">Partial Funded
                                    Link</label>
                                <input class="form-control" type="text" placeholder="Partial Funded Link"
                                    id="partial_funded_link" required name="partial_funded_link"
                                    value="{{ $event->partial_funded_link }}" onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="self_funded_link" class="form-control-label">Self Funded Link</label>
                                <input class="form-control" type="text" placeholder="Self Funded Link"
                                    id="self_funded_link" required name="self_funded_link"
                                    value="{{ $event->self_funded_link }}" onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scriptjs')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
