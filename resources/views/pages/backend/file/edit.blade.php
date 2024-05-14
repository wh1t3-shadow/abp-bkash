@extends('pages.layouts.master')


@section('title', 'File Upload')


@section('content')
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('pages.backend.nav')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">File Upload - Edit</h4>
                                <p class="card-description">

                                </p>
                                <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{ url('/file-up/edit/update', $data['id']) }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="folderName">File Name</label>
                                        <input type="text" class="form-control" id="folderName" name="folderName"
                                            placeholder="Foldername" value="{{ $data->folder_name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="fileup">File</label>
                                        <input type="file" name="fileup"
                                            id="fileup" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 grid-margin stretch-card">

                        </div>
                    </div>

                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>

@endsection

@push('js')
@endpush
