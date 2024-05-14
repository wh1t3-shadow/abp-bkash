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

                <form action="{{ url('/trainer-submit') }} " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="title">Name</label>
                      <input type="text" name="name" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Trainer name">

                    </div>
                    <div class="form-group">
                      <label for="dis">Detail</label>
                      <input type="text" name="detail" class="form-control" id="dis" placeholder="Details">
                    </div>
                    <div class="form-group">
                        <label for="dis">Image</label>
                        <input type="file" name="image" class="form-control" id="dis" required>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <!-- partial -->

            <h2>view data</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Discribtion</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>

                <tbody>
                    @foreach ($data1 as $data1)
                    <tr>
                      <th>{{ $data1->id }}</th>
                      <td>{{ $data1->name }}</td>
                      <td>{{ $data1->detail }}</td>
                      <td><img src="{{ url('images/'.$data1->image) }}" alt=""> </td>
                      <td><a class="btn btn-warning" href="traier-edit/{{ $data1->id }}">Edit</a></td>
                      <td><a class="btn btn-warning" href="traier-delete/{{ $data1->id }}">Delete</a></td>

                    </tr>
                    @endforeach
                  </tbody>


              </table>

        </div>
        <!-- main-panel ends -->
    </div>
@endsection

@push('js')
@endpush
