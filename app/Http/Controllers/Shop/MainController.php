<?php

namespace App\Http\Controllers\Shop;

use App\Models\Produit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $produits = \App\Models\Produit::all();
        // dd($produits);
        return view('shop.index' , compact('produits'));
    }



    public function produit(Request $request){
        // dd($request->id);
        $produit= Produit::find($request->id);
        $produits = \App\Models\Produit::all();
        return view('shop.produit',compact('produit','produits'));
    }
}
