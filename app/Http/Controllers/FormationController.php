<?php

namespace App\Http\Controllers;

use App\Formation;
use Illuminate\Http\Request;
use Image;
use Auth;
use App\Categorie;
use App\Partner;
use App\Language;
use App\Prerequisite;

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

      //we get all the arrays for language, partner and prerequisite fields
      $languages = $request->language_id;
      $prerequisites = $request->prerequisite_id;
      $partners = $request->partner_id;

      //we loop each index of these arrays and attach it to the  given course
      foreach ($languages as $language) {
        $language_id = Language::find($language);
        $formation->languages()->attach($language_id);
      }

      foreach ($prerequisites as $prerequisite) {
        $prerequisite_id = Prerequisite::find($prerequisite);
        $formation->prerequisites()->attach($prerequisite_id);
      }

      foreach ($partners as $partner) {
        $partner_id = Partner::find($partner);
        $formation->partners()->attach($partner_id);
      }


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
        return view('formations.show', ['formation' => $formation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation)
    {
      //we take in db, all categories, partners, languages, and prerequisites
      //to assign them to the course, if needed
        $categories = Categorie::orderby ('nom','asc')->paginate(30);
        $partners = Partner::orderby ('name','asc')->paginate(30);
        $languages = Language::orderby ('name','asc')->paginate(30);
        $prerequisites = Prerequisite::orderby ('description','asc')->paginate(30);
        return view('formations.edit', ['formation' => $formation,
                                        'categories' => $categories,
                                        'partners' => $partners,
                                        'languages' => $languages,
                                        'prerequisites' => $prerequisites,]);
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
      $formation->update($request->all());

      //we get all the arrays for language, partner and prerequisite fields
      $languages = $request->language_id;
      $prerequisites = $request->prerequisite_id;
      $partners = $request->partner_id;

      //we loop each index of these arrays and attach it to the  given course
      foreach ($languages as $language) {
        $language_id = Language::find($language);
        $formation->languages()->attach($language_id);
      }

      foreach ($prerequisites as $prerequisite) {
        $prerequisite_id = Prerequisite::find($prerequisite);
        $formation->prerequisites()->attach($prerequisite_id);
      }

      foreach ($partners as $partner) {
        $partner_id = Partner::find($partner);
        $formation->partners()->attach($partner_id);
      }

      if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('/avatars/courses/' . $filename ) );

        $formation->image = $filename;
        $formation->save();

      }
      return redirect('formations')->with('status', 'Modifications apportées' );

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
