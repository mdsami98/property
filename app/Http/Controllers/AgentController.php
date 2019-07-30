<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index(){

        $posts =Post::where('publication_status' , 1)->take(8)->get();
        return view('agent.home.home', [
            'posts' => $posts
        ]);
    }
}
