<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banniere;
use App\Models\Cardrapid;
use App\Models\Contact;
use App\Models\Navbar;
use App\Models\Promotion;
use App\Models\Slogan;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Title;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $navbars = Navbar::all();
        $slogans = Slogan::all();
        $bannieres = Banniere::all();
        // $cardrapids = Cardrapid::all();
        $videos = Video::all();
        $testimonials = Testimonial::all();
        
        $cardrapids = Cardrapid::paginate(9, ["*"], "cardrapids");
        $titles = Title::first();
        $abouts = About::first();

        $str = Str::of($abouts->title)->replace('(', '<span>');
        $str2 = Str::of($str)->replace(')', '</span>');

        $st = Str::of($titles->title)->replace('(', '<span>');
        $st2 = Str::of($st)->replace(')', '</span>');
        
        $counter = 0;
        $users = User::inRandomOrder()->get();

        $ok = 1;

        $promotions = Promotion::all();


        $contacts = Contact::all();

        

        return view("/welcome", compact("navbars", "slogans", "bannieres", "cardrapids","abouts","str", "str2","videos", "testimonials","titles","st","st2","users","ok","counter","promotions","contacts"));
    }
}
