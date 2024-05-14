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

                <form action="{{ url('fifth-section-update/'.$data19->id) }} " method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="imsge">Image</label>
                        <input type="file" name="image" class="form-control" id="image" required>
                      </div>
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" value="{{ $data19->title}}">

                    </div>
                    <div class="form-group">
                      <label for="iframe">video iftame link</label>
                      <input type="text" name="iframe" class="form-control" id="iframe" value="{{ $data19->iframe}}">
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
