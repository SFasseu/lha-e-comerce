<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LigneCommande;

class LigneCommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lignes = lignecommande::all();
        return view('ligne.index',['ligne_de_commandes' => $lignes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('ligne.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //les validaations
        $request->validate([
         'commande_id'=> 'required',
         'produit_id'=>'required',
         'quantite'=>'required',
         'prix'=>'required',
        ]);

        //recuperation des donnees du formulaire
        $commande_id =$request->input('commande_id');
        $montant =$request->input('montant');
        $quantite =$request->input('quantite');
        $prix =$request->input('prix');
        

        //creation de l'utilisateur
        $lignecommande = new lignecommande();
        $lignecommande->commande_id= $commande_id;
        $lignecommande->montant= $montant;
        $lignecommande->quantite= $quantite;
        $lignecommande->prix= $prix;
        $lignecommande->save();
        return redirect()->route('ligne.index')->with('message','l utilisateur a ete ajouter avec succes');
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
    public function edit(LigneCommande $lignecommande)
    {
        return view('ligne.edit',compact('lignecommande'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LigneCommande $lignecommande)
    {
        

        $commande_id =$request->input('commande_id');
        $produit =$request->input('produit_id');
        $quantite =$request->input('quantite');
        $prix =$request->input('prix');
        
        $lignecommande->commande_id= $commande_id;
        $lignecommande->montant= $montant;
        $lignecommande->quantite= $quantite;
        $lignecommande->prix= $prix;
        $lignecommande->save();
        return redirect()->route('ligne.index')->with('message','l utilisateur a ete modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the lignecommande by ID
        $lignecommande = lignecommande::find($id);
        // Delete the lignecommande from the database
        $lignecommande->delete();
        // Redirect to the lignecommande list page
        
        return redirect()->route('ligne.index')->with('message','l utilisateur a ete supprimer avec succes');
    }
}
