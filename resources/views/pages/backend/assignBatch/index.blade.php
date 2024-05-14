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
                                <h4 class="card-title">Assign Batch</h4>
                                <p class="card-description">

                                </p>
                                <form class="forms-sample" enctype="multipart/form-data" method="POST"
                                    action="{{ url('/assign-batch/create') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="courseBatchName">Batch List</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" aria-label="Default select example"
                                                style="color: black" name="courseBatchName" id="courseBatchName">
                                                <option selected value="">Select Batch</option>
                                                @foreach ($batchList as $batch)
                                                    <option value="{{ $batch->id }}">{{ $batch->course_batch }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="acceptedStudentName">Student List</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" aria-label="Default select example"
                                                style="color: black" name="acceptedStudentName" id="acceptedStudentName">
                                                <option selected value="">Select Student</option>
                                                @foreach ($acceptedStudent as $student)
                                                    <option value="{{ $student->id }}">{{ $student->student_name }}
                                                    </option>
                                                @endforeach
                                            </select>
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
                        <table class="table table-striped">Student-Batch Table
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Course Batch</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                @foreach ($courseBatch as $key => $batch)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $batch->course_batch }}</td>
                                        <td><a href="{{ url('/course-batch/edit/view', $batch['id']) }}"
                                                class="edit btn btn-primary" type="button"
                                                data-id="{{ $batch->id }}">Edit</a>
                                            <a href="{{ url('/course-batch/delete', $batch['id']) }}"
                                                class="delete btn btn-danger" type="button"
                                                data-id="{{ $batch->id }}"
                                                onclick="return confirm('Are you sure?')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody> --}}
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
