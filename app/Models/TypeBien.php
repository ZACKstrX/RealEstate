<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeBien extends Model
{
    protected $fillable = [
        'name'
    ];
    public function biens() : HasMany{
        return $this->hasMany(Bien::class,'type_bien_id');
    }

    use HasFactory;
}
