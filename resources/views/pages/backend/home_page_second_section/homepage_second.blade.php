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

                <form action="{{ url('/second-section-submit') }} " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="title">Fast Title</label>
                      <input type="text" name="f_title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Title">

                    </div>
                    <div class="form-group">
                        <label for="title"> Second Title</label>
                        <input type="text" name="s_title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Title">

                      </div>
                    <div class="form-group">
                      <label for="dis">Third Title</label>
                      <input type="text" name="t_title" class="form-control" id="dis" placeholder="Discribtion">
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
                    <th scope="col">Fast title</th>
                    <th scope="col">second title</th>
                    <th scope="col">Third title</th>
                    <th scope="col">image</th>
                    <th scope="col">Action</th>


                  </tr>
                </thead>

                <tbody>
                    @foreach ($data6 as $data6)
                    <tr>
                      <th>{{ $data6->id }}</th>
                      <td>{{ $data6->f_title }}</td>
                      <td>{{ $data6->s_title }}</td>
                      <td>{{ $data6->t_title }}</td>
                      <td><img src="{{ url('images/'.$data6->image) }}" alt=""> </td>
                      <td><a class="btn btn-warning" href="second-section-edit/{{ $data6->id }}">Edit</a></td>

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
