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

                <form action="{{ url('/forth-section-submit') }} " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Title">

                    </div>
                    <div class="form-group">
                      <label for="dis">Discribtion</label>
                      <input type="text" name="dis" class="form-control" id="dis" placeholder="Discribtion">
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
                    @foreach ($data13 as $data13)
                    <tr>
                      <th>{{ $data13->id }}</th>
                      <td>{{ $data13->title }}</td>
                      <td>{{ $data13->dis }}</td>
                      <td><img src="{{ url('images/'.$data13->image) }}" alt=""> </td>
                      <td><a class="btn btn-warning" href="forth-section-edit/{{ $data13->id }}">Edit</a></td>

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
