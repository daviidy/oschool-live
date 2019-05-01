<?php

namespace App\Http\Controllers;

use App\Prerequisite;
use Illuminate\Http\Request;
use Auth;

class PrerequisiteController extends Controller
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
      if (Auth::check() && Auth::user()->isAdmin()) {
        return view('prerequisites.create');
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
      $formation = Prerequisite::create($request->all());

      return redirect('home')->with('status', 'Le prérequis a bien été ajouté !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prerequisite  $prerequisite
     * @return \Illuminate\Http\Response
     */
    public function show(Prerequisite $prerequisite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prerequisite  $prerequisite
     * @return \Illuminate\Http\Response
     */
    public function edit(Prerequisite $prerequisite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prerequisite  $prerequisite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prerequisite $prerequisite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prerequisite  $prerequisite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prerequisite $prerequisite)
    {
        //
    }
}
