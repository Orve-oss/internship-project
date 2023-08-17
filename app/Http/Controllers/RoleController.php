<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //

    public function listeRole()
    {

       $roles = Role::orderBy('libelle', 'asc')->get();
       return view('role.role', compact('roles'));
    }

    public function creationRole()
    {
        //

        return view('role.create');
    }

    public function creationRolePage(Request $request)
    {
        //
        $request->validate([
            'libelle'=> 'required',
        ]);

        $role = new Role();
        $role->libelle = $request->libelle;

        $role->save();

        return redirect('/listeRole');
    }

    public function delete_role($id){
        $user = Role::find($id);// chercher l'utilisateur ayant l'id
        $user->delete();
        return redirect('/listeRole');//rediriger vers la liste
    }
}
