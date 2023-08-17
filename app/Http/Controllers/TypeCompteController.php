<?php

namespace App\Http\Controllers;

use App\Models\TypeCompte;
use Illuminate\Http\Request;

class TypeCompteController extends Controller
{
    //
    public function typeCompte()
    {

       $types = TypeCompte::orderBy('libelle', 'asc')->get();
       return view('typecompte.typecompte', compact('types'));
    }

    public function createType()
    {
        //

        return view('typecompte.compte');
    }

    public function createTypePage(Request $request)
    {
        //
        $request->validate([
            'libelle'=> 'required',
        ]);

        $type = new TypeCompte();
        $type->libelle = $request->libelle;

        $type->save();

        return redirect('/typecompte');
    }

    public function delete($id){
        $type = TypeCompte::find($id);// chercher l'utilisateur ayant l'id
        $type->delete();
        return redirect('/listetype');//rediriger vers la liste
    }

}
