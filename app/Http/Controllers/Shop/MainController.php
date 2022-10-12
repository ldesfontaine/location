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


}
