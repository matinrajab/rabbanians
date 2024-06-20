@php
    $admin_header_page = true;
    $page_name = 'Header';
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h5>Header</h5>
                </div>
                <div class="card-body pt-4 p-3">
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>CTA Label</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $header->cta_label }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>CTA URL</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">{{ $header->cta_url }}</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.header.edit') }}" class="btn bg-gradient-dark btn-md mt-4 mb-4">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
