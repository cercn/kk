<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Categorie;
use App\Models\Vehicule;
use App\Models\User;
use App\Models\Location;

class DashboardController extends Controller
{
       

        public function index(){

           $users=User::count();
           $cars=Vehicule::count();
           $categories=Categorie::count();
           $locations=Location::count();
            
           $created_car=Vehicule::all('created_at')->sortByDesc('created_at')->first();
           $created_user=User::all('created_at')->sortByDesc('created_at')->first();
           $created_categorie=Categorie::all('created_at')->sortByDesc('created_at')->first();
           $created_location=Location::all('created_at')->sortByDesc('created_at')->first();

          
            
           return view ('admin.dashboard',array(
               'users' => $users,
               'cars' =>$cars,
            'categorie'=>$categories,
            'location'=>$locations,
            'car_created'=>$created_car,
            'user_created'=>$created_user,
            'categorie_created'=>$created_categorie,
            'location_created'=>$created_location,
           ));

        }
}
