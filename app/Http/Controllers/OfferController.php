<?php

namespace App\Http\Controllers;

use App\Offer;
use App\Characteristic;
use Auth;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->isAdmin()) {
          $offers = Offer::orderby('id','asc')->paginate(30);
          return view('offers.index', ['offers' => $offers]);
        }
        else {
          return redirect('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $characteristics = Characteristic::orderby('id','asc')->paginate(30);
        return view('offers.create', ['characteristics' => $characteristics]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $offer = Offer::create($request->all());


        $characteristics = $request->characteristic_id;

        foreach ($characteristics as $characteristic) {
          $characteristic_id = Characteristic::find($characteristic);
          $offer->characteristics()->attach($characteristic_id);
        }
        return redirect('home')->with('status', 'L\'offre a bien été créée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
      $characteristics = Characteristic::orderby('id','asc')->paginate(30);
      return view('offers.edit', ['characteristics' => $characteristics, 'offer' => $offer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        $offer->update($request->all());
        $characteristics = $request->characteristic_id;

        foreach ($characteristics as $characteristic) {
          $characteristic_id = Characteristic::find($characteristic);
          $offer->characteristics()->sync($characteristic_id, false);
        }

        return redirect('offers')->with('status', 'Modifications apportées' );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
      $offer->delete();
      return redirect('offers')->with('status', 'Offre supprimée de la base de données' );
    }
}
