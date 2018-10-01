<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Image;
use Auth;
use App\Classroom;
use App\Progression;
use App\Formation;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::user()->isAdmin()) {
        $teachers = User::orderby ('id','asc')->where('type', 'teacher')->paginate(30);
        $students = User::orderby ('id','asc')->where('type', 'default')->paginate(30);
        return view('users.list', ['teachers' => $teachers, 'students' => $students]);
      }
      else {
        return redirect('home');
      }
    }


    public function accueil()

    {

        $formations = Formation::orderby ('id','asc')->paginate(30);
        return view('accueil', ['formations' => $formations]);

    }

    //montrer les guides formateurs aux formateurs

    public function documents()
    {
      if (Auth::user()->isTeacher() || Auth::user()->isAdmin()) {
        return view('users.doc');
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
        //
    }

    /**
     * Inscrire un étudiant à une formation
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function inscription(Request $request)
    {
      //première chose, on retrouve l'étudiant à partir de l'id envoyé en paramètre
      //secondo on attache cet etudiant à la formation en question

      if (Auth::check() && Auth::user()->isAdmin() ) {
        $formation = Formation::find($request['formation_id']);
        $user = User::find($request['user_id']);
        $user->formations()->attach($formation);

        return redirect('home')->with('status', 'L\'utilisateur a bien été inscrit à la formation');
      }
      else {
        return redirect('home');
      }


    }


    public function inscrire(User $user)
    {
      //première chose, on retrouve l'étudiant à partir de l'id envoyé en paramètre
      //secondo on attache cet etudiant à la formation en question

      if (Auth::check() && Auth::user()->isAdmin() ) {
        $formations = Formation::orderby ('id','asc')->paginate(30);
        return view('users.inscription', ['user' => $user, 'formations' => $formations]);
      }
      else {
        return redirect('home');
      }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if ($user->type == 'default') {
          $classroomsstudents = Classroom::where('etudiant', $user->name)->get();
          $teachers = User::orderby ('id','asc')->where('type', 'teacher')->paginate(30);
          return view('users.show', ['user' => $user, 'teachers' => $teachers, 'classroomsstudents' => $classroomsstudents]);
        }
        $teachers = User::orderby ('id','asc')->where('type', 'teacher')->paginate(30);
        return view('users.show', ['user' => $user, 'teachers' => $teachers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
      $user->update($request->all());

      if($request->hasFile('photo')){
        $image = $request->file('photo');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('/avatars/users/' . $filename));
        $user->photo = $filename;
        $user->save();
    }
    return back()->with('status', 'Vos informations ont bien été entregistrées !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
