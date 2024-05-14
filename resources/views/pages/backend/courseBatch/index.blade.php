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
                                <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{ url('/course-batch/create') }}">
                                    @csrf
                                <div class="form-group">
                                    <label for="courseName">Course Name</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" aria-label="Default select example" style="color: black"
                                            name="courseName" id="courseName">
                                            <option selected value="">Select Course Name</option>
                                            @foreach ($courseName as $course)
                                                <option value="{{ $course->id }}">{{ $course->course_title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="courseBatch">Batch Name</label>
                                    <input type="text" name="courseBatch" id="courseBatch" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="courseAvailSeat">Available Seat</label>
                                    <input type="text" name="courseAvailSeat" id="courseAvailSeat" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="courseNumClass">Number of Class</label>
                                    <input type="text" class="form-control" id="courseNumClass" name="courseNumClass"
                                        placeholder="courseDuration">
                                </div>
                                <div class="form-group">
                                    <label for="courseFee">Course Fees</label>
                                    <input type="text" class="form-control" id="courseFee" name="courseFee"
                                        placeholder="courseFee">
                                </div>
                                <div class="form-group">
                                    <label for="courseStart">Course Start</label>
                                    <input type="date" class="form-control" id="courseStart" name="courseStart"
                                        placeholder="courseStart">
                                </div>
                                <div class="form-group">
                                    <label for="courseEnd">Course End</label>
                                    <input type="date" class="form-control" id="courseEnd" name="courseEnd"
                                        placeholder="courseEnd">
                                </div>
                                <div class="form-group">
                                    <label for="courseLastDateRegist">Last Date of Registration</label>
                                    <input type="date" name="courseLastDateRegist" id="courseLastDateRegist" class="form-control">
                                </div>

                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 grid-margin stretch-card">
                        </div>
                    </div>
                    <div>
                        <table class="table table-striped">Course-Batch Table
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Course Batch</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($courseBatch as $key => $batch)
                              <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $batch->course_batch }}</td>
                                <td><a href="{{ url('/course-batch/edit/view', $batch['id']) }}"
                                    class="edit btn btn-primary" type="button"
                                    data-id="{{ $batch->id }}">Edit</a>
                                    <a href="{{ url('/course-batch/delete', $batch['id']) }}" class="delete btn btn-danger"
                                    type="button" data-id="{{ $batch->id }}" onclick="return confirm('Are you sure?')">Delete</a>
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
