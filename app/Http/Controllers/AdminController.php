<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function dashboard(){

       $users = User::where('role_id', 1)->get();
       $agents = User::where('role_id', 2)->get();
       return view('admin.dashboard.index', [
           'users' =>$users,
           'agents' =>$agents
       ]);
   }
    public function publication($id){
        $post = Post::findOrFail($id);

        if ($post->publication_status == 0){
            $post->update(
                [
                    'publication_status' => 1,
                ]
            );
            return redirect()->back();
        }
        if ($post->publication_status == 1){
            $post->update(
                [
                    'publication_status' => 0,
                ]
            );
            return redirect()->back();
        }

   }



}
