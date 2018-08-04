<?php

namespace App\Http\Controllers;

use Session;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         return view('admin.posts.index')->with('posts',Post::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        if($categories->count() == 0){

            Session::flash('info', 'You must create a category first before creating a post');

            return redirect()->back();
        }
        return view('admin.posts.create')->with('categories', $categories );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'featured' => 'required|image',
            'category_id' => 'required'
        ]);



        $featured = $request->featured;

        $featured_new_name = time().$featured->GetClientOriginalName();

        $featured->move('uploads/posts/', $featured_new_name);


        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured' => '/uploads/posts/'.$featured_new_name,
            'category_id' => $request->category_id,
            'slug' => str_slug($request->title)
        ]);


        Session::flash('success', 'Post Uploaded Successfully');

        return redirect()->route('posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('post')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('admin.posts.edit')->with( ['post' => Post::find($id), 'categories' => Category::all() ] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'featured' => 'required'
        ]);

        $featured = $request->featured;

        $featured_edited_name = time().$featured->GetClientOriginalName();

        $featured->move('uploads/posts/', $featured_edited_name);

        $post = Post::find($id)->update([
            'title' => $request->title,
            'content' => $request->content,
            'featured' => '/uploads/posts/'.$featured_edited_name,
            'category_id' => $request->category_id
        ]);

        Session::flash('success', 'Post edited successfully');

        return redirect()->route('posts')->with('post');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();

        Session::flash('success', 'Post deleted successfully');

        return redirect()->route('posts');
    }
}
