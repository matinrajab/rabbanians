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
                    <h5>Contact</h5>
                </div>
                <div class="card-body pt-4 p-3">
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Address</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $contact->address }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Phone</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">{{ $contact->phone_number }}</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Email</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">{{ $contact->email }}</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Instagram</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">{{ $contact->instagram }}</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.contact.edit') }}" class="btn bg-gradient-dark btn-md mt-4 mb-4">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
