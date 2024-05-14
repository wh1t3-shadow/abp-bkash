@extends('pages.layouts.master')


@section('title', 'Course Info')


@section('content')
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('pages.backend.nav')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div>
                        @if ($userId == 1)
                            <table class="table table-striped">User Table
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">User Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userCredential as $key => $user)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>

                                            <td>
                                                <a href="{{ url('/custom-auth/edit/view', $user['id']) }}"
                                                    class="edit btn btn-primary" type="button" style="color: #fff"
                                                    data-id="{{ $user->id }}">Edit</a>
                                                <a href="{{ url('/custom-auth/delete', $user['id']) }}"
                                                    class="delete btn btn-danger" type="button" style="color: #fff"
                                                    data-id="{{ $user->id }}"
                                                    onclick="return confirm('Are you sure?')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
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
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
@push('js')
@endpush
