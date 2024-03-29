<?php

namespace App\Http\Controllers;

use App\Log;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
   public function dashboard(){

       $users = User::where('role_id', 1)->get();
       $agents = User::where('role_id', 2)->get();
       $premiumPosts =Post::where('post_type' , 1)
           ->where('publication_status' , 1)->get();
       $allposts =Post::where('publication_status' , 1)->get();
       return view('admin.dashboard.index', [
           'users' =>$users,
           'agents' =>$agents,
           'premiumPosts' =>$premiumPosts,
           'allposts' =>$allposts,
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

            $action_by = Auth::user()->name;
            $action_for = $post->title;
            $action = 'Approve post';

            Log::create([
                'action_by' => $action_by,
                'action_for' => $action_for,
                'action' => $action,
            ]);

            Session::flash('message', 'You successfully change the publication status');

            return redirect()->back();
        }
        if ($post->publication_status == 1){
            $post->update(
                [
                    'publication_status' => 0,
                ]
            );

            $action_by = Auth::user()->name;
            $action_for = $post->title;
            $action = 'unapproved post';

            Log::create([
                'action_by' => $action_by,
                'action_for' => $action_for,
                'action' => $action,
            ]);



            Session::flash('message', 'You successfully change the publication status');
            return redirect()->back();
        }

   }



}
