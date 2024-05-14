@extends('pages.layouts.master')


@section('title', 'Course Batch')


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
                                <h4 class="card-title">Course Batch</h4>
                                <p class="card-description">

                                </p>
                                <form class="forms-sample" enctype="multipart/form-data" method="POST"
                                    action="/course-batch/edit/update/{{ $courseBatch['id'] }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="courseName">Course Name</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" aria-label="Default select example"
                                                style="color: black" name="courseName" id="courseName">
                                                <option selected value="">Select Course Name</option>
                                                @foreach ($courseName as $course)
                                                    <option value="{{ $course->id }}"
                                                        @if ($course->id == $courseBatch->course_name_id) selected @endif>
                                                        {{ $course->course_title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="courseBatch">Batch Name</label>
                                        <input type="text" name="courseBatch" id="courseBatch" class="form-control" value="{{ $courseBatch->course_batch }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="courseAvailSeat">Available Seat</label>
                                        <input type="text" name="courseAvailSeat" id="courseAvailSeat"
                                            class="form-control" value="{{ $courseBatch->course_avail_seat }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="courseNumClass">Number of Class</label>
                                        <input type="text" class="form-control" id="courseNumClass" name="courseNumClass"
                                            placeholder="courseDuration" value="{{ $courseBatch->course_num_class }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="courseFee">Course Fees</label>
                                        <input type="text" class="form-control" id="courseFee" name="courseFee"
                                            placeholder="courseFee" value="{{ $courseBatch->course_fee }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="courseStart">Course Start</label>
                                        <input type="date" class="form-control" id="courseStart" name="courseStart"
                                            placeholder="courseStart" value="{{ $courseBatch->course_batch_start }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="courseEnd">Course End</label>
                                        <input type="date" class="form-control" id="courseEnd" name="courseEnd"
                                            placeholder="courseEnd" value="{{ $courseBatch->course_batch_end }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="courseLastDateRegist">Last Date of Registration</label>
                                        <input type="date" name="courseLastDateRegist" id="courseLastDateRegist"
                                            class="form-control" value="{{ $courseBatch->course_last_date_regist }}">
                                    </div>

                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 grid-margin stretch-card">
                        </div>
                    </div>
                    {{-- <div>
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
