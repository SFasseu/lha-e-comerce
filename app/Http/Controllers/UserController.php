<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
       return view('user.index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //les validaations
        $request->validate([
         'email'=> 'required|email|unique:users',
         'name'=>'required|string|max:255|min:2',
         'password'=>'required|min:6|confirmed',
        ]);

        //recuperation des donnees du formulaire
        $name =$request->input('name');
        $email =$request->input('email');
        $password =$request->input('password');
        $confirmpassword =$request->input('password_confirmation');

        //creation de l'utilisateur
        $user = new User();
        $user->name= $name;
        $user->email= $email;
        $user->password= $password;
        $user->save();
        return redirect()->route('user.index')->with('message','l utilisateur a ete ajouter avec succes');
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
    public function edit(User $user)
    {
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        

        $name =$request->input('name');
        $email =$request->input('email');
        
        $user->name= $name;
        $user->email= $email;
        $user->save();
        return redirect()->route('user.index')->with('message','l utilisateur a ete modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the user by ID
        $user = User::find($id);
        // Delete the user from the database
        $user->delete();
        // Redirect to the user list page
        
        return redirect()->route('user.index')->with('message','l utilisateur a ete supprimer avec succes');
    }
}
