<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index(){
        $users = User::where('role_id', 1)->get();
        $posts =Post::where('publication_status' , 1)->get();
        $premiumPosts =Post::where('post_type' , 1)->get();
        return view('agent.home.home', [
            'posts' => $posts,
            'users' => $users,
            'premiumPosts' => $premiumPosts,
        ]);
    }
}
