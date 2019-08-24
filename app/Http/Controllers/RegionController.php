<?php

namespace App\Http\Controllers;

use App\RegionAreaCity;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = RegionAreaCity::all();
        return view('admin.region.index', [
            'regions' =>$regions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.region.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'region' => 'required|unique:categories,title|regex:/^[a-zA-Z][a-zA-Z\\s]+$/'
        ]);


        $input = $request->all();
        $region = RegionAreaCity::create($input);


        \Illuminate\Support\Facades\Session::flash('message', 'You successfully created a category');
        return redirect()->route('admin.region.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $region = RegionAreaCity::findOrFail($id);
        return view('admin.region.edit', [
            'region' => $region
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
        $request->validate([
            'region' => 'required|unique:categories,title|regex:/^[a-zA-Z][a-zA-Z\\s]+$/'
        ]);

        $region = RegionAreaCity::findOrFail($id);
        $input = $request->all();
        $region->update($input);

        \Session::flash('message', 'You successfully updated the region name');

        return redirect()->route('admin.region.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $regin = RegionAreaCity::findOrfail($id);

       $regin->delete();

        \Session::flash('message', 'You successfully deleted the region');

        return redirect()->route('admin.region.index');

    }
}
