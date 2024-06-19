@php
    $admin_contact_page = true;
    $page_name = 'Contact';
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h6>Edit Contact</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="{{ route('admin.contact.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" id="address" rows="3" placeholder="Address" required name="address">{{ $contact->address }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="phone_number" class="form-control-label">Phone (+62)</label>
                                <input class="form-control" type="text" placeholder="Phone" id="phone_number" required
                                    value="{{ $contact->phone_number }}" name="phone_number" onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="email" class="form-control-label">Email</label>
                                <input class="form-control" type="email" placeholder="Email" id="email" required
                                    value="{{ $contact->email }}" name="email" onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="instagram" class="form-control-label">Instagram</label>
                                <input class="form-control" type="text" placeholder="Instagram" id="instagram" required
                                    value="{{ $contact->instagram }}" name="instagram" onfocus="focused(this)"
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
