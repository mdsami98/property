<?php

namespace App\Http\Controllers;

use App\Category;
use App\Favourite;
use App\Post;
use App\PostImage;
use App\RegionAreaCity;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use FarhanWazir\GoogleMaps\GMaps;
use Stripe\Charge;
use Stripe\Stripe;

class UserPostcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latestPosts =Post::where('publication_status' , 1)->orderBy('id','desc')->get();
        $posts =Post::where('user_id' ,Auth::user()->id)->get();
        return view('frontEnd.posts.userallposts', [
            'posts' => $posts,
            'latestPosts' => $latestPosts,
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
        return view('frontEnd.posts.create', [
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
    public function store(Request $request)
    {
//       return $request->all();

       $this->validate($request, [
           'title' =>'required|min:10|max:50',
           'image' => 'required',
           'category_id' => 'required',
           'type_id' => 'required',
           'post_type' => 'required',
           'area' => 'required|min:1',
           'price' => 'required|min:1',
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
       $formInput['user_id']=Auth::user()->id;


       if($request->file('image')){
           $image=$request->file('image');
           if($image->isValid()){
               $fileName=time().'-'.str::slug($formInput['title'],"-").'.'.$image->getClientOriginalExtension();


               $image->move('postimages', $fileName);
               $formInput['image']=$fileName;
           }
       }



       if ($request->post_type == 1){

           Post::create($formInput);

           Session::flash('message', 'You successfully created a post');
           return redirect()->route('post.index')->with('message', 'Post Create successfully!');


       }
       if ($request->post_type == 2){

           return view('frontEnd.posts.payment', [
             'formInput' => $formInput
           ]);
       }



    }

    public function payment(Request $request){


      Stripe::setApiKey('sk_test_1NnB3oLn38U7OPic7GxVCmqF004pxgmak7');

      $token = $request->stripeToken;
      $charge = Charge::create([
          'amount' => 100,
          'currency' => 'usd',
          'description' => 'Example charge',
          'source' => $token,
      ]);

    Post::create([
      'title' => $request->title,
      'user_id' => $request->user_id,
      'category_id' => $request->category_id,
      'type_id' => $request->type_id,
      'region' => $request->region,
      'region_area' => $request->region_area,
      'post_type' => $request->post_type,
      'price' => $request->price,
      'area' => $request->area,
      'phn_number' => $request->phn_number,
      'bedroom' => $request->bedroom,
      'bathroom' => $request->bathroom,
      'garage' => $request->garage,
      'description' => $request->description,
      'address' => $request->address,
      'image' => $request->image,
    ]);

    Session::flash('message', 'You successfully created a post');
    return redirect()->route('post.index')->with('message', 'Post Create successfully!');


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
        $postImages = PostImage::where('post_id', $id);

        return view('frontEnd.posts.singlepost', [
            'post' => $post,
            'postImages' => $postImages,
            'comments' => $comments,
            'map' => $map,
            'favourite' => $favourite,
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
        $category = Category::pluck('title' , 'id')->all();
        $type = Type::pluck('title' , 'id')->all();
        $region = RegionAreaCity::pluck('region' , 'id')->all();
        $post = Post::findOrFail($id);

        return view('frontEnd.posts.edit', [
            'post' => $post,
            'type' => $type,
            'region' => $region,
            'category' => $category,
        ]);
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
        $update_post = Post::findOrFail($id);

        $this->validate($request,[
            'title' =>'required|min:10|max:50',
            'category_id' => 'required',
            'type_id' => 'required',
            'post_type' => 'required',
            'area' => 'required|min:1',
            'price' => 'required|min:1',
            'bedroom' => 'required|min:1',
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

        return redirect()->route('post.index')->with('message','Update Post Successfully!');


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

        Session::flash('message', 'You successfully delete the post');
        return redirect()->route('post.index');
    }

}
