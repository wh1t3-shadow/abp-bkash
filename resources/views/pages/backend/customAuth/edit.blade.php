@extends('pages.layouts.master')


@section('title', 'Course Batch - Edit')


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
                                <h4 class="card-title">User Credential Edit - Form</h4>
                                <p class="card-description">

                                </p>
                                <form class="forms-sample" enctype="multipart/form-data" method="POST"
                                    action="/custom-auth/edit/update/{{ $userCredential['id'] }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="userName">Email</label>
                                        <input type="text" name="userName" id="userName" class="form-control" value="{{ $userCredential->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="userEmail">Email</label>
                                        <input type="email" name="userEmail" id="userEmail" class="form-control" value="{{ $userCredential->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="userPassword">Password</label>
                                        <input type="password" name="userPassword" id="userPassword" class="form-control">
                                    </div>

                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 grid-margin stretch-card">
                        </div>
                    </div>
                    {{-- <div>
                        @if ($userId == 1)
                            <table class="table table-striped">Student-Admission Table
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Student Name</th>
                                        <th scope="col">Student Email</th>
                                        <th scope="col">Student ID</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admissionPendingData as $key => $admission)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $admission->student_name }}</td>
                                            <td>{{ $admission->student_email }}</td>
                                            <td>{{ $admission->student_id }}</td>
                                            <td>
                                                <a href="{{ url('/student-admit/accept', $admission['id']) }}"
                                                    class="edit btn btn-success" type="button" style="color: #fff"
                                                    data-id="{{ $admission->id }}">Accept</a>
                                                <a href="{{ url('/student-admit/edit/view', $admission['id']) }}"
                                                    class="edit btn btn-primary" type="button" style="color: #fff"
                                                    data-id="{{ $admission->id }}">Edit</a>
                                                <a href="{{ url('/student-admit/delete', $admission['id']) }}"
                                                    class="delete btn btn-danger" type="button" style="color: #fff"
                                                    data-id="{{ $admission->id }}"
                                                    onclick="return confirm('Are you sure?')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div> --}}
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
