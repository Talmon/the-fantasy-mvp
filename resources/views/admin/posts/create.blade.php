@extends('layouts.app')

@section('content')
<div  class="card">
    <div class="card-header">
        Create a New Article
    </div>
    <div class="card-body">
        @include('layouts.errors')

        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
             <label for="title">Title</label>
             <input type="text" name="title" class="form-control">
        </div>

        <div  class="form-group">
             <label for="content">Content</label>
             <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
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
             <input type="file" name="featured" class="form-control">
        </div>

       <div class="text-center">
       <button class="text-center btn btn-success">Publish</button>
       </div>

        </form>
    </div>
</div>
@stop
