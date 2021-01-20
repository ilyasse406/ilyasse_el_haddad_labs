<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\Categorie;
use App\Models\Newsletter;
use App\Models\Tag;
use App\Models\User;
use App\Models\Verification;
use App\Notifications\ArticlePublished;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        $verifications = Verification::all();
        return view("backend.articles.table", compact("articles",'verifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        $verifications = Verification::all();
        $tags = Tag::all();
        return view("backend.articles.create", compact("categories","tags","verifications"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $article = new article();
        $newsletter = Newsletter::all();
        $request->validate([
            "path" => "required",
            "title" => 'required',
            "description" => 'required',
            
            
        ]);

        $article->verification_id = $request->verification_id;

        $article->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");

        $article->title = $request->title;
        $article->description = $request->description;
        $article->user_id = Auth::id();

        foreach ($newsletter as $e) {
            $e->notify(new ArticlePublished($article));

        }
        $article->save();

        $article->categories()->attach($request->categorie);
        $article->tags()->attach($request->tag);
        return redirect()->route("article.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(article $article, $id)
    {
        $show = article::find($id);
        
        return view("blog-post", compact("show", "article"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(article $article)
    {
        $categories = Categorie::all();
        $tags = Tag::all();
        return view("backend.articles.edit", compact("categories", "tags","article"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, article $article)
    {
        $request->validate([
            "path" => "required",
            "title" => 'required',
            "description" => 'required',
            
            
        ]);

        
        $article->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");

        $article->title = $request->title;
        $article->description = $request->description;

        $article->user_id = Auth::id();

       
        
        
        
        
        

        $article->save();


        $article->categories()->detach();
        $article->tags()->detach();
        $article->categories()->attach($request->categorie);
        $article->tags()->attach($request->tag);
        return redirect()->route("article.index");
    }



    public function sendArticle(Request $request, $id)
    {
        $this->authorize("viewAny", article::class);
        $article = article::find($id);
        $article->verification_id = $request->verification_id;

        $article->save();

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(article $article)
    {
        
        $article->delete();
        return redirect()->back();
    }


    public function verify($id) {
        $article = article::find($id);
        $article->verify = request("verify");

        $article->save();
        return redirect()->back();
    }
}
