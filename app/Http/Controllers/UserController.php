<?php

namespace App\Http\Controllers;

use App\Post;
use App\Profile;
use App\Role;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     $users = User::where('role_id', 1)->get();



        return view('admin.users.index', [
            'users' =>$users,

        ]);



    }

    public function allAgents(){
        $users = User::where('role_id', 2)->get();

        return view('admin.users.agent', [
            'users' =>$users
        ]);
    }
    public function addAdmin(){
        $users = User::where('role_id', 3)->get();

        return view('admin.users.admin', [
            'users' =>$users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::pluck('name' , 'id')->all();
       return view('admin.users.create', [
           'role' =>$role,
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
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->created($request->all())));
        $userId = $user->id;
        $date = [
            'user_id' => $userId,
            'image' =>'profile.jpg',
            'about_text' =>''
        ];

        $profile = Profile::create($date);


        if ($user->role_id == 1) {

            Session::flash('message', 'You successfully create a user');
            return redirect()->route('admin.users.index');

        }
        if ($user->role_id == 2) {

            Session::flash('message', 'You successfully create a agent');
            return redirect()->route('admin.agents');

        }
        if ($user->role_id == 3) {

            Session::flash('message', 'You successfully create a Admin');
            return redirect()->route('admin.admins');

        }

    }

    private function created(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role_id' => $data['role_id'],
            'password' => Hash::make($data['password']),
        ]);
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'email' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);


        return view('admin.users.singleuser', [
            'user' =>$user,

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
        $user = User::findOrFail($id);

        if ($user->role_id == 1) {

            $user->delete();
            Session::flash('message', 'You successfully delete a user');
            return redirect()->route('admin.users.index');

        }
        if ($user->role_id == 2) {

            $user->delete();

            Session::flash('message', 'You successfully delete a Agent');
            return redirect()->route('admin.agents');

        }
        if ($user->role_id == 3) {

            $user->delete();

            Session::flash('message', 'You successfully delete a Admin');
            return redirect()->route('admin.admins');

        }


    }

    public function change($id){

        $user = User::findOrFail($id);



        if ($user->role_id == 1){

            $input = [
                'role_id' => 2
            ];
           $user->update($input);


            Session::flash('message', 'You successfully change '.$user->name.' to agent');
           return redirect()->back();
        }
        if ($user->role_id == 2){
            $user->update(
                [
                    'role_id' => 1,
                ]
            );
            Session::flash('message', 'You successfully change '.$user->name.' to User');
            return redirect()->back();
        }

    }


}
