@extends('layouts.homepage')


@section('content')

    <div class="row mt-5 ml-auto">
        <div class="col-lg-7">
            <h1 class="display-5 text-center">{{ $post->title  }}</h1>
            <img class="" src="{{ asset($post->featured)  }}" alt="" height="500px" width="100%">
            <p class="lead">{{ $post->content }}</p>
            <form action="{{ route('comment.store', ['id' => $post->id ]) }}" method="post" class="form-group">
                {{csrf_field() }}
                <textarea name="content" id="" cols="70" rows="4"></textarea> <br>
                <button class="btn btn-primary">Comment</button>
            </form>
                    <div class="text-dark display-5 bg-info">Member Comments</div>
                    @if($comments = $post->comments()->latest()->paginate(5))
                    @foreach($comments as $comment)
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5>{{ $comment->user->name }} says:</h5>
                                    <p class="lead" style="font-size:12px; word-wrap:break-word;">
                                        {{ $comment->content }}
                                    </p>
                                    <p> {{ $comment->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                    @endforeach
                    {{  $comments->links() }}
                    @endif


        </div>

        @include('layouts.sidebar')
    </div>





@stop
