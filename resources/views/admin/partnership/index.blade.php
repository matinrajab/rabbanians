@php
    $admin_partnership_page = true;
    $page_name = 'Partnership';
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            @foreach ($partnership as $item)
                <div class="card mb-4">
                    <div class="card-header pb-0 px-3">
                        <h5>{{ $item->type }}</h5>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <div class="col-md-8">
                            <div class="form-group">
                                <h6>Description</h6>
                                <p class="text-gradient text-dark mb-2 text-sm"> {!! nl2br($item->description) !!} </p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <h6>Benefits</h6>
                                <p class="text-gradient text-dark mb-2 text-sm">{!! nl2br($item->benefits) !!}</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <h6>Phone</h6>
                                <p class="text-gradient text-dark mb-2 text-sm"> {{ $item->contact_person }} </p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <h6>Email</h6>
                                <p class="text-gradient text-dark mb-2 text-sm"> {{ $item->contact_email }} </p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="/admin/partnership/edit/{{ $item->id }}"
                                class="btn bg-gradient-dark btn-md mt-4 mb-4">Edit {{ $item->type }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="col-12 mt-4">
        <div class="card mb-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-4">Partner</h6>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    @foreach ($partners as $partner)
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="{{ asset('files') }}/partner/{{ $partner->image }}" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <a href="javascript:;">
                                        <h5 class="mb-4"> {{ $partner->name }} </h5>
                                    </a>
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="{{ route('admin.partner.edit', $partner->id) }}"
                                            class="btn btn-outline-primary btn-sm mb-0">Edit</a>
                                        <a href="{{ route('admin.partner.destroy', $partner->id) }}"
                                            class="btn bg-gradient-danger btn-sm mb-0">delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card h-100 card-plain border">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <a href="{{ route('admin.partner.create') }}">
                                    <i class="fa fa-plus text-secondary mb-3"></i>
                                    <h5 class=" text-secondary"> New Partner </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 mt-4">
        <div class="card mb-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-4">Sponsor</h6>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    @foreach ($sponsors as $sponsor)
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="{{ asset('files') }}/sponsor/{{ $sponsor->image }}"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <a href="javascript:;">
                                        <h5 class="mb-4"> {{ $sponsor->name }} </h5>
                                    </a>
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="{{ route('admin.sponsor.edit', $sponsor->id) }}"
                                            class="btn btn-outline-primary btn-sm mb-0">Edit</a>
                                        <a href="{{ route('admin.sponsor.destroy', $sponsor->id) }}"
                                            class="btn bg-gradient-danger btn-sm mb-0">delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card h-100 card-plain border">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <a href="{{ route('admin.sponsor.create') }}">
                                    <i class="fa fa-plus text-secondary mb-3"></i>
                                    <h5 class=" text-secondary"> New Sponsor </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
