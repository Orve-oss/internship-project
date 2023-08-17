<?php

namespace App\Http\Controllers;

use App\Models\Kiosque;
use Illuminate\Http\Request;

class KiosqueController extends Controller
{
    //
    public function listekiosque()
    {

       $kiosques = Kiosque::orderBy('nom', 'asc')->get();
       return view('kiosques.kiosque', compact('kiosques'));
    }

    public function creationkiosque()
    {
        //

        return view('kiosques.creation');
    }

    public function creationkiosquePage(Request $request)
    {
        //
        $request->validate([
            'nom'=> 'required',
            'adresse'=> 'required',
            'heure_ouverture'=> 'required',
            'heure_fermeture'=> 'required'

        ]);

        $kiosque = new Kiosque();
        $kiosque->nom = $request->nom;
        $kiosque->adresse = $request->adresse;
        $kiosque->heure_ouverture = $request->heure_ouverture;
        $kiosque->heure_fermeture = $request->heure_fermeture;

        $kiosque->save();

        return redirect('/listekiosque');
    }
}
