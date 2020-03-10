<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- Boostrap 4 --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container mt-3">

                <div id="myCarousel" class="carousel slide">


                    <div class="row">

                        @include('admin.sidebar')

                    <div class="col-md-9">
                        <!-- Indicators -->
                        <div class="card">
                            <div class="card-body">
                                <h1>Erandha Shopping Cart</h1><br/><br/><br/>
                        <ul class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ul>
                        <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/4.jfif" width="600" height="300">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/2.jpg" width="600" height="300">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/3.jfif" width="600" height="300">
                                </div>

                            </div>

                                <!-- Left and right controls -->
                                <a class="carousel-control-prev" href="#myCarousel">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel">
                                    <span class="carousel-control-next-icon"></span>
                                </a>

                        <script>
                            $(document).ready(function(){
                            // Activate Carousel with a specified interval
                            $("#myCarousel").carousel({interval: 500});

                            // Enable Carousel Indicators
                            $(".item1").click(function(){
                                $("#myCarousel").carousel(0);
                            });
                            $(".item2").click(function(){
                                $("#myCarousel").carousel(1);
                            });
                            $(".item3").click(function(){
                                $("#myCarousel").carousel(2);
                            });

                            // Enable Carousel Controls
                            $(".carousel-control-prev").click(function(){
                                $("#myCarousel").carousel("prev");
                            });
                            $(".carousel-control-next").click(function(){
                                $("#myCarousel").carousel("next");
                            });
                            });
                        </script>
                    </div>
                            </div>
                          </div>





        </div>
    </body>
</html>
