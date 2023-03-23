<?php

namespace App\Http\Controllers\Shop;

use App\Models\Vehicule;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use App\Models\Type;//passe par le provider AppServiceProvider

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
        $request->validate([
            'Nom' => 'required',
            'marque' => 'required',
            'Prix_HT' => 'required',
            'description' => 'required',
            'Roue' => 'required',
            'Place' => 'required',
            'carburant' => 'required',
            'boite_vitesse' => 'required',
            'couleur' => 'required',
            'immatriculation' => 'required',
            'categorie' => 'required',
            'date_premiere_mise_en_circulation' => 'required',
            'date_rentrée_au_garage' => 'required',
            'nombre_chevaux_fiscaux' => 'required',
        ]);

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
        $vehicule->date_premiere_mise_en_circulation = $request->date_premiere_mise_en_circulation;
        $vehicule->date_rentrée_au_garage = $request->date_rentrée_au_garage;
        $vehicule->nombre_chevaux_fiscaux = $request->nombre_chevaux_fiscaux;
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if($file = $request->hasFile('image')) {
            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName() ;

            $destinationPath = public_path().'/vehicule' ;
            $file->move($destinationPath,$fileName);
            $vehicule->photo_principal = $fileName;
        }
        $vehicule->save();
        return Redirect::to('/');
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
        if($request->image == null){
            $vehicule->photo_principal = $vehicule->photo_principal;
        }else{
            $vehicule->photo_principal = $request->image;
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $image_path = public_path().'/vehicule/'.$vehicule->photo_principal;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            if($file = $request->hasFile('image')) {
                File::delete($image_path);
                $file = $request->file('image') ;
                $fileName = $file->getClientOriginalName() ;

                $destinationPath = public_path().'/vehicule' ;
                $file->move($destinationPath,$fileName);
                $vehicule->photo_principal = $fileName;
            }
           }
           // dd($vehicule->photo_principal);
        $vehicule->roues = $request->Roue;
        $vehicule->places = $request->Place;
        $vehicule->carburant = $request->carburant;
        $vehicule->boite_vitesse = $request->boite_vitesse;
        $vehicule->couleur = $request->couleur;
        $vehicule->plaque = $request->immatriculation;
        $vehicule->type_id = $request->categorie;
        $vehicule->date_premiere_mise_en_circulation = $request->date_premiere_mise_en_circulation;
        $vehicule->date_rentrée_au_garage = $request->date_rentrée_au_garage;
        $vehicule->nombre_chevaux_fiscaux = $request->nombre_chevaux_fiscaux;




        $vehicule->save();

        return Redirect::to('/');
    }

    public function destroy($id)
    {
        $vehicule = Vehicule::find($id);
        $vehicule->delete();
        return Redirect::to('/');
    }


    public function mention(){
        return view('shop.mention');
    }

    public function charte(){
        return view('shop.charte');
    }

    public function cgu(){
        return view('shop.cgu');
    }

}
