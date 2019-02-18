<?php

namespace App\Http\Controllers;

use App\Projet;

use App\Progression;
use Illuminate\Http\Request;
use Auth;
use Image;
use App\Formation;
use App\Etatprojet;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::check()) {
          $projets = Projet::orderby('id','asc');
          return view('projets.index', ['projets' => $projets]);
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
        $formations = Formation::orderby('id','asc')->paginate(30);
        $progressions = Progression::orderby('id','asc')->paginate(30);
        return view('projets.create', ['formations' => $formations, 'progressions' => $progressions]);
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
      $projet = Projet::create($request->all());
      if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('/avatars/projects/' . $filename));
        $projet->image = $filename;
        $projet->save();
      }

      $formation = Formation::find($request['formation_id']);
      $projet->formations()->attach($formation);

      //on trouve le projet renseigné dans le formulaire
      $progression = Progression::find($request['progression_id']);
      //on lie ce projet à la progression crée
      $projet->progressions()->attach($progression);

      return redirect('home')->with('status', 'Le projet a bien été crée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
     //ici on envoie un projet en modification pour creer un nouvel état projet
    public function show(Projet $projet)
    {
        return view('projets.show', ['projet' => $projet]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */

    public function edit(Projet $projet)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projet $projet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        //
    }
}
