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








                <h2>view data</h2>
                <table class="table">
                    <thead>
                      <tr>

                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">subject</th>
                        <th scope="col">massage</th>

                      </tr>
                    </thead>

                    <tbody>
                        @foreach ($data2 as $data2)
                        <tr>

                          <td>{{ $data2->name }}</td>
                          <td>{{ $data2->email }}</td>
                          <td>{{ $data2->subject }}</td>
                          <td>{{ $data2->massage }}</td>
                          <td><a class="btn btn-warning" href="admin-contact-delete/{{ $data2->id }}">Delete</a></td>

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
