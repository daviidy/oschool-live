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

     //formulaire pour afficher le formulaire pour
     //marquer une progression
    public function create()
    {
      if (Auth::check() && Auth::user()->isTeacher() && Auth::user()->formations()) {


              return view('progressions.ajouter');


        }
      else {
        return redirect('home');
      }
    }

    //fonction qui redirige le prof vers le bon formulaire
    //en fonction de la formation qu'il a

    public function progression(Request $request)
    {
      $formation = $request['formation'];
      if (Auth::check() && Auth::user()->isTeacher() && Auth::user()->formations()) {

        $students = Auth::user()->students()->where('statut', 'OK')->get();

        if ($formation == 'Développeur Web Junior') {
          return view('progressions.devweb')->with(['students' => $students, 'formation' => $formation]);
        }
        elseif ($formation == 'Social Media') {
          return view('progressions.socialmedia')->with(['students' => $students, 'formation' => $formation]);
        }
        elseif ($formation == 'Développement Mobile') {
          return view('progressions.devmobile')->with(['students' => $students, 'formation' => $formation]);
        }
        elseif ($formation == 'Développement Android') {
          return view('progressions.android')->with(['students' => $students, 'formation' => $formation]);
        }

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
      $sessionString = implode(",", $request->get('session'));
      Progression::create([
        'formation' => $request->get('formation'),
        'section' => $request->get('section'),
        'statut' => $request->get('statut'),
        'user_id' => $request->get('user_id'),
        'session' => $sessionString,
    ]);
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
