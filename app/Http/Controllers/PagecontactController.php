<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class PagecontactController extends Controller
{
    public function index() {
        $maps = Map::first();
        return view("/contact", compact("maps"));
    }
}
