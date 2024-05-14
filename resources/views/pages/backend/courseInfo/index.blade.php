@extends('pages.layouts.master')


@section('title', 'Course Info')


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
                                <h4 class="card-title">Course Info</h4>
                                <p class="card-description">

                                </p>
                                <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{ url('/course-info/create') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="courseTitle">Course Title</label>
                                        <input type="text" class="form-control" id="courseTitle" name="courseTitle"
                                            placeholder="courseTitle">
                                    </div>
                                <div class="form-group">
                                    <label for="courseTitle">Course Category</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" aria-label="Default select example" style="color: black"
                                            name="courseCategory" id="courseCategory">
                                            <option selected value="">Select Course Category</option>
                                            @foreach ($courseCateg as $categ)
                                                <option value="{{ $categ->id }}">{{ $categ->course_category }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="courseImage">Course Image</label>
                                    <input type="file" name="courseImage" id="courseImage" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="courseDocument">Course Document</label>
                                    <input type="file" name="courseDocument" id="courseDocument" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="courseDuration">Course Duration</label>
                                    <input type="text" class="form-control" id="courseDuration" name="courseDuration"
                                        placeholder="courseDuration">
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3" for="courseDescription">Course Description<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <textarea type="text" class="ckeditor form-control" id="courseDescription" placeholder="Write Your Post"
                                            name="courseDescription" rows="17" cols="70"></textarea>
                                    </div>
                                </div>
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 grid-margin stretch-card">
                        </div>
                    </div>
                    <div>
                        <table class="table table-striped">Course-Category Table
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Course Title</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($courseInfo as $key => $course)
                              <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $course->course_title }}</td>
                                <td><a href="{{ url('/course-info/edit/view', $course['id']) }}"
                                    class="edit btn btn-primary" type="button"
                                    data-id="{{ $course->id }}">Edit</a>
                                    <a href="{{ url('/course-info/delete', $course['id']) }}" class="delete btn btn-danger"
                                    type="button" data-id="{{ $course->id }}" onclick="return confirm('Are you sure?')">Delete</a>
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
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
@push('js')
@endpush
