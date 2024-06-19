@php
    $admin_home_page = true;
    $page_name = 'Homepage';
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h6>Edit Homepage</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="{{ route('admin.homepage.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="about_us">About Us</label>
                                <textarea class="form-control" id="about_us" rows="10" placeholder="About Us" name="about_us" required>{{ $home->about_us }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="vision">Vision</label>
                                <textarea class="form-control" id="vision" rows="3" placeholder="Vision" name="vision" required>{{ $home->vision }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="mission">Mission</label>
                                @foreach ($missions as $mission)
                                    <div
                                        class="list-group-item border-0 d-flex mb-2 pt-2 px-2 bg-gray-100 border-radius-lg">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-3 text-sm p-2">{{ $mission->content }}</h6>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <a class="btn btn-link text-danger text-gradient mb-0"
                                                href="{{ route('admin.mission.destroy', $mission->id) }}"><i
                                                    class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>
                                            <a class="btn btn-link text-dark mb-0"
                                                href="{{ route('admin.mission.edit', $mission->id) }}"><i
                                                    class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="d-flex">
                                    <a href="{{ route('admin.mission.create') }}"
                                        class="btn bg-gradient-dark btn-md mt-2 mb-2">Add
                                        Mission</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="years_count" class="form-control-label">Years Count</label>
                                <input class="form-control" type="number" value="{{ $home->years_count }}"
                                    placeholder="Years Count" id="years_count" name="years_count" required
                                    onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="volunteers_count" class="form-control-label">Volunteers Count</label>
                                <input class="form-control" type="number" value="{{ $home->volunteers_count }}"
                                    placeholder="Volunteers Count" id="volunteers_count" name="volunteers_count" required
                                    onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="registrants_count" class="form-control-label">Registrants Count</label>
                                <input class="form-control" type="number" value="{{ $home->registrants_count }}"
                                    placeholder="Registrants Count" id="registrants_count" name="registrants_count" required
                                    onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="destinations_count" class="form-control-label">Destinations Count</label>
                                <input class="form-control" type="number" value="{{ $home->destinations_count }}"
                                    placeholder="Destinations Count" id="destinations_count" name="destinations_count"
                                    required onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image_1" class="form-control-label">Vision Mission Image (max: 2 mb)</label>
                            <div class="col-md-6 d-block shadow-xl border-radius-xl mb-4">
                                <img src="{{ asset('files') }}/homepage/{{ $home->image_1 }}" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-xl">
                            </div>
                            <div class="col-md-7">
                                <input class="form-control" type="file" id="image_1" name="image_1">
                                <p class="text-gradient text-dark mb-2 text-sm">Abaikan jika tidak ingin mengubah gambar
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image_2" class="form-control-label">About Us Image (max: 2 mb)</label>
                            <div class="col-md-6 d-block shadow-xl border-radius-xl mb-4">
                                <img src="{{ asset('files') }}/homepage/{{ $home->image_2 }}" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-xl">
                            </div>
                            <div class="col-md-7">
                                <input class="form-control" type="file" id="image_2" name="image_2">
                                <p class="text-gradient text-dark mb-2 text-sm">Abaikan jika tidak ingin mengubah gambar
                                </p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Save Changes</button>
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
            .create(document.querySelector('#about_us'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
