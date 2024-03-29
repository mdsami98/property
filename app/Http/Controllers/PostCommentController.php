<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostCommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $comments = Comment::all();

        return view('admin.comments.index', [
            'comments' =>$comments
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
           $user = Auth::user();

           $data = [

               'post_id' =>$request->post_id,
               'author' =>$user->name,
               'email' =>$user->email,
               'authorImage' =>$user->profile->image,
               'commentBody' =>$request->commentBody
           ];

           Comment::create($data);

           return redirect()->back();

    }

    public function createReply(Request $request){

        $user = Auth::user();



        $data = [

            'post_id' =>$request->post_id,
            'author' =>$user->name,
            'email' =>$user->email,
            'authorImage' =>$user->profile->image,
            'commentBody' =>$request->commentBody
        ];

        Comment::create($data);

        return redirect()->back();


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
        return view('admin.comments.show', [
            'comments' => $comments,
            'post' => $post,
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
        $comment = Comment::findOrFail($id);

        $comment->delete();

        return redirect()->back();
    }
}
