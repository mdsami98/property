<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){


//        return $request->all();
        $p_category= $request->category;
        $p_type= $request->type;
        $bedrooms= $request->bedrooms;
        $bathrooms= $request->bathrooms;
        $min_price = $request->min_price;
        $max_price = $request->max_price;
        $min_area = $request->min_area;



        $posts = Post::where('category_id','=' ,$p_category)
                            ->where('type_id','=', $p_type)
                            ->where('bedroom', '>=', $bedrooms)
                            ->where('bathroom', '>=', $bathrooms)
                            ->where('price', '>=', $min_price)
                            ->where('price', '<=', $max_price)
                            ->where('area', '>=', $min_area)
                            ->get();

        $latestPosts =Post::where('publication_status' , 1)->orderBy('id','desc')->get();

        return view('frontEnd.search.view', [
            'posts' => $posts,
            'latestPosts' => $latestPosts,
        ]);


    }
}
