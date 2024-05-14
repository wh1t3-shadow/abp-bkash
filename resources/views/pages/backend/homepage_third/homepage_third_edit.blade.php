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

                <form action="{{ url('third-section-update/'.$data11->id) }} " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="title">popular cource title</label>
                      <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" value="{{ $data11->title }}">

                    </div>
                    <div class="form-group">
                      <label for="dis">Batch number</label>
                      <input type="text" name="batch" class="form-control" id="dis" value="{{ $data11->batch }}">
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
