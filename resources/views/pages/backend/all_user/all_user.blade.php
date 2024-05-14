@extends('pages.layouts.master')


@section('title', 'Course Batch')


@section('content')
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
       @include('pages.backend.nav')
        <!-- partial -->
        <div class="main-panel">
            @if (session('update'))
            <div class="alert alert-success">
              {{ session('update') }}
            </div>
            @endif
            {{-- <div class="content-wrapper">

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

                <form action="{{ url('/fastsection-submit') }} " method="post" enctype="multipart/form-data">
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

            </div> --}}
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <!-- partial -->

            <h2>view data</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Is apruv</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delate</th>

                  </tr>
                </thead>

                <tbody>
                    @foreach ($user as $data2)
                    <tr>
                      <th>{{ $data2->name }}</th>
                      <td>{{ $data2->email }}</td>
                      <td>{{ $data2->apruv }}</td>
                      <td><a class="btn btn-warning" href="user-edit/{{ $data2->id }}">Edit</a></td>

                      <td><a class="btn btn-warning" href="user-delete/{{ $data2->id }}">Delete</a></td>

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

