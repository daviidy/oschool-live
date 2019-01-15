<?php

namespace App\Http\Controllers;

use App\Formation;
use Illuminate\Http\Request;
use Image;
use Auth;
use App\Categorie;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = Formation::orderby('id','asc')->paginate(30);
        return view('formations.index', ['formations' => $formations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (Auth::check() && Auth::user()->isAdmin()) {
        $categories = Categorie::orderby ('nom','asc')->paginate(30);
        return view('formations.create', ['categories' => $categories]);
      }
      else {
        return redirect('home');
      }
    }





    //pour voir la liste des étudiants par formation

    public function formation(Request $request)
    {
      $reponse = $request['formation'];
      if (Auth::check()) {
        if(Auth::user()->isAdmin() || Auth::user()->type4 == "partner") {

        //on recupere les etudiants qui sont en règle
        //ensuite on recupere les progressions relatives a la formation choisie

        $students = Auth::user()->students()->where('statut', 'OK')->get();
        $formation = Formation::where('nom', $reponse)->get();
        $formations = Formation::orderby ('id','asc')->paginate(1000);

        return view('users.active')->with(['students' => $students, 'reponse' => $reponse, 'formation' => $formation, 'formations' => $formations]);



      }
      else {
        return redirect('home');
      }
    }

  }//fin fonction










    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $formation = Formation::create($request->all());

      if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('/avatars/courses/' . $filename));
        $formation->image = $filename;
        $formation->save();
      }

      return redirect('home')->with('status', 'La formation a bien été créée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show(Formation $formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formation $formation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $formation)
    {
        //
    }
}
