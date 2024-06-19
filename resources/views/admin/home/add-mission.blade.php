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
                    <h6>Add Mission</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="{{ route('admin.mission.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="mission" class="form-control-label">Mission</label>
                                <textarea class="form-control" id="mission" rows="3" placeholder="Mission" name="content" required></textarea>
                                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-2">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
