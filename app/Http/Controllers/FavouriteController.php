<?php

namespace App\Http\Controllers;

use App\Favourite;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favourites = Favourite::where('user_id', Auth::user()->id)->get();

        return view('frontEnd.favourites.index', [
            'favourites' =>$favourites
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::findOrFail($request->post_id);

        Favourite::create([
            'user_id' => Auth::user()->id,
            'post_id' => $post->id,
            'post_title' => $post->title,
            'post_price' => $post->price,
            'post_area' => $post->area,
            'post_bedroom' => $post->bedroom,
            'post_bathroom' => $post->bathroom,
            'post_garage' => $post->garage,
            'post_description' => $post->description,
            'post_image' => $post->image,
            'post_type' => $post->type->title,
            'post_category' => $post->category->title,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Favourite  $favourite
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Favourite  $favourite
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Favourite  $favourite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Favourite  $favourite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $favourite=Favourite::findOrFail($id);

        $favourite->delete();

        return back();

    }


}
