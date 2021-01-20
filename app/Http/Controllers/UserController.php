<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::all();
        return view("backend.admins.table", compact("users"));
        
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
        // $user = new User();
        // $request->validate([
        //     "name" => "required",
        //     "email" => "required | unique:users",
        //     "password" => "required | min:8",
        //     "role_id" => "required",
        //     "profile_photo_path" => "required",
        // ]);

        // $user->name = $request->name;
        // $user->email = $request->email;
        // if ($user->password !== $request->password) {
        //     $user->password = Hash::make($request->password);
        // }
        // $user->role_id = $request->role_id;
        // $user->profile_photo_path = $request->file("profile_photo_path")->hashName();
        // $request->file("profile_photo_path")->storePublicly("img", "public");

        // $user->save();
        // return redirect()->route("home");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view("backend.users.user", compact("user"));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data, User $user)
    {
        $data->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required | min:8",
            
            

            
        ]);

        $user->name = $data->name;
        $user->email = $data->email;
        if ($user->password !== $data->password) {
            $user->password = Hash::make($data->password);
        }
        Storage::disk("public")->delete("img/"  .  $user->profile_photo_path);
        $user->profile_photo_path = $data->file("profile_photo_path")->hashName();
        $data->file("profile_photo_path")->storePublicly("img", "public");
        
        

        $user->save();
        return redirect()->route("home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
