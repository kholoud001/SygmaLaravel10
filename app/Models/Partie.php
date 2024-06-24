<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partie extends Model
{
    use HasFactory;

    protected $table='parties';


    protected $fillable = ['name'];

    public function dossiers()
    {
        return $this->belongsToMany(Dossier::class);
    }
}
