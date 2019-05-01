<?php

namespace App\Http\Controllers;
use App\Partner;
use Auth;
use Image;

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

  //function to display the creation form
  public function create()
  {
    if (Auth::check() && Auth::user()->isAdmin()) {
      return view('partners.create');
    }
    else {
      return redirect('home');
    }
  }

  //function to store the resource in database
  public function store(Request $request)
  {
    $formation = Partner::create($request->all());

    if($request->hasFile('image')){
      $image = $request->file('image');
      $filename = time() . '.' . $image->getClientOriginalExtension();
      Image::make($image)->save(public_path('/avatars/partners/' . $filename));
      $formation->image = $filename;
      $formation->save();
    }

    return redirect('home')->with('status', 'Le partenaire a bien été ajouté !');
  }

}
