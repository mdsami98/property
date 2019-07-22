<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){



       $p_category= $request->category;
        $bedrooms= $request->bedrooms;
        $bathrooms= $request->bathrooms;
        $min_price = $request->min_price;
        $max_price = $request->max_price;
        $min_area = $request->min_area;



        $posts = Post::where('category_id', $p_category)
                            ->where('bedroom', '>=', $bedrooms)
                            ->where('bathroom', '>=', $bathrooms)
                            ->where('price', '>=', $min_price)
                            ->where('price', '<=', $max_price)
                            ->where('area', '>=', $min_area)
                            ->get();

        return view('frontEnd.search.view', [
            'posts' => $posts
        ]);


    }
}
