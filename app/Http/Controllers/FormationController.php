<?php

namespace App\Http\Controllers;

use App\Formation;
use Illuminate\Http\Request;
use Image;
use Auth;
use App\Category;
use App\Partner;
use App\Language;
use App\Prerequisite;
use App\Offer;
use App\Services\Slug;
use Carbon\Carbon;
use App\User;
use App\Categorycharac;

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
        $categories = Category::orderby ('nom','asc')->paginate(30);
        $partners = Partner::orderby ('name','asc')->paginate(30);
        $languages = Language::orderby ('name','asc')->paginate(30);
        $prerequisites = Prerequisite::orderby ('description','asc')->paginate(30);
        $offers = Offer::orderby ('name','asc')->paginate(30);
        $users = User::where('type2', 'teacher')->orderby ('id','asc')->paginate(30);
        return view('formations.create', ['categories' => $categories,
                                          'partners' => $partners,
                                          'languages' => $languages,
                                          'prerequisites' => $prerequisites,
                                          'users' => $users,
                                          'offers' => $offers,
                                        ]);
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


  //pour afficher la liste des projets par formation

  public function projects(Formation $formation)
  {
    if (Auth::check() && count(Auth::user()->formations)) {

      return view('formations.projects', ['formation' => $formation]);

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
      $formation = Formation::create($request->all());

      $slug = new Slug();
      $formation->slug = $slug->createSlug($request['nom'], $request['id']);

      //we get all the arrays for language, partner and prerequisite fields
      $languages = $request->language_id;
      $prerequisites = $request->prerequisite_id;
      $partners = $request->partner_id;
      $offers = $request->offer_id;

      //we loop each index of these arrays and attach it to the  given course
      foreach ($languages as $language) {
        $language_id = Language::find($language);
        $formation->languages()->attach($language_id);
      }

      foreach ($offers as $offer) {
        $offer_id = Offer::find($offer);
        $formation->offers()->attach($offer_id);
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

      $time = strtotime($formation->start_date);

      $formation->start_date = date('d-m-Y',$time);

      $formation->save();


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
        $categorycharacs = Categorycharac::orderby('id','asc')->paginate(30);
        return view('formations.show', ['formation' => $formation, 'categorycharacs' => $categorycharacs]);
    }

    /**
     * Display the specified resource, this time with slug.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function showSlug($slug)
    {
        $formation = Formation::where('slug', $slug)->firstOrFail();
        $categorycharacs = Categorycharac::orderby('id','asc')->paginate(30);
        $users = User::where('name', $formation->teacher)->get();
        return view('formations.show', ['formation' => $formation, 'categorycharacs' => $categorycharacs, '$users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation)
    {
      if (Auth::check() && Auth::user()->isAdmin()) {
          //we take in db, all categories, partners, languages, and prerequisites
          //to assign them to the course, if needed
            $categories = Category::orderby ('nom','asc')->paginate(30);
            $partners = Partner::orderby ('name','asc')->paginate(30);
            $languages = Language::orderby ('name','asc')->paginate(30);
            $prerequisites = Prerequisite::orderby ('description','asc')->paginate(30);
            $offers = Offer::orderby ('name','asc')->paginate(30);
            $users = User::where('type2', 'teacher')->orderby ('id','asc')->paginate(30);
            return view('formations.edit', ['formation' => $formation,
                                            'categories' => $categories,
                                            'partners' => $partners,
                                            'languages' => $languages,
                                            'prerequisites' => $prerequisites,
                                            'users' => $users,
                                            'offers' => $offers,
                                          ]);
        }
        else {
          return redirect('home');
        }
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
      $offers = $request->offer_id;

      //we loop each index of these arrays and attach it to the  given course
      //we check, also if there is no already references of selected fields in db
      if ($languages) {
        foreach ($languages as $language) {
          $language_id = Language::find($language);
          $formation->languages()->sync($language_id, false);
        }
      }

      if ($offers) {
        foreach ($offers as $offer) {
          $offer_id = Offer::find($offer);

          $formation->offers()->sync($offer_id, false);

        }
      }

      if ($prerequisites) {
        foreach ($prerequisites as $prerequisite) {
          $prerequisite_id = Prerequisite::find($prerequisite);
          $formation->prerequisites()->sync($prerequisite_id, false);
        }
      }

      if ($partners) {
        foreach ($partners as $partner) {
          $partner_id = Partner::find($partner);
          $formation->partners()->sync($partner_id, false);
        }
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
        $formation->delete();
        return redirect('formations')->with('status', 'Formation supprimée de la base de données' );
    }
}
