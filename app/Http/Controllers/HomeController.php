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
           $posts = Post::paginate(9);
           return view('index')->with('posts', $posts);

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
