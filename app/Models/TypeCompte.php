<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCompte extends Model
{
    use HasFactory;
    protected $fillable=[
        'libelle'
    ];

    public function comptes(){
        return $this->hasMany(Compte::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
}
