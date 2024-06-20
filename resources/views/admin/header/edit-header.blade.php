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
                    <h6>Edit Header</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="{{ route('admin.header.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="cta_label">CTA Label</label>
                                <input class="form-control" type="text" placeholder="cta_label" id="cta_label" required
                                    value="{{ $header->cta_label }}" name="cta_label" onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="cta_url" class="form-control-label">CTA URL</label>
                                <input class="form-control" type="text" placeholder="cta_url" id="cta_url" required
                                    value="{{ $header->cta_url }}" name="cta_url" onfocus="focused(this)"
                                    onfocusout="defocused(this)">
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
