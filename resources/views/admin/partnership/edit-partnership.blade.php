@php
    $admin_partnership_page = true;
    $page_name = 'Partnership';
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h6>Edit {{ $partnership->type }}</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="{{ route('admin.partnership.update', $partnership->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" rows="5" placeholder="Description" required name="description"> {{ $partnership->description }} </textarea>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="benefits">Benefits</label>
                                <textarea class="form-control" id="benefits" rows="5" placeholder="Benefits" required name="benefits"> {{ $partnership->benefits }} </textarea>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="contact_person" class="form-control-label">Phone (+62)</label>
                                <input class="form-control" type="text" placeholder="Phone" id="contact_person" required
                                    name="contact_person" value="{{ $partnership->contact_person }}" onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="contact_email" class="form-control-label">Email</label>
                                <input class="form-control" type="text" placeholder="Phone" id="contact_email" required
                                    name="contact_email" value="{{ $partnership->contact_email }}" onfocus="focused(this)"
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

@push('scriptjs')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#benefits'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
