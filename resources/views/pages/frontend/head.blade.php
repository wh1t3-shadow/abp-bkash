<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABP- Academy of Business Professionals | Making Professionals Akash</title>
    <link rel="icon" type="image/x-icon" href="img/logo-3.png">

    <!-- bootstrap-cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- fontawesome-cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- slick-slider-css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom-css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
</head>
<body>
    <!-- header-section -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-6 left-col">
                        <h3>ABP - Academy of Business Professionals</h3>
                    </div>
                    <div class="col-6 right-col">
                          <p>Follow Us:</p>
                           <span><a href="#"><i class="fa-brands fa-facebook-f"></i></a> </span>
                            <span><a href="#"><i class="fa-brands fa-linkedin-in"></i></a> </span>
                            <span><a href="#"><i class="fa-brands fa-youtube"></i></a> </span>

                        <a class="btn" href="{{ url('/register') }}">Admission</a>
                        <a class="btn" href="{{ url('/blog') }}">Blog</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-header">
                <div class="main-row">
                    <div class="logo-col">
                        <div class="logo">
                            <a href="#"><img src="{{ asset('frontend/assets/img/ABP-logo.png') }}" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="menu-col">
                        <div class="nav">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/course') }}">Course</a></li>
                                <li><a href="{{ url('/gallery-view') }}">Gallery</a></li>
                                {{-- <li><a href="{{ url('/blog') }}">Blog</a></li> --}}
                                <li><a href="{{ url('/about') }}">About</a></li>
                                <li><a href="{{ url('/contact') }}">Contact</a></li>



                            </ul>
                    </div>
                </div>
            </div>
        </div>
