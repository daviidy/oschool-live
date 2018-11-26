<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Formation;
use App\Classroom;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
      if (Auth::check()) {

        $teachers = User::orderby ('id','asc')->where('type2', 'teacher')->paginate(30);

        if (Auth::user()->type3 == "admin") {
          return view('users.dashboard-admin', ['teachers' => $teachers]);
        }
        elseif (Auth::user()->type2 == "teacher") {
          $sessions = Classroom::where('formateur', Auth::user()->name)->orderby('date', 'desc')->paginate(30);
          return view('classrooms.index', ['sessions' => $sessions]);
        }
        else {
          $classrooms = Classroom::where('etudiant', Auth::user()->name)->orderby('date', 'desc')->paginate(30);
          return view('classrooms.index', ['classrooms' => $classrooms]);
        }
      }
      else {
        return redirect('/');
      }

    }

    public function classrooms()

    {
      if (Auth::check()) {
        return view('classrooms.index');
      }
      else {
        return redirect('/');
      }

    }


    //route vers le profi user

    public function dashboard()

    {


        if (Auth::check() && Auth::user()->type3 !== "admin" && Auth::user()->type2 !== "teacher") {
          $teachers = User::orderby ('id','asc')->where('type2', 'teacher')->paginate(30);
          return view('users.dashboard', ['teachers' => $teachers]);
        }

      else {
        return redirect('/');
      }

    }

    public function dashboardA()

    {


        if (Auth::check() && Auth::user()->type3 == "admin") {
          $teachers = User::orderby ('id','asc')->where('type2', 'teacher')->paginate(30);
          return view('users.dashboard-admin', ['teachers' => $teachers]);
        }

      else {
        return redirect('/');
      }

    }

    public function dashboardT()

    {


        if (Auth::check() && Auth::user()->type2 == "teacher") {
          $teachers = User::orderby ('id','asc')->where('type2', 'teacher')->paginate(30);
          return view('users.dashboard-teacher', ['teachers' => $teachers]);
        }

      else {
        return redirect('/');
      }

    }



}
