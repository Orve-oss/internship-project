<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable=[
        'type_transaction_id',
        'user_id',
        'kiosque_id',
        'nom_expediteur',
        'nom_destinataire',
        'numero_destinataire',
        'type_compte_id',
        'montant',

    ];

    public function type_transaction(){
        return $this->belongsTo(TypeTransaction::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function type_compte(){
        return $this->belongsTo(TypeCompte::class);
    }

    public function kiosque(){
        return $this->belongsTo(Kiosque::class);
    }
}
