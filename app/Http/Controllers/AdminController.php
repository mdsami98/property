<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function dashboard(){
       return view('admin.dashboard.index');
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
