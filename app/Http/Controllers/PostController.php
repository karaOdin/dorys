<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Ramsey\Uuid\Guid\Guid;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post as ModelsPost;

class PostController extends Controller
{
    public function index(Post $post){
        $post=Post::all();

        return view("welcome")->with(compact('post'));
    }

    public function show($id){

        $post =Post::where('id',$id)->firstOrFail();
dd($post);





        return view("approfond", compact('post'));
    }


  public function approfond($id=null){

    $post = Post::where('id',$id)->first();
    return view('approfond')->with(compact('post'));
  }
}
