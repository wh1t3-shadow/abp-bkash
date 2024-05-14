<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
</head>
<body class="bg-info text-white">



<div class="container">
    <div class="row py-4">
        <div class="col-10 d-flex justify-content-between">
            <h1>Hi  {{ $data2->name }}   welcome to the student panal</h1>
        </div>
        <div class="col-2 d-flex align-items-end justify-content-end">
        {{-- <a href="{{ url('/logout') }}">logout</a> --}}
        <a href="{{ url('/logout') }}" class="btn btn-warning">logout</a>
        </div>
    </div>
@foreach ($data1 as $data9)
<h3>{{ $data9->course_title }}</h3>
@endforeach

    <br><br>
    <table class="table table-secondary" style="color: black;">
        <p class="mb-4 text-warning">[Note: Admin can unapprove, when he want.]</p>
        <thead>
          <tr>
            <th scope="col">content title</th>
            <th scope="col">content link</th>

          </tr>
        </thead>
        <tbody>



            @foreach ($data1 as $item )
            @foreach ($item->CourseContentModel as $CourseContentModel)


            <tr>
            <td>course - {{ $item->course_title }} ,  {{$CourseContentModel->course_content_title}}</td>
            <td> {{$CourseContentModel->course_content_link}}</td>

          </tr>
          @endforeach
          @endforeach
        </tbody>
      </table>
{{-- @foreach ($data1->CourseContentModel as $data1)
<p>{{ $data1->course_content_title }}</p>
@endforeach --}}
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
