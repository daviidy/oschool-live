<?php

namespace App\Http\Controllers;

use App\Etatprojet;
use Illuminate\Http\Request;
use Auth;
use Image;
use App\User;
use App\Projet;

class EtatprojetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $etatprojet = Etatprojet::create($request->all());
        return redirect('home')->with('status', 'Les livrables ont bien été recus. Regardez votre tableau de bord pour suivre l\'évaluation du projet');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Etatprojet  $etatprojet
     * @return \Illuminate\Http\Response
     */
    public function show(Etatprojet $etatprojet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etatprojet  $etatprojet
     * @return \Illuminate\Http\Response
     */
    public function edit(Etatprojet $etatprojet)
    {
      //on trouve le projet relatif a l'état en cours grace a etatprojet->id
        $projet = Projet::find($etatprojet->projet_id);
        $user = User::find($etatprojet->user_id);
        return view('etatprojets.edit', ['etatprojet' => $etatprojet, 'projet' => $projet, 'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Etatprojet  $etatprojet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etatprojet $etatprojet)
    {
      $etatprojet->update($request->all());

      $detail=$request->commentaire;

      $dom = new \domdocument();
      $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

      $images = $dom->getelementsbytagname('img');

      foreach($images as $k => $img){
          $data = $img->getattribute('src');

          list($type, $data) = explode(';', $data);
          list(, $data)      = explode(',', $data);

          $data = base64_decode($data);
          $image_name= time().$k.'.png';
          $path = public_path() .'/img/etatprojets/'. $image_name;

          file_put_contents($path, $data);

          $img->removeattribute('src');
          $img->setattribute('src', '/img/etatprojets/'. $image_name);
      }

      $detail = $dom->savehtml();
      $etatprojet->commentaire = $detail;
      $etatprojet->save();
      return redirect('home')->with('status', 'Les informations du projet ont bien été mises à jour !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Etatprojet  $etatprojet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etatprojet $etatprojet)
    {
        //
    }
}
