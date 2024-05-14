<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="bg-info">

  <div class="container">
    <div class="row py-5">
        <div class="col text-center text-light">

             <img class=" col-3 img-fulid" src="{{ asset('images/waiting.png') }}" alt="">
            <h1 class="text-uppercase" style="text-shadow: 4px 4px #6c6666;">hi  {{ $data5->name }}</h1>
            <h1>you can show content, when admin approve you</h1>
            <a href="{{ url('/logout') }}" class="btn btn-warning">logout</a>
        </div>
    </div>
  </div>
</body>
</html>
