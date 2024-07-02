<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avis;

class AvisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $avis = avis::all();
        return view('avis.index',['avis' => $avis]);
    }

    /**
     * Show the form for creating a new resource.
      */
      public function create()
      {
        return view('avis.create');
      }
  
      /**
       * Store a newly created resource in storage.
       */
      public function store(Request $request)
      {
           //les validaations
          $request->validate([
           'client_id'=> 'required',
           'produit_id'=>'required',
           'contenu'=>'required',
           'note'=>'required',
          ]);
  
          //recuperation des donnees du formulaire
          $client_id =$request->input('client_id');
          $produit_id =$request->input('produit_id');
          $contenu =$request->input('contenu');
          $note =$request->input('note');
          
  
          //creation de l'utilisateur
          $avis = new avis();
          $avis->client_id= $client_id;
          $avis->produit_id= $produit_id;
          $avis->contenu= $contenu;
          $avis->note= $note;
          $avis->save();
          return redirect()->route('avis.index')->with('message','l utilisateur a ete ajouter avec succes');
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
      public function edit(Avis $avis)
      {
          return view('avis.edit',compact('avis'));
      }
  
      /**
       * Update the specified resource in storage.
       */
      public function update(Request $request, Avis $avis)
      {
          
  
          $client_id =$request->input('client_id');
          $produit_id =$request->input('produit_id');
          $contenu =$request->input('contenu');
          
          $avis->client_id= $client_id;
          $avis->produit_id= $produit_id;
          $avis->contenu= $contenu;          
          $avis->note= $note;          

          $avis->save();
          return redirect()->route('avis.index')->with('message','l utilisateur a ete modifier avec succes');
      }
  
      /**
       * Remove the specified resource from storage.
       */
      public function destroy($id)
      {
          // Find the avis by ID
          $avis = avis::find($id);
          // Delete the avis from the database
          $avis->delete();
          // Redirect to the avis list page
          
          return redirect()->route('avis.index')->with('message','l utilisateur a ete supprimer avec succes');
      }
  }
  