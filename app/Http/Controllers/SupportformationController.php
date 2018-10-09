<?php

namespace App\Http\Controllers;

use App\Supportformation;
use Illuminate\Http\Request;
use App\Formation;

class SupportformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $supportformations = Supportformation::orderby('id','asc')->paginate(30);
      return view('supportformations.index', ['supportformations' => $supportformations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formations = Formation::orderby('id','asc')->paginate(30);
        return view('supportformations.create', ['formations' => $formations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $supportformation = Supportformation::create($request->all());

      return redirect('supportformations')->with('status', 'La document a bien été ajouté !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supportformation  $supportformation
     * @return \Illuminate\Http\Response
     */
    public function show(Supportformation $supportformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supportformation  $supportformation
     * @return \Illuminate\Http\Response
     */
    public function edit(Supportformation $supportformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supportformation  $supportformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supportformation $supportformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supportformation  $supportformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supportformation $supportformation)
    {
        //
    }
}
