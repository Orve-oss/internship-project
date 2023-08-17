<?php

namespace App\Http\Controllers;

use App\Models\Kiosque;
use App\Models\Transaction;
use App\Models\TypeCompte;
use App\Models\TypeTransaction;
use App\Models\User;
use App\Notifications\NouvelleTransactionAgent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class TransactionController extends Controller
{
    //


    public function transfert()
    {
        return view('transfert');
    }

    public function depot()
    {
        $users = User::pluck('name', 'id');
        $types = TypeTransaction::pluck('libelle', 'id');
        $typesCompte = TypeCompte::pluck('libelle', 'id');
        $kiosques = Kiosque::pluck('nom', 'id');
        return view('depot', compact('users', 'types', 'typesCompte', 'kiosques'));
    }

    public function depotPage(Request $request)
    {

        $request->validate([
            'type_transaction_id' => 'required|exists:type_transactions,id',
            'user_id' => 'required|exists:users,id',
            'kiosque_id' => 'required|exists:kiosques,id',
            'nom_expediteur' => 'nullable',
            'nom_destinataire' => 'nullable',
            'numero_destinataire' => 'required|string',
            'type_compte_id' => 'required|exists:type_comptes,id',
            'montant' => 'required',
            'numero_expediteur'=> 'nullable',
        ]);

        $transaction = new Transaction();
        $transaction->type_transaction_id = $request->type_transaction_id;
        $transaction->user_id = $request->user_id;
        $transaction->kiosque_id = $request->kiosque_id;
        $transaction->nom_expediteur = $request->nom_expediteur;
        $transaction->nom_destinataire = $request->nom_destinataire;
        $transaction->numero_destinataire = $request->numero_destinataire;
        $transaction->type_compte_id = $request->type_compte_id;
        $transaction->montant = $request->montant;
        $transaction->numero_expediteur = $request->numero_expediteur;

        $transaction->save();

       $user = User::find($request->user_id);

       $user->notify(new NouvelleTransactionAgent($transaction));

        /* Notification::send($user, new NouvelleTransactionAgent($transaction)); */
        /* return redirect()->route('valide', ['id' => $transaction->id]); */
        return redirect('/depot')->with('status', 'Transaction Réussie!!!');

    }

    public function validerRefuserTransaction(Request $request, $id){
        $transaction = Transaction::findOrFail($id);

        if($request->input('action') === 'valider'){
            $transaction->validation = True;
            $transaction->save();
        }
        elseif($request->input('action') === 'refuser'){
            $transaction->validation = False;
            $transaction->save();
        }
        return view('valDepot', compact('transaction'));
    }

    public function delete_trans($id){
        $transaction = Transaction::find($id);// chercher l'utilisateur ayant l'id
        $transaction->delete();
        return redirect('/tables');//rediriger vers la liste
    }

    public function tables()
    {
        $transactions = Transaction::paginate(5);

        return view('tables', compact('transactions'));
    }

    public function update($id)
    {
        $transactions = Transaction::paginate(3);
        return view('tables');
    }



    public function retrait()
    {
        return view('retrait');
    }


    public function index()
    {

        return view('index');

    }

    public function valide(){
        return view('valDepot');
    }

    public function validationDepot($id)
    {
        $transaction= Transaction::findOrFail($id);

        return view('valDepot', compact('transaction'));

    }

    /* public function validation()
    {
        return view('valDepot');
    } */

    public function accueil()
    {
        return view('accueil');
    }

    public function dashboard()
    {
        return view('dash');
    }


    public function forgot()
    {
        return view('auth.forgot-password');
    }
}
