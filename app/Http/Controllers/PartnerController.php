<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function partner()
  {
    $partners = User::orderby ('id','asc')->where('type4', 'partner')->paginate(30);

      return view('formations.index', ['partners' => $partners]);
  }
}
