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
                    <h6>Add Testimonial</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="{{ route('admin.testimonial.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="name" class="form-control-label">Name</label>
                                <input class="form-control" type="text" placeholder="name" id="name" required
                                    name="name" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="title" class="form-control-label">Title</label>
                                <input class="form-control" type="text" placeholder="title" id="title" required
                                    name="title" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" id="content" rows="10" placeholder="Content" required name="content"></textarea>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="profile_picture" class="form-control-label">Profile Picture (max: 2 mb, ratio
                                    1:1)</label>
                                <input class="form-control" type="file" id="profile_picture" required
                                    name="profile_picture">
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
