<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ShopController extends Controller
{
    public function index(){

        $produits = Produit::all();

        return view('front.boutique',['produits' => $produits]);
    }

    public function order(Produit $product){
        return view('front.pourquoi',['product' => $product]);
    }

    public function orderSave(Produit $product, Request $request){
        dd($request);
    }
}
