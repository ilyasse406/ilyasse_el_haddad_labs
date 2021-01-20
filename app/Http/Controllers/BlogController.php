<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\Commentaire;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $articles = article::paginate(3, ["*"], "articles");
        
        return view("blog", compact("articles"));
    }

    public function show(article $article, $id)
    {
        $show = article::find($id);
        
        $users = User::find($id);
        $commentaires = article::paginate(3, ["*"], "commentaires");
        // $comments = Commentaire::all();
        
        return view("blog-post", compact("show", "article","users","commentaires"));
    }
}
