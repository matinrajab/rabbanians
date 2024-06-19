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
                    <h6>Edit Company</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="{{ route('admin.about-us.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="about_us">About Us</label>
                                <textarea class="form-control" id="about_us" rows="10" placeholder="About Us" required name="about_us">{{ $company->about_us }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image" class="form-control-label">Image (max: 2 mb)</label>
                            <div class="col-md-6 d-block shadow-xl border-radius-xl mb-4">
                                <img src="{{ asset('files') }}/about_us/{{ $company->image }}" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-xl">
                            </div>
                            <div class="col-md-7">
                                <input class="form-control" type="file" id="image" name="image">
                                <p class="text-gradient text-dark mb-2 text-sm">Abaikan jika tidak ingin mengubah gambar
                                </p>
                            </div>
                        </div>
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-2">Save changes</button>
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
