<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.categories.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create' ,[
            'categories' => Category::all()
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

        $validateData = $request->validate([

            'name' => 'required|max:255',
            'slug' => 'required|unique:categories',
        ]);

        Category::create($validateData);

        return redirect()->route('categories.index')->with('success','New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', [
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required'
        ]);

        $category = New Category;
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->save();

        // $rules = [
        //     'name' => 'required|max:255',
        // ];

        // if($request->slug != $category->slug){
        //     $rules['slug'] = 'required|unique:posts';
        // }

        // $validateData = $request->validate($rules);
        // Post::where('id' , $category->id)->update($validateData);
        return redirect('/dashboard/categories')->with('success','Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        {
            Category::destroy($category->id);
            return redirect('/dashboard/categories')->with('toast_success','Post has been deleted!');
        }
    }
}
