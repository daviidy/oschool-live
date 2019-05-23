<?php

namespace App\Http\Controllers;

use App\Guideprojet;
use App\Projet;
use Illuminate\Http\Request;

class GuideprojetController extends Controller
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
        $projets = Projet::orderby('id', 'asc')->paginate(30);
        return view('guideprojets.create', ['projets' => $projets]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $guideprojet = Guideprojet::create($request->all());

      return redirect('home')->with('status', 'Le guide projet a bien été ajouté !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guideprojet  $guideprojet
     * @return \Illuminate\Http\Response
     */
    public function show(Guideprojet $guideprojet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guideprojet  $guideprojet
     * @return \Illuminate\Http\Response
     */
    public function edit(Guideprojet $guideprojet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guideprojet  $guideprojet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guideprojet $guideprojet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guideprojet  $guideprojet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guideprojet $guideprojet)
    {
        //
    }
}
