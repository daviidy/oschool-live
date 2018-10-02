<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\User;
use Auth;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::check()) {
        if (!Auth::user()->isTeacher() && !Auth::user()->isAdmin()) {
          $classrooms = Classroom::where('etudiant', Auth::user()->name)->get();
          return view('classrooms.index', ['classrooms' => $classrooms]);
        }
        return view('classrooms.index');
      }
      else {
        return redirect('/');
      }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (Auth::check() && Auth::user()->isTeacher()) {
          return view('classrooms.ajouter');
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
      Classroom::create($request->all());
      return redirect('home')->with('status', 'La session a bien été créée. Rendez-vous dans la progression de l\'étudiant pour marquer ses progrès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        return view('classrooms.edit', ['classroom' => $classroom]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classroom $classroom)
    {
        $classroom->update($request->all());
        return redirect('home')->with('status', 'Vos informations ont bien été entregistrées !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        //
    }
}
