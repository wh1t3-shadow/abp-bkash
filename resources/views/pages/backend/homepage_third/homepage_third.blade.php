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

                <form action="{{ url('/third-section-submit') }} " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="title">popular cource title</label>
                      <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Title">

                    </div>
                    <div class="form-group">
                      <label for="dis">Batch number</label>
                      <input type="text" name="batch" class="form-control" id="dis" placeholder="batch 22">
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
                    <th scope="col">Batch number</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>

                <tbody>
                    @foreach ($data10 as $data10)
                    <tr>
                      <th>{{ $data10->id }}</th>
                      <td>{{ $data10->title }}</td>
                      <td>{{ $data10->batch }}</td>
                      <td><img src="{{ url('images/'.$data10->image) }}" alt=""> </td>
                      <td><a class="btn btn-warning" href="third-section-edit/{{ $data10->id }}">Edit</a></td>

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
