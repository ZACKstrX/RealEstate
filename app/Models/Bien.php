<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
        protected $fillable = [
            'surface',
            'image',
            'prix',
            'city_id',
            'type_bien_id',
            'status_id',
            'user_id',
            'etat_id'

        ];
    use HasFactory;
}
