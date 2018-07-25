@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Edit Article: {{ $post->title }}
    </div>
    <div class="card-body">
        @include('layouts.errors')

        <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
             <label for="title">Title</label>
             <input type="text" name="title" value="{{ $post->title }}" class="form-control">
        </div>

        <div class="form-group">
             <label for="content">Content</label>
             <textarea name="content" value="{{ $post->content }}" id="" cols="30" rows="10" class="form-control">{{ $post->content }}</textarea>
        </div>


        <div class="form-group">
             <label for="category">Category</label>
             <select name="category_id" id="category" class="form-control">
             @foreach($categories as $category)
                <option value="{{ $category->id }}"> {{$category->name}}</option>
             @endforeach             
             </select>   
        </div>

        <div class="form-group">
             <label for="featured">Featured Image</label>
             <input type="file" name="featured" value=" 'fdsfsdf' " class="form-control">
        </div>

       <div class="text-center">
       <button class="text-center btn btn-success">Publish</button>
       </div> 
        
        </form>        
    </div>
</div>
@stop