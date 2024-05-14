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
                                <h4 class="card-title">Course Content</h4>
                                <p class="card-description">

                                </p>
                                <form class="forms-sample" enctype="multipart/form-data" method="POST"
                                    action="{{ url('/course-content/create') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="courseContentTitle">Course Content Title</label>
                                        <input type="text" class="form-control" id="courseContentTitle"
                                            name="courseContentTitle" placeholder="courseContentTitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="courseTitle">Course</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" aria-label="Default select example"
                                                style="color: black" name="courseTitle" id="courseTitle">
                                                <option selected value="">Select Course</option>
                                                @foreach ($courseInfo as $course)
                                                    <option value="{{ $course->id }}">{{ $course->course_title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="courseContentLink">Course Content Link</label>
                                        <input type="url" class="form-control" id="courseContentLink"
                                            name="courseContentLink" placeholder="courseContentLink">
                                    </div>

                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 grid-margin stretch-card">
                        </div>
                    </div>
                    <div>
                        <table class="table table-striped">Course-Content Table
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Course Content Title</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courseContent as $key => $content)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $content->course_content_title }}</td>
                                        <td><a href="{{ url('/course-content/edit/view', $content['id']) }}"
                                                class="edit btn btn-primary" type="button"
                                                data-id="{{ $content->id }}">Edit</a>
                                            <a href="{{ url('/course-content/delete', $content['id']) }}"
                                                class="delete btn btn-danger" type="button" data-id="{{ $content->id }}"
                                                onclick="return confirm('Are you sure?')">Delete</a>
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
