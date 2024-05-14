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

                <form action="{{ url('/fifth-section-submit') }} " method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="imsge">Image</label>
                        <input type="file" name="image" class="form-control" id="image" required>
                      </div>
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Title">

                    </div>
                    <div class="form-group">
                      <label for="iframe">video iftame link</label>
                      <input type="text" name="iframe" class="form-control" id="iframe" placeholder="https://www.youtube.com/embed/Zx_GYQUf050">
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
                    <th scope="col">iframe link</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>

                <tbody>
                    @foreach ($data18 as $data18)
                    <tr>
                      <th>{{ $data18->id }}</th>
                      <td>{{ $data18->title }}</td>
                      <td>{{ $data18->iframe }}</td>
                      <td><img src="{{ url('images/'.$data18->image) }}" alt=""> </td>
                      <td><a class="btn btn-warning" href="fifth-section-edit/{{ $data18->id }}">Edit</a></td>

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
