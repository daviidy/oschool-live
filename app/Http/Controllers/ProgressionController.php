<?php

namespace App\Http\Controllers;

use App\Progression;
use App\Formation;
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

     //formulaire pour afficher le formulaire pour
     //créer une progression
    public function create()
    {
      if (Auth::check() && Auth::user()->isAdmin()) {

              $formations = Formation::orderby('id','asc')->paginate(30);

              return view('progressions.create', ['formations' => $formations]);


        }
      else {
        return redirect('home');
      }
    }

    //fonction qui redirige le prof vers le bon formulaire
    //en fonction de la formation qu'il a
    //ce formulaire permettra de créer un etat de progression
    //pour un etudiant donné

    public function progression(Request $request)
    {
      $formation = $request['formation'];
      if (Auth::check() && Auth::user()->isTeacher() && Auth::user()->formations()) {

        //on recupere les etudiants qui sont en règle
        //ensuite on recupere les progressions relatives a la formation choisie

        $students = Auth::user()->students()->where('statut', 'OK')->get();
        $progressions = Progression::where('formation', $formation)->get();

        return view('etatprogressions.index')->with(['students' => $students, 'formation' => $formation, 'progressions' => $progressions]);



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
      /*
      $sessionString = implode(",", $request->get('session'));
      Progression::create([
        'formation' => $request->get('formation'),
        'section' => $request->get('section'),
        'statut' => $request->get('statut'),
        'user_id' => $request->get('user_id'),
        'session' => $sessionString,
    ]);
    */
      Progression::create($request->all());
      return redirect('home')->with('status', 'La progression a bien été crée pour cette formation');
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
