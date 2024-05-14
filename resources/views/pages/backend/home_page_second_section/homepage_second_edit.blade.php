@extends('pages.layouts.master')


@section('title', 'Course Batch')


@section('content')
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('pages.backend.nav')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @if (session('update'))
                <div class="alert alert-success">
                  {{ session('update') }}
                </div>
                @endif

                <form action="{{ url('second-section-submit/'.$data7->id) }} " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="title">Fast Title</label>
                      <input type="text" name="f_title" class="form-control" id="title" aria-describedby="emailHelp" value="{{ $data7->f_title }}">

                    </div>
                    <div class="form-group">
                        <label for="title"> Second Title</label>
                        <input type="text" name="s_title" class="form-control" id="title" aria-describedby="emailHelp" value="{{ $data7->s_title }}">

                      </div>
                    <div class="form-group">
                      <label for="dis">Third Title</label>
                      <input type="text" name="t_title" class="form-control" id="dis" value="{{ $data7->t_title }}">
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
