@extends('pages.layouts.master')


@section('title', 'File Upload')


@section('content')
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('pages.backend.nav')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Course Category</h4>
                                <p class="card-description">

                                </p>
                                <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{ url('/course-category/create') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="courseCategoryName">Course Category Name</label>
                                        <input type="text" class="form-control" id="courseCategoryName" name="courseCategoryName"
                                            placeholder="courseCategoryName">
                                    </div>

                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 grid-margin stretch-card">
                        </div>
                    </div>
                    <div>
                        <table class="table table-striped">Course-Category Table
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Course Category Name</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($courseCateg as $key => $categ)
                              <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $categ->course_category }}</td>
                                <td><a href="{{ url('/course-category/edit/view', $categ['id']) }}"
                                    class="edit btn btn-primary" type="button"
                                    data-id="{{ $categ->id }}">Edit</a>
                                    <a href="{{ url('/course-category/delete', $categ['id']) }}" class="delete btn btn-danger"
                                    type="button" data-id="{{ $categ->id }}" onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
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
