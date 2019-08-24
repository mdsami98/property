<?php

namespace App\Http\Controllers;

use App\Log;
use App\Post;
use App\PostImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AgentPostImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $inputData=$request->all();
        if($request->file('image')){
            $images=$request->file('image');
            foreach ($images as $image){
                if($image->isValid()){
                    $extension=$image->getClientOriginalExtension();
                    $fileName=rand(100,999999).time().'.'.$extension;
                    $image->move('postimages', $fileName);

                    $inputData['image']=$fileName;
                    PostImage::create($inputData);
                }
            }
        }

        Session::flash('message', 'You successfully added image the post');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        $postImages = PostImage::where('post_id','=', $id)->get();

        return view('agent.posts.addimage', [
            'post' => $post,
            'postImages' => $postImages,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=PostImage::findOrFail($id);
        $image_large=public_path().'/postimages/'.$delete->image;
        if($delete->delete()){
            unlink($image_large);
        }


        Session::flash('message', 'You successfully deleted image to the post');
        return back();
    }
}
