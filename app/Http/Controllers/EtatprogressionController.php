<?php

namespace App\Http\Controllers;

use App\Etatprogression;
use Illuminate\Http\Request;

class EtatprogressionController extends Controller
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

    //valider la progression d'un étudiant

    public function valider(Etatprogression $etatprogression) 
    {
      $etatprogression->update([
        'statut' => 'Validé'
      ]);
      return back()->with('status', 'Le statut de la progression a bien été mis à jour' );
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Etatprogression::create($request->all());
      return redirect('home')->with('status', 'La progression a bien été marquée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Etatprogression  $etatprogression
     * @return \Illuminate\Http\Response
     */
    public function show(Etatprogression $etatprogression)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etatprogression  $etatprogression
     * @return \Illuminate\Http\Response
     */
    public function edit(Etatprogression $etatprogression)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Etatprogression  $etatprogression
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etatprogression $etatprogression)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Etatprogression  $etatprogression
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etatprogression $etatprogression)
    {
        //
    }
}
