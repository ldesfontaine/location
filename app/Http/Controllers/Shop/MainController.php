<?php

namespace App\Http\Controllers\Shop;

use App\Models\Vehicule;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{


    public function index()
    {
        $vehicules = \App\Models\Vehicule::all();
        // $categories = Category::where('actif',true)->get();
        return view('shop.index' , compact('vehicules'));
    }



    public function produit(Request $request){
        $vehicule= Vehicule::find($request->id);
        $vehicules = \App\Models\Vehicule::all();
        // $categories = Category::where('actif',true)->get();
        return view('shop.produit',compact('vehicule','vehicules'));
    }


    public function ShowCategorie(){
        // $categories = Category::where('actif',true)->get();
        //  dd($categories);
        return view('shop.categorie');
    }


}
