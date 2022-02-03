<?php

namespace App\Http\Controllers;
use App\Models\Vehicule;
use App\Models\Categorie;

use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicules=Vehicule::all();
        return view('admin.vehicules.listvehicule',compact('vehicules'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Categorie::all();
        return view ('admin.vehicules.newvehicule',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/img'), $imageName);
            $actualPath = '/img/'.$imageName;
            $vehicule = New Vehicule;
            $vehicule->image = $actualPath;
            $vehicule->modele=$request->input('modele');
            $vehicule->marque=$request->input('marque');
            $vehicule->carburant=$request->input('carburant');
            $vehicule->description=$request->input('description');
            $vehicule->prix=$request->input('prix');
            $vehicule->quantite=$request->input('quantite');
            $vehicule->categorie_id=$request->input('categorie');
            $vehicule->save();

            return redirect()->route('vehicules.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($vehicule)
    {
        $car=Vehicule::find($vehicule);
        $categories=Categorie::all();
        return view('admin.vehicules.showvehicule',array(
        'car' => $car,
        'categories'=>$categories,));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($vehicule)
    {
        $car=Vehicule::find($vehicule);
        $categories=Categorie::all();
        return view('admin.vehicules.editvehicule',array(
            'car' => $car,
            'categories' =>$categories,
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $vehicule)
    {
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/img'), $imageName);
            $actualPath = '/img/'.$imageName;
            $car = Vehicule::find($vehicule);
            $car->image = $actualPath;
            $car->modele=$request->input('modele');
            $car->marque=$request->input('marque');
            $car->carburant=$request->input('carburant');
            $car->description=$request->input('description');
            $car->prix=$request->input('prix');
            $car->quantite=$request->input('quantite');
            $car->categorie_id=$request->input('categorie');
            $car->save();

            return redirect()->route('vehicules.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($vehicule)
    {
        $car=Vehicule::destroy($vehicule);
        return redirect()->route('vehicules.index');
    }
}
