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

                <form action="{{ url('user-submit/'.$user1->id) }} " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="title">Name</label>
                      <input type="text" name="name" class="form-control" id="title" aria-describedby="emailHelp"  value="{{ $user1->name }}">

                    </div>
                    <div class="form-group">
                      <label for="dis">Email</label>
                      <input type="text" name="email" class="form-control" id="dis" value="{{ $user1->email }}">
                    </div>

                    <div class="form-group">
                        <label for="dis">password</label>
                        <input type="text" name="password" class="form-control" id="dis" value="{{ $user1->password }}" readonly>
                      </div>

                      <div class="form-group">
                      <select name="apruv" id="" style="padding: 9px 20px;">
                        <option value="notapruv">Not apruv</option>
                        <option value="apruv">apruv</option>
                      </select>
                      </div>

                      <div class="form-group">
                        <select name="course_info_id" id="" style="padding: 9px 20px;">
                            @foreach ($data as $data)


                          <option value="{{ $data->id }}">{{ $data->course_title }}</option>
                          @endforeach
                        </select>
                        </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <!-- partial -->

            {{-- <h2>view data</h2>
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
                      <td><a class="btn btn-warning" href="edit-user/{{ $data2->id }}">Edit</a></td>

                      <td><a class="btn btn-warning" href="edit-user/{{ $data2->id }}">Delete</a></td>

                    </tr>
                    @endforeach
                  </tbody>


              </table> --}}

        </div>
        <!-- main-panel ends -->
    </div>
@endsection

@push('js')
@endpush

