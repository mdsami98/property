<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostImage;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $posts =Post::where('publication_status' , 1)->take(8)->get();
        return view('frontEnd.home.home', [
            'posts' => $posts
        ]);
    }
    public function singleView($id){

        $post =Post::findOrFail($id);

        $postImages = PostImage::where('post_id','=', $id )->get();
        return view('frontEnd.posts.singlepost', [
            'post' => $post,
            'postImages' => $postImages,
        ]);
    }

}
