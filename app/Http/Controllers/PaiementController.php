<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paiement;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paiements = paiement::all();
        return view('paiement.index',['paiements' => $paiements]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('paiement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //les validaations
        $request->validate([
         'commande_id'=> 'required',
         'montant'=>'required',
         'mode_paiement'=>'required',
        ]);

        //recuperation des donnees du formulaire
        $commande_id =$request->input('commande_id');
        $montant =$request->input('montant');
        $mode_paiement =$request->input('mode_paiement');
        

        //creation de l'utilisateur
        $paiement = new paiement();
        $paiement->commande_id= $commande_id;
        $paiement->montant= $montant;
        $paiement->mode_paiement= $mode_paiement;
        $paiement->save();
        return redirect()->route('paiement.index')->with('message','l utilisateur a ete ajouter avec succes');
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
    public function edit(Paiement $paiement)
    {
        return view('paiement.edit',compact('paiement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paiement $paiement)
    {
        

        $commande_id =$request->input('commande_id');
        $montant =$request->input('montant');
        $mode_paiement =$request->input('mode_paiement');
        
        $paiement->commande_id= $commande_id;
        $paiement->montant= $montant;
        $paiement->mode_paiement= $mode_paiement;
        $paiement->save();
        return redirect()->route('paiement.index')->with('message','l utilisateur a ete modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the paiement by ID
        $paiement = Paiement::find($id);
        // Delete the paiement from the database
        $paiement->delete();
        // Redirect to the paiement list page
        
        return redirect()->route('paiement.index')->with('message','l utilisateur a ete supprimer avec succes');
    }
}
