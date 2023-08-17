<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register(Request $request)
    {
        //
        $request->validate([
            'name'=> 'required|string',
            'prenom'=> 'required|string',
            'email'=> 'required|string|email|unique:users',
            'password'=> 'required|string|min:8',
        ]);

        $user = new User();
        $user->role_id = 4;

        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->email =  $request->email;
        $user->password = Hash::make($request->password) ;

        $user->save();

        return redirect('/login');
    }

    public function registerPage()
    {
        //
        return view('auth.create-account');
    }

    public function login(Request $request)
    {
        //
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:8',
        ]);

        $creds = Auth::attempt([
            'email'=> $request->email,
            'password'=> $request->password,
        ]);

        if($creds){
            return redirect('/accueil')->with('status','Vous êtes connecté');
        }
        else{
            return back();
        }

    }

    public function loginPage()
    {
        //

        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function logout()
    {
        //
        Auth::logout();
        return redirect('/login');
    }


    public function liste()
    {

       $users = User::paginate(3);
       return view('users.utilisateur', compact('users'));
    }

    public function creation()
    {
        //

        return view('users.creer');
    }

    public function creationPage(Request $request)
    {
        //
        $request->validate([
            'name'=> 'required',
            'prenom'=> 'required',
            'email'=> 'required',
            'password'=> 'required|string|min:8'

        ]);

        $user = new User();
        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->password = Hash::make($request->password) ;

        $user->save();

        return redirect('/liste');
    }

    public function delete_user($id){
        $user = User::find($id);// chercher l'utilisateur ayant l'id
        $user->delete();
        return redirect('/liste');//rediriger vers la liste
    }

    public function profil(Request $request)
    {
        //




    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $user = Auth::user();
        $comptes = $user->comptes;
        return view('prof', compact('user', 'comptes'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editer($id)
    {
        //
        $user = User::where('id',$id)->first();
        return view('users.editer', compact('user', 'id'));
    }
    public function edit(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'password'=> 'required',
        ]);
        $user = User::find($request->id);// rechercher l'étudiant ayant ce id
        $user->name = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->update();

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
