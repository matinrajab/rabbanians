@php
    $admin_slide_banner_page = true;
    $page_name = 'Slide Banner';
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h5>Slide Banner Details</h5>
                </div>
                <div class="card-body pt-4 p-3">
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Title</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $banner->title }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Subtitle</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $banner->subtitle }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>CTA Label</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $banner->cta_label }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>CTA URL</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $banner->cta_url }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Image</h6>
                            <div class="col-md-7 d-block shadow-xl border-radius-xl mb-4">
                                <img src="{{ asset('files') }}/slide_banner/{{ $banner->image }}" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-xl">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-end">
                        <a href="{{ route('admin.slide-banner.index') }}"
                            class="btn btn-outline-primary btn-md mt-4 mb-4">back</a>
                        <a href="{{ route('admin.slide-banner.edit', $banner->id) }}"
                            class="btn bg-gradient-dark btn-md mt-4 mb-4">Edit</a>
                        <a href="{{ route('admin.slide-banner.destroy', $banner->id) }}"
                            class="btn bg-gradient-danger btn-md mt-4 mb-4">delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
