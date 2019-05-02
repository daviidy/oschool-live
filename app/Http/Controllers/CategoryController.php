<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::check() && Auth::user()->isAdmin()) {
        $categories = Category::orderby('id','asc')->paginate(30);
        return view('categories.index', ['categories' => $categories]);
      }
      else {
        return redirect('home');
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (Auth::check() && Auth::user()->isAdmin()) {
        return view('categories.create');
      }
      else {
        return redirect('home');
      }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $category = Category::create($request->all());

      return redirect('home')->with('status', 'La catégorie a bien été créée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('categories.show', ['category' => $category]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
