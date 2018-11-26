<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function admin()
  {
    $teachers = User::orderby ('id','asc')->where('type2', 'teacher')->paginate(30);

      return view('users.dashboard-admin', ['teachers' => $teachers]);

  }
}
