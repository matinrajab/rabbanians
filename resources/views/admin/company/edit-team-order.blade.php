@php
    $admin_about_us_page = true;
    $page_name = 'About Us';
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="col-12 mt-4">
        <div class="card mb-4">
            <div class="card-header pb-0 p-3">
                <div class="row mb-4">
                    <div class="col-6 d-flex align-items-center">
                        <h6 class="mb-0">Team</h6>
                    </div>
                </div>
            </div>
            <div class="card-body p-3">
                <div class="row" id="sortable">
                    @foreach ($teams as $team)
                        <div class="col-xl-3 col-md-6 mb-4" data-id="{{ $team->id }}">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="{{ asset('files') }}/team/{{ $team->image }}" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <a href="javascript:;">
                                        <h5> {{ $team->name }} </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        {{ $team->position }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.about-us.show') }}" class="btn btn-outline-primary btn-md mt-4 mb-4">back</a>
                    <button id="saveOrder" class="btn bg-gradient-dark btn-md mt-4 mb-4">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scriptjs')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sortable").sortable();

            $("#saveOrder").click(function() {
                var items = [];
                $("#sortable .col-xl-3").each(function() {
                    items.push($(this).data("id"));
                });

                console.log("Order data:", items); // Tambahkan ini untuk debug

                $.ajax({
                    url: '{{ route('admin.team.updateOrder') }}',
                    method: 'POST',
                    data: {
                        items: items,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log("Response:", response); // Tambahkan ini untuk debug
                        if (response.status == "success") {
                            alert("Order updated successfully!");
                            redirect(route('admin.about-us.show'));
                        } else {
                            alert("Failed to update order.");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX error:", xhr, status,
                            error); // Tambahkan ini untuk debug
                        alert("Error occurred while updating order.");
                    }
                });
            });
        });
    </script>
@endpush
