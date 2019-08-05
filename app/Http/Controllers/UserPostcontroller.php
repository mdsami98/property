<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\PostImage;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UserPostcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =Post::where('user_id' ,Auth::user()->id)->get();
        return view('frontEnd.posts.userallposts', [
            'posts' => $posts
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
        return view('frontEnd.posts.create', [
            'category' => $category,
            'type' => $type,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//       return $request->all();

       $this->validate($request, [
           'title' =>'required|regex:/^[a-zA-Z][a-zA-Z\\s]+$/|min:10|max:40',
           'image' => 'required',
           'category_id' => 'required',
           'type_id' => 'required',
           'area' => 'required',
           'price' => 'required',
           'bedroom' => 'required',
           'bathroom' => 'required',
           'description' => 'required',
           'region' => 'required',
           'region_area' => 'required',
           'address' => 'required',
           'post_type' => 'required',
           'phn_number' => 'required|numeric|regex:/(01)[0-9]{9}/',
       ]);

       if ($request->post_type == 1){

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
//           return redirect()->route('admin.post.index')->with('message', 'Post Create successfully!');
           return back();

       }
       if ($request->post_type == 2){

           return '2';
       }



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
        $comments = $post->comments;
        $postImages = PostImage::where('post_id', $id);

        return view('frontEnd.posts.userpostsingle', [
            'post' => $post,
            'postImages' => $postImages,
            'comments' => $comments,
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
        $post = Post::findOrfail($id);
        $post->delete();

        $image_large=public_path().'/postimages/'.$post->image;

        if($post->delete()){
            unlink($image_large);
        }


        return redirect()->route('post.index');
    }

}