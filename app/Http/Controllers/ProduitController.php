<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;
class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::all();
       return view('produit.index',['produits' => $produits]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('produit.create',['categories' => $categories]);
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //les validaations
        $request->validate([
        'categorie_id'=> 'required|',
         'nom'=> 'required|string',
         'description'=>'required|string|max:255|min:2',
         'prix'=>'required|numeric',
         'stock'=>'required|numeric',
         'image'=>'required|file|mimes:jpg,png|max:512',
        ]);

        //recuperation des donnees du formulaire
        $categorie_id =$request->input('categorie_id');
        $nom =$request->input('nom');
        $description =$request->input('description');
        $prix =$request->input('prix');
        $stock =$request->input('stock');
        $image =$request->file('image');
        
        if($request->hasFile('image')){
            $fileName = 'produit_'.time();
            Storage::disk('public')->put($fileName, file_get_contents($image));
        }

        //creation de l'utilisateur
        $produit = new Produit();
        $produit->categorie_id = $categorie_id;
        $produit->nom= $nom;
        $produit->description= $description;
        $produit->prix= $prix;
        $produit->stock= $stock;
        $produit->image= $image;
        $produit->save();
        return redirect()->route('produit.index')->with('message','le produit a ete ajouter avec succes');
    }
   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        return view('produit.edit',compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
        
        $categorie_id =$request->input('categorie_id');
        $nom =$request->input('nom');
        $description =$request->input('description');
        $prix =$request->input('prix');
        $stock =$request->input('stock');
        $image =$request->input('image');
        
        $produit->categorie_id= $categorie_id;
        $produit->nom= $nom;
        $produit->description= $description;        
        $produit->prix= $prix;        
        $produit->stock= $stock;        
        $produit->image= $image;        

        $produit->save();
        return redirect()->route('produit.index')->with('message','l utilisateur a ete modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the produit by ID
        $produit = Produit::find($id);
        // Delete the produit from the database
        $produit->delete();
        // Redirect to the produit list page
        
        return redirect()->route('produit.index')->with('message','l utilisateur a ete supprimer avec succes');
    }
}