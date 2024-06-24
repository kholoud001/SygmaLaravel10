<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    use HasFactory;


    protected $table='modeles';

    protected $fillable = ['name', 'marque_id'];

    public function marque()
    {
        return $this->belongsTo(Marque::class);
    }

    public function dossiers()
    {
        return $this->hasMany(Dossier::class);
    }
}
