<?php

namespace App\Http\Controllers;

use App\Profile;
use http\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [

        'phone_no' => 'required|min:11|numeric',
        'image' => 'required',
        'address' => 'required',

       ]);

        $formInput = $request->all();

        $formInput['user_id'] = Auth::user()->id;

        $username = Auth::user()->name;

        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.str::slug($username,"-").'.'.$image->getClientOriginalExtension();


                $image->move('profileImage', $fileName);
                $formInput['image']=$fileName;
            }
        }



       Profile::create($formInput);




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
        $user = Auth::user()->id;
        $profile = Profile::where('user_id' , $user)->first();

        return view('frontEnd.profile.index', [
           'profile' => $profile
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
       $profile= Profile::findOrFail($id);
        return view('frontEnd.profile.edit', [
            'profile' => $profile
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
        $profile = Profile::findOrFail($id);

        $this->validate($request, [

            'phone_no' => 'required|min:11|numeric',
            'address' => 'required',

        ]);

        $formInput=$request->all();
        $userId = Auth::user()->id;
        $formInput['user_id'] = Auth::user()->id;

        $username = Auth::user()->name;
        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.str::slug($username,"-").'.'.$image->getClientOriginalExtension();


                $image->move('profileImage', $fileName);
                $formInput['image']=$fileName;
            }
        }

        else{
            $formInput['image']=$profile['image'];
        }

        $profile->update($formInput);




        return redirect()->to('/profile/{$userId}');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addNumber(Request $request){

        $this->validate($request, [

            'phone_no' => 'required|min:11|numeric',

        ]);
        $profile = Profile::findOrFail($request->profile_id);
        $data = [
            'phone_no' => $request->phone_no,

        ];

        $profile->update($data);

        return redirect()->back();


    }

    public function addAddress(Request $request){
        $profile = Profile::findOrFail($request->profile_id);

        $data = [
            'address' => $request->address,

        ];

        $profile->update($data);

        return redirect()->back();
    }

    public function addAbout(Request $request){

        $profile = Profile::findOrFail($request->profile_id);

        $data = [
            'about_text' => $request->about_text,

        ];

        $profile->update($data);

        return redirect()->back();

    }

    public function addImage(Request $request){

        $profile = Profile::findOrFail($request->profile_id);


        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.'.'.$image->getClientOriginalExtension();


                $image->move('profileImage', $fileName);

                $formInput= [
                    'image' => $fileName
                ];
            }
        }

        else{

            $formInput= [
                'image' =>$profile['image']
            ];
        }

        $profile->update($formInput);

        return redirect()->back();
    }


}
