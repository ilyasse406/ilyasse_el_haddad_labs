<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BanniereController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CardrapidController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PagecontactController;
use App\Http\Controllers\PrimetController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SloganController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;

use App\Http\Controllers\TitleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\WelcomeController;
use App\Notifications\ArticlePublished;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name("welcome");

Route::get("/", [WelcomeController::class, "index"])->name('welcome');
Route::get("/service", [ServiceController::class, "index"])->name('service');
Route::get("/contact", [PagecontactController::class, "index"])->name('contact');
Route::get("/blog", [BlogController::class, "index"])->name('blog');

Route::get('show-blog/{id}', [BlogController::class,"show"] );
Route::post('commentaire/{id}', [CommentaireController::class,"store"] );


// Route::get('/service', function () {
//     return view('service');
// })->name("service");


// Route::get('/blog', function () {
//     return view('blog');
// })->name("blog");



// Route::get('/blog-post', function () {
//     return view('blog-post');
// })->name("blog-post");




// backend

Route::resource("/admin/user", UserController::class)->middleware(["auth",'isAdminwebmaster']);
Route::resource("/admin/navbar", NavbarController::class)->middleware(["auth",'isAdminwebmaster']);
Route::resource("/admin/slogan", SloganController::class)->middleware(["auth",'isAdminwebmaster']);
Route::resource("/admin/banniere", BanniereController::class)->middleware(["auth",'isAdminwebmaster']);
Route::resource("/admin/cardrapid", CardrapidController::class)->middleware(["auth",'isAdminwebmaster']);
Route::resource("/admin/about", AboutController::class)->middleware(["auth",'isAdminwebmaster']);
Route::resource("/admin/video", VideoController::class)->middleware(["auth",'isAdminwebmaster']);
Route::resource("/admin/testimonial", TestimonialController::class)->middleware(["auth",'isAdminwebmaster']);
Route::resource("/admin/title", TitleController::class)->middleware(["auth",'isAdminwebmaster']);
Route::resource("/admin/team", TeamController::class)->middleware(["auth",'isAdminwebmaster']);
Route::resource("/admin/promotion", PromotionController::class)->middleware(["auth",'isAdminwebmaster']);
Route::resource("/admin/contact", ContactController::class)->middleware(["auth",'isAdminwebmaster']);
Route::resource("/admin/primet", PrimetController::class)->middleware(["auth",'isAdminwebmaster']);
// Route::resource("/admin/card", CardController::class)->middleware(["auth",'isAdminwebmaster']);
Route::resource("/admin/newsletter", NewsletterController::class)->middleware(["auth",'isAdminwebmaster']);
Route::resource("/admin/map", MapController::class)->middleware(["auth",'isAdminwebmaster']);
Route::resource("/admin/article", ArticleController::class)->middleware(["auth",'isAdminwebmasterredacteur']);


Route::get("/admin/edituser", [AdminController::class, "index"])->middleware(["auth",'isAdminwebmaster']);

Route::get("/admin/edituser/{id}/edit", [AdminController::class, "edit"])->middleware(["auth",'isAdminwebmaster']);
route::post("/admin/edituser/{id}/update", [AdminController::class, 'update'])->middleware(["auth",'isAdminwebmaster']);



Route::post('/send-article/{id}', [ArticleController::class, 'sendArticle'])->middleware(["auth",'isAdminwebmaster']);





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Auth::routes();



// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');

Route::get("/home", [HomeController::class, "index"])->name('home')->middleware('auth');
Route::get("/admin/user/{id}/edit", [HomeController::class, "edit"]);


Route::post("/send-email", [MailController::class, "sendMail"]);


// Route::get("/test", function() {
//     $user = App\Models\Newsletter::all();
//     $cardrapid = App\Models\Cardrapid::first();
//     $user->notify(new ArticlePublished($cardrapid));
// })->name("test");









