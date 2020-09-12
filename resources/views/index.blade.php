@extends('layouts.homepage')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <!--  <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol> -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/homepage/cover-photo.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <a href="#">
                    <h1>Know God as you enjoy insight into your favourite sports</h1>
                </a>

                <a href="#" class="btn btn-dark btn-lg mr-5">Know God</a>
                <a href="#" class="btn btn-dark btn-lg">Go To FPL</a>

                <!-- <p>Quality and efficient........</p> -->
            </div>

        </div>

        <a href="#" class="btn btn-primary">Know God</a>

        <a href="/fpl" class="btn btn-primary">FPL</a>

    </div>
    <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon " aria-hidden="true"></span>
            <span class="sr-only text-danger">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> -->



</div>


<div class="row mt-5" style="font-family: 'Raleway';">
    <div class="col-lg-8">
        <div class="card text-center">
            <div class="card-header">
                Get To Know Us
            </div>
            <div class="card-body">
                <h5 class="card-title">About Divine Sports</h5>
                <p class="card-text lead">
                    Here at divine sports,we love God passionately,we believe in the God of the Bible as the one true God,He is real,we have experienced Him.We also are very passionate about sports,well...most of them anyway.
                    We are preaching the gospel of Jesus Christ while also giving you a dose of sports analysis.This is surely for all,whether you believe in God or not,you are most welcome.
                </p>
                <hr>

                <h5 class="card-title">What We Do</h5>
                <p class="card-text lead">
                    We get to demystify God as much as we know Him.We also do some serious sports analysis.Currently we do analysis of FPL(Fantasy Premier League) to help you to get to a top 300,000 finish,hopefully better,we hope to make FPL simple and fun for you.As we go,we shall keep adding various sports to our content.
                </p>

            </div>
            <div class="card-footer text-muted">
                Colossians 3:17 - "And whatever you do, whether in word or deed, do it all in the name of the Lord Jesus, giving thanks to God the Father through him."
            </div>
        </div>

        <img src="img/homepage/msg.jpg" class="img-fluid ml-3 mt-5 mb-5" height="400px" alt="Responsive image">

    </div>

    @include('layouts.sidebar')

</div>




@stop