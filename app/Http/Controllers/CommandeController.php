<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $commandes = commande::all();
        return view('commande.index',['commandes' => $commandes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('commande.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //les validaations
        $request->validate([
         'client-id'=> 'required',
         'statut'=>'required|string|max:255|min:2',
         'montant_total'=>'required',
         
        ]);

        //recuperation des donnees du formulaire
        $client =$request->input('client_id');
        $statut =$request->input('statut');
        $montant_total =$request->input('montant_total$montant_total');
        

        //creation de l'utilisateur
        $commande = new commande();
        $commande->client_id= $client_id;
        $commande->statut= $statut;
        $commande->montant_total= $montant_total;
       
        $commande->save();
        return redirect()->route('commande.index')->with('message','l utilisateur a ete ajouter avec succes');
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
    public function edit(commande $commande)
    {
        return view('commande.edit',compact('commande'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, commande $commande)
    {
        

        $client_id =$request->input('client_id');
        $statut =$request->input('statut');
        $montant_total =$request->input('montant_total');
       
        $commande->client_id= $client_id;
        $commande->statut= $statut;        
        $commande->montant_total= $montant_total;        
        
        $commande->save();
        return redirect()->route('commande.index')->with('message','l utilisateur a ete modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the commande by ID
        $commande = commande::find($id);
        // Delete the commande from the database
        $commande->delete();
        // Redirect to the commande list page
        
        return redirect()->route('commande.index')->with('message','l utilisateur a ete supprimer avec succes');
    }
}