<?php

namespace App\Http\Controllers;

use App\Category;
use App\Favourite;
use App\Post;
use App\PostImage;
use App\Profile;
use App\Type;
use FarhanWazir\GoogleMaps\GMaps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class IndexController extends Controller
{
    public function index(){

        $posts =Post::where('publication_status' , 1)
            ->where('post_type' , 0)->get();

//        paginate(4)

        $premiumPostsSlide =Post::where('publication_status' , 1)
                            ->where('post_type' , 1)
                            ->orderBy('id','DESC')->take(4)->get();

        $premiumPosts =Post::where('publication_status' , 1)
                            ->where('post_type' , 1)->get();

        $latestPosts =Post::where('publication_status' , 1)->orderBy('id','desc')->get();
        return view('frontEnd.home.home', [
            'posts' => $posts,
            'latestPosts' => $latestPosts,
            'premiumPostsSlide' => $premiumPostsSlide,
            'premiumPosts' => $premiumPosts,
        ]);


    }

    public function premium($id){
        $premiumPosts =Post::where('publication_status' , 1)
            ->where('post_type' , 1)->orderBy('id','DESC')->get();

        return view('frontEnd.posts.premium', [
            'premiumPosts' => $premiumPosts,

        ]);
    }




    public function singleView($id){

        $post =Post::findOrFail($id);

        $config['center'] =$post->address;
        $config['zoom'] ='18';
        $config['map_height'] ='300px';
        $config['map_width'] ='800px';
        $config['scroolwheel'] =false;

        \GMaps::initialize($config);

//        Markar

        $marker['position'] = $post->address;
        \GMaps::add_marker($marker);

        $map =\GMaps::create_map();

        $comments = $post->comments;

        $favourite = Favourite::where('post_id', $post->id)->first();

        $postImages = PostImage::where('post_id','=', $id )->get();
        return view('frontEnd.posts.singlepost', [
            'post' => $post,
            'postImages' => $postImages,
            'comments' => $comments,
            'favourite' => $favourite,
            'map' => $map,
        ]);
    }

    public function categoryView($id){
        $category = Category::findOrfail($id);
        $posts = Post::where('category_id', $id)->get();

        return view('frontEnd.posts.categoryview', [
            'posts' => $posts,
            'category' => $category,
        ]);

    }
    public function typeView($id){
        $type = Type::findOrFail($id);
        $posts = Post::where('type_id', $id)->get();

        return view('frontEnd.posts.typeview', [
            'posts' => $posts,
            'type' => $type,
        ]);

    }

}
