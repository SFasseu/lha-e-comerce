<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $categories = Categorie::all();
        return view('categorie.index',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //les validaations
        $request->validate([
         'nom'=> 'required',
         'description'=>'required|string|max:255|min:2',
         
         
        ]);

        //recuperation des donnees du formulaire
        $nom =$request->input('nom');
        $description =$request->input('description');
       

        //creation de l'utilisateur
        $categorie = new categorie();
        $categorie->nom= $nom;
        $categorie->description= $description;
        
       
        $categorie->save();
        return redirect()->route('categorie.index')->with('message','l utilisateur a ete ajouter avec succes');
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
    public function edit(Categorie $categorie)
    {
        return view('categorie.edit',compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categorie $categorie)
    {
        

        $nom =$request->input('nom');
        $description =$request->input('description');
      
       
        $categorie->nom= $nom;
        $categorie->description= $description;        
       
        
        $categorie->save();
        return redirect()->route('categorie.index')->with('message','l utilisateur a ete modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the categorie by ID
        $categorie = categorie::find($id);
        // Delete the categorie from the database
        $categorie->delete();
        // Redirect to the categorie list page
        
        return redirect()->route('categorie.index')->with('message','l utilisateur a ete supprimer avec succes');
    }
}