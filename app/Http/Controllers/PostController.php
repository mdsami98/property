<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostCreateRequest;
use App\Post;
use App\PostImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', [
            'posts' => $posts,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $category = Category::pluck('title' , 'id')->all();
        return view('admin.posts.create', [
            'category' => $category,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request)
    {

        $post = new Post;
        $post->user_id = Auth::user()->id;
        $post->category_id = $request->category_id;
        $post->type_id = $request->type_id;
        $post->title = $request->title;
        $post->price = $request->price;
        $post->area = $request->area;
        $post->bedroom = $request->bedroom;
        $post->bathroom = $request->bathroom;
        $post->garage = $request->garage;
        $post->description = $request->description;
        $post->address = $request->address;

        $post->save();


        if (count($request->image) > 0) {

            foreach($request->image as $image){

                $name = time().$image->getClientOriginalName();

                $image->move('img', $name);
                $input['post_id']= $post->id;
                $post_image = PostImage::create([
                    'photo' => $name,
                    'post_id' => $post->id,

                ]);



            }
        }
        return redirect()->route('admin.post.create');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
