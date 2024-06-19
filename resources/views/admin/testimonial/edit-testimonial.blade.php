@php
    $admin_testimonial_page = true;
    $page_name = 'Testimonial';
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h6>Edit Testimonial</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="{{ route('admin.testimonial.update', $testimonial->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="name" class="form-control-label">Name</label>
                                <input class="form-control" type="text" placeholder="Name" id="name" required
                                    value="{{ $testimonial->name }}" name="name" onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="title" class="form-control-label">Title</label>
                                <input class="form-control" type="text" placeholder="Title" id="title" required
                                    value="{{ $testimonial->title }}" name="title" onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" id="content" rows="10" placeholder="Content" required name="content">{{ $testimonial->content }}</textarea>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="profile_picture" class="form-control-label">Profile Picture (max: 2 mb, ratio
                                    1:1)</label>
                                <div class="col-md-6 d-block shadow-xl border-radius-xl mb-4">
                                    <img src="{{ asset('files') }}/testimonial/{{ $testimonial->profile_picture }}"
                                        alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                </div>
                                <div class="col-md-7">
                                    <input class="form-control" type="file" id="profile_picture" name="profile_picture">
                                    <p class="text-gradient text-dark mb-2 text-sm">Abaikan jika tidak ingin mengubah gambar
                                    </p>
                                </div>
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
