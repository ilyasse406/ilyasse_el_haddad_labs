<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navbars = Navbar::all();
        return view("backend.navbars.table", compact("navbars"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.navbars.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $navbar = new Navbar();
        $request->validate([
            "path" => "required",
            "lien1" => "required",
            "lien2" => "required",
            "lien3" => "required",
            "lien4" => "required",
            
        ]);

        $navbar->lien1 = $request->lien1;
        $navbar->lien2 = $request->lien2;
        $navbar->lien3 = $request->lien3;
        $navbar->lien4 = $request->lien4;
        


        $navbar->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");

        $navbar->save();
        return redirect()->route("navbar.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function show(Navbar $navbar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function edit(Navbar $navbar)
    {
        return view("backend.navbars.edit", compact("navbar"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navbar $navbar)
    {
        $request->validate([
            "path" => "required",
            "lien1" => "required",
            "lien2" => "required",
            "lien3" => "required",
            "lien4" => "required",
            
        ]);

        $navbar->lien1 = $request->lien1;
        $navbar->lien2 = $request->lien2;
        $navbar->lien3 = $request->lien3;
        $navbar->lien4 = $request->lien4;
        

        // Storage::disk("public")->delete("img/"  .  $navbar->path);
        $navbar->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");

        $navbar->save();
        return redirect()->route("navbar.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navbar $navbar)
    {
        Storage::disk("public")->delete("img/"  .  $navbar->path);
        $navbar->delete();
        return redirect()->back();
    }
}
