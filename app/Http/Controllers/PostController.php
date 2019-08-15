<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostCreateRequest;
use App\Post;
use App\PostImage;
use App\Profile;

use App\RegionAreaCity;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

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
    {
        $category = Category::pluck('title' , 'id')->all();
        $type = Type::pluck('title' , 'id')->all();
        $region = RegionAreaCity::pluck('region' , 'id')->all();

        return view('admin.posts.create', [
            'category' => $category,
            'type' => $type,
            'region' => $region,

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


        $formInput=$request->all();

        $formInput['user_id']=Auth::user()->id;

        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.str::slug($formInput['title'],"-").'.'.$image->getClientOriginalExtension();


                $image->move('postimages', $fileName);
                $formInput['image']=$fileName;
            }
        }

        Post::create($formInput);

        Session::flash('message', 'You successfully created a post');
        return redirect()->route('admin.post.index')->with('message', 'Post Create successfully!');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);



        $postImages = PostImage::where('post_id','=', $id)->get();

        return view('admin.posts.singlepost', [
            'post' => $post,
            'postImages' => $postImages,

        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {



        $category = Category::pluck('title' , 'id')->all();

        $type = Type::pluck('title' , 'id')->all();
        $region = RegionAreaCity::pluck('region' , 'id')->all();
        $post = Post::findOrFail($id);

        return view('admin.posts.edit',[
            'post' => $post,
            'category' => $category,
            'type' => $type,
            'region' => $region,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_post = Post::findOrFail($id);

        $this->validate($request,[
            'title' =>'required|regex:/^[a-zA-Z][a-zA-Z\\s]+$/|min:10|max:40',
            'category_id' => 'required',
            'type_id' => 'required',
            'post_type' => 'required',
            'area' => 'required|integer|min:400',
            'price' => 'required|integer|min:1',
            'bedroom' => 'required|integer|min:1',
            'bathroom' => 'required|integer|min:1',
            'floor' => 'required|integer|min:1',
            'description' => 'required',
            'region' => 'required',
            'region_area' => 'required',
            'address' => 'required',
            'phn_number' => 'required|numeric|regex:/(01)[0-9]{9}/',
        ]);




        $formInput=$request->all();

        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.str::slug($formInput['title'],"-").'.'.$image->getClientOriginalExtension();


                $image->move('postimages', $fileName);
                $formInput['image']=$fileName;
            }
        }

        else{
            $formInput['image']=$update_post['image'];
        }

        $update_post->update($formInput);

        Session::flash('message', 'You successfully update the post');

        return redirect()->route('admin.post.index')->with('message','Update Post Successfully!');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Post::findOrFail($id);

        $delete->delete();

        $image_large=public_path().'/postimages/'.$delete->image;

        if($delete->delete()){
            unlink($image_large);
        }

        Session::flash('message', 'You successfully delete the post');
        return redirect()->route('admin.post.index');
    }
}
