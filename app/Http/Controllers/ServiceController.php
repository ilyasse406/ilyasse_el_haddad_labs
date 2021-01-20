<?php

namespace App\Http\Controllers;

use App\Models\Cardrapid;
use App\Models\Contact;
use App\Models\Navbar;
use App\Models\Newsletter;
use App\Models\Primet;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $navbars = Navbar::all();
        $cardrapids = Cardrapid::all();
        $newsletters = Newsletter::all();
        $contacts = Contact::all();

        $primets = Primet::first();
        $str = Str::of($primets->title)->replace('(', '<span>');
        $str2 = Str::of($str)->replace(')', '</span>');


        $ok = 1;



        return view("service", compact("navbars", "cardrapids","primets","str","str2","ok","newsletters", "contacts"));
    }
}
