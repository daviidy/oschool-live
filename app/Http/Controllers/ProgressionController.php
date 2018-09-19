<?php

namespace App\Http\Controllers;

use App\Progression;
use Illuminate\Http\Request;
use Auth;
use App\User;

class ProgressionController extends Controller
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
      if (Auth::check() && Auth::user()->isTeacher()) {
        return view('progressions.create');
      }
      else {
        return redirect('home')->with('status', 'La progression a bien été enregistrée');
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
      Progression::create($request->all());
      return redirect('home')->with('status', 'La progression a bien été marquée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Progression  $progression
     * @return \Illuminate\Http\Response
     */
    public function show(Progression $progression)
    {
        //
    }


    public function valider(Progression $progression)
    {
      $progression->update([
        'statut' => 'Validé'
      ]);
      return back()->with('status', 'Le statut de la progression a bien été mis à jour' );
    }


    public function programme()
    {
      return view('users.programme');
    }


    public function voir(User $user)
    {
      return view('progressions.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Progression  $progression
     * @return \Illuminate\Http\Response
     */
    public function edit(Progression $progression)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Progression  $progression
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Progression $progression)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Progression  $progression
     * @return \Illuminate\Http\Response
     */
    public function destroy(Progression $progression)
    {
        //
    }
}
