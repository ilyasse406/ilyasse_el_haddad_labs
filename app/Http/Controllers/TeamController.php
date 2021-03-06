<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view("backend.teams.table", compact("teams"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.teams.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = new Team();
        $request->validate([
            "path" => 'required',
            "name" => "required",
            "title" => 'required',
            
            
        ]);

        $team->name = $request->name;
        $team->title = $request->title;
        
        
        
        $team->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");
        

        $team->save();
        return redirect()->route("team.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view("backend.teams.edit", compact("team"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            "path" => 'required',
            "name" => "required",
            "title" => 'required',
            
            
        ]);

        $team->name = $request->name;
        $team->title = $request->title;
        $team->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");
        

        $team->save();
        return redirect()->route("team.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        Storage::disk("public")->delete("img/"  .  $team->path);
        $team->delete();
        return redirect()->back();
    }
}
