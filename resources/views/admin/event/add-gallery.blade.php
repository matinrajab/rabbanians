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
                    <h6>Add Photo</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="{{ route('admin.gallery.store', $eventId) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="title" class="form-control-label">Title</label>
                                <input class="form-control" type="text" placeholder="Title" id="title" required
                                    name="title" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="caption" class="form-control-label">Caption</label>
                                <input class="form-control" type="text" placeholder="Caption" id="caption" required
                                    name="caption" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="image" class="form-control-label">Image (max: 2 mb)</label>
                                <input class="form-control" type="file" id="image" required name="image">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
