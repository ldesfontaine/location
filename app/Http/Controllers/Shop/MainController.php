<?php

namespace App\Http\Controllers\Shop;

use App\Models\Vehicule;
use App\Models\Type;//passe par le provider AppServiceProvider
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use function PHPSTORM_META\type;

class MainController extends Controller
{


    public function index()
    {
        $vehicules = \App\Models\Vehicule::with('type')->get();
        // $types = Type::where('actif',true)->get();
        // dd($vehicules);
        return view('shop.index' , compact('vehicules'));
    }



    public function vehicule(Request $request){
        // $types = Type::where('actif',true)->get();
        $vehicule= Vehicule::find($request->id);
        $vehicules = \App\Models\Vehicule::all();
         return view('shop.vehicule',compact('vehicule','vehicules'));
    }


    public function ShowType(){
        // $types = Type::where('actif',true)->get();
        // dd($types);
        $vehicules =Vehicule::where('type_id',request()->id)->get();
        return view('shop.type',compact('vehicules'));
    }

    public function create()
    {
        $vehicules = \App\Models\Vehicule::all();
        return view('CRUD.createVehicule',compact('vehicules'));
    }

    public function store(Request $request){
        $vehicule = new Vehicule();
        $vehicule->nom = $request->Nom;
        $vehicule->marque = $request->marque;
        $vehicule->prix_ht = $request->Prix_HT;
        $vehicule->description = $request->description;
        $vehicule->photo_principal = $request->image;
        $vehicule->roues = $request->Roue;
        $vehicule->places = $request->Place;
        $vehicule->carburant = $request->carburant;
        $vehicule->boite_vitesse = $request->boite_vitesse;
        $vehicule->couleur = $request->couleur;
        $vehicule->plaque = $request->immatriculation;
        $vehicule->type_id = $request->categorie;
        $vehicule->save();
        return 'vehicule add';
    }

        public function edit($id)
    {
        $vehicule = Vehicule::find($id);
        return view('CRUD.editVehicule',compact('vehicule'));
    }

    public function update(Request $request, $id)
    {
        $vehicule = Vehicule::find($id);
        $vehicule->nom = $request->Nom;
        $vehicule->marque = $request->marque;
        $vehicule->prix_ht = $request->Prix_HT;
        $vehicule->description = $request->description;
        $vehicule->photo_principal = $request->image;
        $vehicule->roues = $request->Roue;
        $vehicule->places = $request->Place;
        $vehicule->carburant = $request->carburant;
        $vehicule->boite_vitesse = $request->boite_vitesse;
        $vehicule->couleur = $request->couleur;
        $vehicule->plaque = $request->immatriculation;
        $vehicule->type_id = $request->categorie;
        $vehicule->save();
        return 'vehicule update';
    }

    public function destroy($id)
    {
        $vehicule = Vehicule::find($id);
        $vehicule->delete();
        return 'vehicule delete';
    }

}
