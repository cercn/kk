<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Categorie;
use App\Models\Vehicule;
use App\Models\Location;
use App\Models\User;

class GuestController extends Controller
{
    public function index (){
        // $categorie=Categorie::all();
        // $cars_recent = Vehicule::all()->sortByDesc('created_at')->random(4);
        // $cars_old = vehicule::all()->sortBy(['created_at', 'asc'])->take(3);
        // return view('welcome',array(
        //     'categories' => $categorie,
        //     'rcars' =>$cars_recent,
        //    'ocars' =>$cars_old,
        // ));

        return view('accueil');

    }

    public function detail_voiture($vehicule){

        $categories=Categorie::all();
        $car = Vehicule::find($vehicule);

        return view('car_detail',array(
            'categories' => $categories,
            'car' => $car
        ));
    }

    public function rent($vehicule){
     

        if(!Auth::check()){
            return redirect()->route('login');
        }
        else{
            $voiture=Vehicule::find($vehicule);
            $categories = Categorie::all();
            return view('car_rent',array(
                'car' => $voiture,
                'categories'=>$categories,
            ));    
        }
      
                
        
    }


    public function verifyAvalaible(Request $request,$vehicule,$user){

       


        //selection de la voiture dans les tables location et voiture 

        $car=Location::where('vehicule_id',$vehicule)->get('date_end','nbr_vehicules');
        $voiture=Vehicule::find($vehicule);


        // calcul de la duree en jour 

        $date_debut = strtotime($request->input('date_debut'));
        $date_end= strtotime($request->input('date_end'));
       $duree= (int) (($date_end-$date_debut)/84600);


        //Controle sur les dates 

        if($duree<0){

            return redirect()->route('rentcar',['vehicule'=>$vehicule])->with('error',"Veuillez entrer une date de retour du vehicule superieure à la date de debut de la location ,Merci!");
            
           
        }



        //verification du nombre de vehicule demandé par l'utilisateur 

        if($request->input('nbr_car')>$voiture->quantite){

            return redirect()->route('rentcar',['vehicule'=>$vehicule])->with('error',"Désolé nous ne disposons que de $voiture->quantite vehicules pour ce modele");
        }



        
        


        if($car->count()==0)
        {         
            
            
            //Calcul de la facture 

            $facture = $voiture->prix*$duree;
            

            $location = New Location;
            $location->date_debut=$request->input('date_debut');
            $location->date_end=$request->input('date_end');
            $location->durée=$duree;
            $location->nb_vehicules=$request->input('nbr_car');
            $location->facture=$facture;
            $location->user_id=$user;
            $location->vehicule_id=$vehicule;
            $location->save();


            
            return view('demand_confirm',array('voiture'=>$voiture,'user'=>$user));
        }

        if($car->count()>0){

            $nombre=$car->count();

            $car_alreadyrent=Location::where('vehicule_id',$vehicule)->sum('nb_vehicules');

            
            if($voiture->quantite>$car_alreadyrent){

                $nombre_restant=($voiture->quantite-$car_alreadyrent);

                if($request->input('nbr_car')>$nombre_restant){

                    return redirect()->route('rentcar',['vehicule'=>$vehicule])->with('error',"Désolé il ne reste que  $nombre_restant vehicules pour ce modele");
                }
                else{
                    //Calcul de la facture 

                            $facture = $voiture->prix*$duree;           

                            $location = New Location;
                            $location->date_debut=$request->input('date_debut');
                            $location->date_end=$request->input('date_end');
                            $location->durée=$duree;
                            $location->nb_vehicules=$request->input('nbr_car');
                            $location->facture=$facture;
                            $location->user_id=$user;
                            $location->vehicule_id=$vehicule;
                            $location->save();

                            
                            return view('demand_confirm',compact('voiture'));
                }

             }


             if($voiture->quantite==$car_alreadyrent){

                $car_remises=Location::where('vehicule_id',$vehicule)->get('date_end');

                $nombres_voiture=0;
                
                for($i=0;$i<=$car_remises->count();$i++){
                    
                    if($car_remises->date_end>$request->input('date_debut')){

                        $nombres_voiture+=$car_remises->nb_vehicules;
                    }
                }


                    if($nombre_voiture<=0){

                        return redirect()->route('rentcar',['vehicule'=>$vehicule])->with('error',"Désolé il n'y a aucun vehicule de ce modele disponible à la date de debut de location,priere changer de date de debut ");

                    }
                    else{
                        //Calcul de la facture 

                        $facture = $voiture->prix*$duree;           

                        $location = New Location;
                        $location->date_debut=$request->input('date_debut');
                        $location->date_end=$request->input('date_end');
                        $location->durée=$duree;
                        $location->nb_vehicules=$request->input('nbr_car');
                        $location->facture=$facture;
                        $location->user_id=$user;
                        $location->vehicule_id=$vehicule;
                        $location->save();

                        
                        return view('demand_confirm',compact('voiture'));
                    }
                
             }

            

        }



        

    }


    public function cars(){

        $cars=Vehicule::all()->shuffle();
        $cat=Categorie::all();

        return view('voitures',array(
            'voitures'=>$cars,
            'categories'=>$cat,
        ));


    }

    public function historique($user){

        $cars = Vehicule::all();
        $userloc=Location::where('user_id',$user)->get()->all();

       
      
        return view('historique',array(

            'userloc'=>$userloc,
            'cars'=>$cars,

        ));
    }
}
