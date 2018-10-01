<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Formation;

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

        $teachers = User::orderby ('id','asc')->where('type', 'teacher')->paginate(30);
        return view('users.dashboard', ['teachers' => $teachers]);
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
}
