@extends('layouts.homepage')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/de-gea.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <a href="#">
                    <h5>WATCHLIST ALERT:GOALKEEPERS</h5>
                </a>
                <p>Quality and efficient........</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/jorginho.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <a href="#">
                    <h5 class="display-5">TEAM SELECTION</h5>
                </a>
                <p>We show you how to choose wisely......</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/yarmolenko.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <a href="">
                    <h5>HOW TO SUCCEED IN FPL 2018</h5>
                </a>
                <p>Useful Tips For Success........</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
        <span class="sr-only text-danger">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="row mt-5" style="font-family: 'Raleway';">
    <div class="col-lg-8">
        <!-- <div class="card-columns"> -->
        @foreach($posts as $post)
        <!-- <div class="card mr-auto">
                <img class="card-img-top" src="{{ $post->featured }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="h5 card-title"><a href="{{  route('post.show', ['id' => $post->id]) }}"> {{ $post->title }} </a> </h5>
                    <p class="lead card-text"> {{ str_limit($post->content, 20) }}</p>
                    <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
                </div>
            </div> -->
        <div class="card ml-5 mb-3" style="max-width: 840px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ $post->featured }}" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="h5 card-title"><a href="{{  route('post.show', ['id' => $post->id]) }}"> {{ $post->title }} </a> </h5>
                        <p class=" card-text"> <strong> {{ str_limit($post->content, 100) }} </strong> </p>
                        <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- </div> -->
    </div>

    @include('layouts.sidebar')

</div>




@stop