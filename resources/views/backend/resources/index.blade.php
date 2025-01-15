@extends('backend.layouts.app')

@section('content')
<style>
    .modal-content {
        border-radius: 15px;
        padding: 20px;
    }

    .modal-header {
        border-bottom: none;
        padding: 0;
    }

    .modal-footer {
        border-top: none;
        padding: 0;
    }

    .modal-body {
        padding: 15px 20px;
    }

    .modal-dialog {
        max-width: 80%; /* Adjust the modal width */
        margin: 20px auto; /* Center the modal */
    }

    .description-short {
        max-width: 300px;
        display: inline-block;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* Ensure button visibility */
    .read-more {
        display: inline-block;
        font-size: 14px;
        text-decoration: underline;
        background: none;
        border: none;
        padding: 0;
        color: #007bff;
        margin-left: 5px;
    }
</style>

<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>All Resources</h3>
            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                <li><a href="{{ route('admin.dashboard') }}"><div class="text-tiny">Dashboard</div></a></li>
                <li><i class="icon-chevron-right"></i></li>
                <li><div class="text-tiny">All Resources</div></li>
            </ul>
        </div>

        <!-- Success and Error Messages -->
        @if (session('success'))
            <div class="alert alert-success" style="font-size: 20px">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger" style="font-size: 20px">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="wg-box">
            <div class="flex items-center justify-between gap10 flex-wrap">
                <div class="wg-filter flex-grow">
                    <form class="form-search">
                        <fieldset class="name">
                            <input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value="" aria-required="true" required=""/>
                        </fieldset>
                        <div class="button-submit">
                            <button class="" type="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
                <a class="tf-button style-1 w208" href=" {{ route('resources.create') }}">
                    <i class="icon-plus"></i>Add New</a>
            </div>

            <div class="table-responsive">
                <table id="resourcesTable" class="table table-striped table-bordered w-100">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($resources->count() > 0)
                            @foreach ($resources as $resource)
                                <tr>
                                    <td>{{ $resource->id }}</td>
                                    <td>{{ $resource->category->name ?? 'N/A' }}</td> <!-- Using the relationship -->
                                    <td>
                                        @if($resource->images)
                                            <img src="{{ asset('uploads/backend/resources/' . $resource->images) }}" alt="Resource Image" width="100">
                                        @else
                                            <span>No image available</span>
                                        @endif
                                    </td>
                                    <td style="max-width: 400px;"> <!-- Increase width here -->
                                        <!-- Short description (up to 10 words) -->
                                        <span class="description-short">
                                            {!! $resource->short_description ?? mb_strimwidth(html_entity_decode($resource->description), 0, 19, '...') !!}
                                        </span>
                                        <!-- Read More button for longer descriptions -->
                                        @if(str_word_count(strip_tags($resource->description)) > 19)
                                        
                                            <button class="btn btn-link read-more" data-id="{{ $resource->id }}" data-description="{{ html_entity_decode($resource->description) }}">Read More</button>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="list-icon-function">
                                            <button type="button" class="show" data-id="{{ $resource->id }}">
                                                <div class="item eye">
                                                    <i class="icon-eye"></i>
                                                </div>
                                            </button>
                                            <a href="{{ route('resources-category.edit', $resource->id) }}">
                                                <div class="item edit">
                                                    <i class="icon-edit-3"></i>
                                                </div>
                                            </a>
                                            <button type="button" class="delete" data-id="{{ $resource->id }}">
                                                <div class="item text-danger">
                                                    <i class="icon-trash-2"></i>
                                                </div>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center">No data found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>

                <!-- Pagination links -->
                {{ $resources->links() }}
            </div>
        </div>
    </div>
</div>

<!-- Modal Structure -->
<div class="modal fade" id="resourceModal" tabindex="-1" aria-labelledby="resourceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-3 shadow-lg">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title text-white" id="resourceModalLabel">Resource Details</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4" style="max-height: 70vh; overflow-y: auto;">
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold mb-5">Resource Name:</div>
                    <div class="col-md-8" id="modal-resource-name"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Full Description:</div>
                    <div class="col-md-8" id="modal-resource-description"></div>
                </div>
            </div>
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Handle Read More button click
            $(document).on('click', '.read-more', function() {
                var resourceId = $(this).data('id');
                var fullDescription = $(this).data('description');

                // Set the full description in the modal
                $('#modal-resource-name').text("Resource ID: " + resourceId);
                $('#modal-resource-description').html(fullDescription);

                // Show the modal
                $('#resourceModal').modal('show');
            });
        });
    </script>
@endpush
