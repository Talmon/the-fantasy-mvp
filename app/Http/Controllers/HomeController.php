<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function user()
    {
           $posts = Post::orderBy('created_at', 'desc')->take(4)->get();
           $sidebarPosts = $posts->slice(0, 3);
        //    dd($posts);
        //    dd($sidebarPosts->keys());
           return view('index')->with(compact('posts', 'sidebarPosts'));
        //    return view('index')->with('posts', $posts);

    }

    public function fpl()
    {
           $posts = Post::orderBy('created_at', 'desc')->take(5)->get();
        //    $sidebarPosts = $posts;
           $sidebarPosts = $posts->slice(0,3);
        //    dd($posts);
        //    dd($sidebarPosts->keys());
           return view('fpl')->with(compact('posts', 'sidebarPosts'));

    }


    public function admin(){
        if (Auth::user()->admin) {
        return view('layouts.app');
        }

        else {
//            dd('here');
            return redirect()->route('user.home');
        }
    }
}
