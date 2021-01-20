<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        
        return view("backend.contacts.table",compact("contacts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.contacts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new Contact();
        $request->validate([
            "title" => "required",
            "description" => 'required',
            "title2" => 'required',
            "adresse" => 'required',
            "numero" => 'required',
            "email" => 'required',
            "button" => 'required',
            
        ]);

        $contact->title = $request->title;
        $contact->description = $request->description;
        $contact->title2 = $request->title2;
        $contact->adresse = $request->adresse;
        $contact->numero = $request->numero;
        $contact->email = $request->email;
        $contact->button = $request->button;
        
        
        
        
        

        $contact->save();
        return redirect()->route("contact.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view("backend.contacts.edit", compact("contact"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            "title" => "required",
            "description" => 'required',
            "title2" => 'required',
            "adresse" => 'required',
            "numero" => 'required',
            "email" => 'required',
            "button" => 'required',
            
        ]);

        $contact->title = $request->title;
        $contact->description = $request->description;
        $contact->title2 = $request->title2;
        $contact->adresse = $request->adresse;
        $contact->numero = $request->numero;
        $contact->email = $request->email;
        $contact->button = $request->button;
        
        
        
        
        

        $contact->save();
        return redirect()->route("contact.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->back();
    }
}
