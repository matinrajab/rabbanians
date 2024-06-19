@php
    $admin_about_us_page = true;
    $page_name = 'About Us';
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h6>Add Person</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="name" class="form-control-label">Name</label>
                                <input class="form-control" type="text" placeholder="Name" id="name" required
                                    name="name" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="position" class="form-control-label">Position</label>
                                <input class="form-control" type="text" placeholder="Position" id="position" required
                                    name="position" onfocus="focused(this)" onfocusout="defocused(this)">
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
