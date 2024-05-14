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

                <form action="{{ url('trainer-update/'.$data2->id) }} " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="title">Name</label>
                      <input type="text" name="name" class="form-control" id="title" aria-describedby="emailHelp" value="{{ $data2->name }}">

                    </div>
                    <div class="form-group">
                      <label for="dis">Detail</label>
                      <input type="text" name="detail" class="form-control" id="dis" value="{{ $data2->detail }}">
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



        </div>
        <!-- main-panel ends -->
    </div>
@endsection

@push('js')
@endpush
