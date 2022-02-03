<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RentController;

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

Route::get('/', function () {
    return view('accueil');
})->name('accueil');

// Route::get('/login', function () {
//     return view('customAuth.login');
// })->name('login');


Route::get('/categories/{categorie}', function () {
    return view('categories.index');
})->name('categorie');

Route::get('/categories/{categorie}/1', function () {
    return view('products.index');
})->name('product');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/',[GuestController::class,'index'])->name('accueil');
// Route::get('/detail_voiture/{vehicule}',[GuestController::class,'detail_voiture'])->name('detail_voiture');
// Route::get('/location_de_la_voiture/{vehicule}',[GuestController::class,'rent'])->name('rentcar');
// Route::post('/location_de_la_voiture/{vehicule}/user/{user}',[GuestController::class,'verifyAvalaible'])->name('rent_car');
// Route::get('/voitures',[GuestController::class,'cars'])->name('voitures');
// Route::get('/mon_historique/{user}',[GuestController::class,'historique'])->name('historique');


Route::middleware(['admin:admin'])->group(function(){


    Route::get('/admin',[DashboardController::class,'index'])->name('admin-panel');

    Route::resource('/categorie',CategorieController::class); 

    Route::resource('/vehicules',VehiculeController::class);

    Route::get('/utilisateurs',[UserController::class,'index'])->name('users');

    Route::get('/locations',[RentController::class,'index'])->name('allrent');
    
});