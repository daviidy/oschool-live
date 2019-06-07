<?php

namespace App\Http\Controllers;

use App\Characteristic;
use App\Categorycharac;
use Illuminate\Http\Request;

class CharacteristicController extends Controller
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
        $categorycharacs = Categorycharac::orderby('name','asc')->paginate(30);
        return view('characteristics.create', ['categorycharacs' => $categorycharacs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $characteristic = Characteristic::create($request->all());
        return redirect()->back()->with('status', 'La caractéristique a bien été créée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Characteristic  $characteristic
     * @return \Illuminate\Http\Response
     */
    public function show(Characteristic $characteristic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Characteristic  $characteristic
     * @return \Illuminate\Http\Response
     */
    public function edit(Characteristic $characteristic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Characteristic  $characteristic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Characteristic $characteristic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Characteristic  $characteristic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Characteristic $characteristic)
    {
        //
    }
}
