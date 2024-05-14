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
                                <h4 class="card-title">Student Admission Info - Form</h4>
                                <p class="card-description">

                                </p>
                                <form class="forms-sample" enctype="multipart/form-data" method="POST"
                                    action="/student-admit/edit/update/{{ $studentAdmissionPending['id'] }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="studentName">Student Name</label>
                                        <input type="text" name="studentName" id="studentName" class="form-control" value="{{ $studentAdmissionPending->student_name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="courseName">Course</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" aria-label="Default select example"
                                                style="color: black" name="courseName" id="courseName">
                                                <option selected value="">Select Course Name</option>
                                                @foreach ($courseInfo as $course)
                                                    <option value="{{ $course->id }}"
                                                        @if ($course->id == $studentAdmissionPending->course_title_id) selected @endif>
                                                        {{ $course->course_title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="studentEmail">Email</label>
                                        <input type="email" name="studentEmail" id="studentEmail" class="form-control" value="{{ $studentAdmissionPending->student_email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="studentPhone">Phone</label>
                                        <input type="tel" name="studentPhone" id="studentPhone" class="form-control" value="{{ $studentAdmissionPending->student_phone }}">
                                    </div>
                                    <label for="paymentStatus">Payment Status</label>
                                    <br><br>
                                    <div class="form-group">
                                        <input type="radio" name="studentPaymentStatus" id="studentPaid" value="{{ $studentAdmissionPending->student_payment_status }}"
                                            onfocusin="paidStatus()">
                                        <label for="studentPaid">Paid</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="studentPaymentStatus" id="studentUnPaid" value="{{ $studentAdmissionPending->student_payment_status }}"
                                            onfocusin="unpaidStatus()">
                                        <label for="studentUnPaid">Unpaid</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="studentPaymentStatus" id="studentDue" value="{{ $studentAdmissionPending->student_payment_status }}"
                                            onfocusin="dueAmount()">
                                        <label for="studentDue">Due</label>
                                    </div>

                                    <div class="form-group" style="display: none" id="dueAmountInput">
                                        <label for="studentDueAmount">Due Amount</label>
                                        <input type="text" name="studentDueAmount" id="studentDueAmount" value="{{ $studentAdmissionPending->student_due_amount }}"
                                            class="form-control">
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
    <script>
        function dueAmount() {
            document.getElementById('dueAmountInput').style.display = 'block';
        }

        function paidStatus() {
            document.getElementById('dueAmountInput').style.display = 'none';
        }

        function unpaidStatus() {
            document.getElementById('dueAmountInput').style.display = 'none';
        }
    </script>
@endpush
