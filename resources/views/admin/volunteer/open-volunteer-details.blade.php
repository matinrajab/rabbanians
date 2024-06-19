@php
    use App\Helpers\DateFormatter;
    $admin_open_volunteer_page = true;
    $page_name = 'Rabbanians Project';
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h5>Rabbanians Project Details</h5>
                </div>
                <div class="card-body pt-4 p-3">
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Program Name</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $openVolunteer->program_name }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Category</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">{{ $openVolunteer->volunteerType->name }}</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Description</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">{!! nl2br($openVolunteer->description) !!}</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Location</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">{{ $openVolunteer->location }}</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Start Date</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">
                                {{ DateFormatter::date($openVolunteer->start_date) }}</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>End Date</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">
                                {{ DateFormatter::date($openVolunteer->end_date) }}</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Requirement</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">{!! nl2br($openVolunteer->requirements) !!}</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Application Proccess</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">{!! nl2br($openVolunteer->application_process) !!}</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Application Deadline</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">
                                {{ DateFormatter::date($openVolunteer->application_deadline) }}</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Image</h6>
                            <div class="col-md-7 d-block shadow-xl border-radius-xl mb-4">
                                <img src="{{ asset('files') }}/volunteer/{{ $openVolunteer->image }}" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-xl">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-end">
                        <a href="{{ route('admin.open-volunteer.index') }}"
                            class="btn btn-outline-primary btn-md mt-4 mb-4">back</a>
                        <a href="{{ route('admin.open-volunteer.edit', $openVolunteer->id) }}"
                            class="btn bg-gradient-dark btn-md mt-4 mb-4">Edit</a>
                        <a href="{{ route('admin.open-volunteer.destroy', $openVolunteer->id) }}"
                            class="btn bg-gradient-danger btn-md mt-4 mb-4">delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
