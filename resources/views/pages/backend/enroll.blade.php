@extends('pages.layouts.master')


@section('title', 'Course Batch')


@section('content')
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
       @include('pages.backend.nav')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @if (session('submit'))
                <div class="alert alert-success">
                  {{ session('submit') }}
                </div>
                @endif

                @if (session('update'))
                <div class="alert alert-success">
                  {{ session('update') }}
                </div>
                @endif






                <h2>view data</h2>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Course</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Number</th>
                        <th scope="col">Action</th>

                      </tr>
                    </thead>

                    <tbody>
                        @foreach ($data2 as $data2)
                        <tr>
                          <th>{{ $data2->course }}</th>
                          <td>{{ $data2->name }}</td>
                          <td>{{ $data2->email }}</td>
                          <td>{{ $data2->number }}</td>
                          <td><a class="btn btn-warning" href="enroll-delete/{{ $data2->id }}">Delete</a></td>

                        </tr>
                        @endforeach
                      </tbody>


                  </table>

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
