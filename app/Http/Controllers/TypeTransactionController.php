<?php

namespace App\Http\Controllers;

use App\Models\TypeTransaction;
use Illuminate\Http\Request;

class TypeTransactionController extends Controller
{
    //

    public function listeType()
    {

       $types = TypeTransaction::orderBy('libelle', 'asc')->get();
       return view('typetrans.typetrans', compact('types'));
    }

    public function creationType()
    {
        //

        return view('typetrans.trans');
    }

    public function creationTypePage(Request $request)
    {
        //
        $request->validate([
            'libelle'=> 'required',
        ]);

        $type = new TypeTransaction();
        $type->libelle = $request->libelle;

        $type->save();

        return redirect('/listetype');
    }

    public function delete_type($id){
        $type = TypeTransaction::find($id);// chercher l'utilisateur ayant l'id
        $type->delete();
        return redirect('/listetype');//rediriger vers la liste
    }
}
