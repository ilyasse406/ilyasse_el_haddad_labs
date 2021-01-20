<?php

namespace App\Http\Controllers;

use App\Models\Primet;
use Illuminate\Http\Request;

class PrimetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $primets = Primet::all();
        return view("backend.primes.table",compact("primets"));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Primet  $primet
     * @return \Illuminate\Http\Response
     */
    public function show(Primet $primet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Primet  $primet
     * @return \Illuminate\Http\Response
     */
    public function edit(Primet $primet)
    {
        return view("backend.primes.editTitle",compact("primet"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Primet  $primet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Primet $primet)
    {
        $request->validate([
            "title" => "required",
            
            
        ]);

        $primet->title = $request->title;
        

        $primet->save();
        return redirect()->route("primet.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Primet  $primet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Primet $primet)
    {
        //
    }
}
