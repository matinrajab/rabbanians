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
                    <h6>Edit Person</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="{{ route('admin.team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="name" class="form-control-label">Name</label>
                                <input class="form-control" type="text" placeholder="Name" id="name" required
                                    name="name" value="{{ $team->name }}" onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="position" class="form-control-label">Position</label>
                                <input class="form-control" type="text" placeholder="Position" id="position" required
                                    name="position" value="{{ $team->position }}" onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="image" class="form-control-label">Image (max: 2 mb)</label>
                                <div class="col-md-6 d-block shadow-xl border-radius-xl mb-4">
                                    <img src="{{ asset('files') }}/team/{{ $team->image }}" alt="img-blur-shadow"
                                        class="img-fluid shadow border-radius-xl">
                                </div>
                                <div class="col-md-7">
                                    <input class="form-control" type="file" id="image" name="image">
                                    <p class="text-gradient text-dark mb-2 text-sm">Abaikan jika tidak ingin mengubah gambar
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">save change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
