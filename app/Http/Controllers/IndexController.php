<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\PostImage;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(){

        $posts =Post::where('publication_status' , 1)->take(8)->get();
        return view('frontEnd.home.home', [
            'posts' => $posts
        ]);
    }
    public function singleView($id){

        $user = Auth::user()->id;

        $profile = Profile::where('user_id' , $user)->first();

        $post =Post::findOrFail($id);

        $postImages = PostImage::where('post_id','=', $id )->get();
        return view('frontEnd.posts.singlepost', [
            'post' => $post,
            'postImages' => $postImages,
            'profile' => $profile,
        ]);
    }

    public function categoryView($id){

        $posts = Post::where('category_id', $id)->get();

        return view('frontEnd.posts.categoryview', [
            'posts' => $posts,
        ]);

    }
    public function typeView($id){

        $posts = Post::where('type_id', $id)->get();

        return view('frontEnd.posts.typeview', [
            'posts' => $posts,
        ]);

    }

}
