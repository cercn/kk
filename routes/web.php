<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsletterController;



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

Route::get('/',[GuestController::class,'index'])->name('accueil');

Route::get('/toutesnoscategories',[GuestController::class,'listcategories'])->name('allcategories');

Route::get('/categories/{categorie}', [GuestController::class,'category'])->name('categorie');

Route::get('/produits/{product}',[GuestController::class,'infoProduct'])->name('produit');

Route::post('/search',[GuestController::class,'searchProducts'])->name('searchproducts');

Route::get('/cart',[cartController::class,'cart'])->name('cart');

Route::get('/add-to-cart/{id}',[cartController::class,'addToCart'])->name('add-to-cart');
Route::put('/update-to-cart',[cartController::class,'updateToCart'])->name('update-cart');
Route::delete('/delete-to-cart',[cartController::class,'deleteToCart'])->name('delete-cart');

Route::get('/foire-aux-questions',[GuestController::class,'help'])->name('help');

Route::post('/newsletter/register',[GuestController::class,'registerToNewsletter'])->name('newsletter-register');

Route::get('display/pages/{slug}',[GuestController::class,'afficherPageAdmin'])->name('display-page');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['admin:admin'])->group(function(){


    Route::get('/admin',[DashboardController::class,'index'])->name('admin-panel');

    Route::resource('/categorie',CategorieController::class);

    Route::resource('/products',ProductController::class);

    Route::resource('/faqs',FaqController::class);

    Route::resource('/pages',PageController::class);

    Route::get('/utilisateurs',[UserController::class,'index'])->name('users');

    Route::get('/newsletters',[NewsletterController::class,'index'])->name('newsletter');



});


Route::get('/{slug}',[GuestController::class,'afficherPage'])->name('page');
