<?php

namespace App\Http\Controllers;

use App\Category;
use App\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
            'title' => 'required|unique:categories,title|regex:/^[a-zA-Z][a-zA-Z\\s]+$/'
        ]);

        $input = $request->all();
       $category = Category::create($input);

        $action_by = Auth::user()->name;
        $action_for = $request->title;
        $action = 'Create Category';

        Log::create([
            'action_by' => $action_by,
            'action_for' => $action_for,
            'action' => $action,
        ]);

        Session::flash('message', 'You successfully created a category');
        return redirect()->route('admin.category.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', [
            'category' => $category
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|unique:categories,title|regex:/^[a-zA-Z][a-zA-Z\\s]+$/'
        ]);
        $category = Category::findOrFail($id);
        $input = $request->all();

        $category->update($input);

        Session::flash('message', 'You successfully updated the category');

        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $action_by = Auth::user()->name;
        $action_for = $category->title;
        $action = 'Delete Category';

        Log::create([
            'action_by' => $action_by,
            'action_for' => $action_for,
            'action' => $action,
        ]);

        $category->delete();

        Session::flash('message', 'You successfully deleted the category');
        return redirect()->route('admin.category.index');
    }
}
