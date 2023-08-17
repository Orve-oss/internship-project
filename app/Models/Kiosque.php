<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kiosque extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'adresse',
        'heure_ouverture',
        'heure_fermeture'
    ];
    public function users(){
        return $this->hasMany(User::class);
    }public function transactions(){
        return $this->hasMany(Transaction::class);
    }


}
