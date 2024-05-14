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
                                <h4 class="card-title">File Upload</h4>
                                <p class="card-description">

                                </p>
                                <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{ url('/file-up/create') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="folderName">File Name</label>
                                        <input type="text" class="form-control" id="folderName" name="folderName"
                                            placeholder="Foldername">
                                    </div>
                                    <div class="form-group">
                                        <label for="fileup">File</label>
                                        <input type="file" name="fileup"
                                            id="fileup" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 grid-margin stretch-card">

                        </div>
                    </div>
                    <div>
                        <table class="table table-striped">File Table
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">File Name</th>
                                <th scope="col">File</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $d)
                              <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $d->folder_name }}</td>
                                <td><a href="{{ asset($d->file) }}" target="_blank">{{ $d->folder_name }}</a></td>
                                <td><a href="{{ url('/file-up/edit/view', $d['id']) }}"
                                    class="edit btn btn-primary" type="button"
                                    data-id="{{ $d->id }}">Edit</a>
                                    <a href="{{ url('/file-up/delete', $d['id']) }}" class="delete btn btn-danger"
                                    type="button" data-id="{{ $d->id }}" onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
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
