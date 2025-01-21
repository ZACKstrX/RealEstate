<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bien extends Model
{

    use HasFactory;

    public function user() : BelongsTo {
        return $this->belongsTo(User::class,'user_id');
    }

    public function city() : BelongsTo {
        return $this->belongsTo(City::class);
    }

    public function typeBien() : BelongsTo {
        return $this->belongsTo(TypeBien::class);
    }

    public function statue() : BelongsTo {
        return $this->belongsTo(Status::class);
    }







































    protected $fillable = [
        'title',
        'description',
        'phone_number',
        'email',
        'surface',
        'image',
        'prix',
        'city_id',
        'type_bien_id',
        'status_id',
        'user_id',
        'etat_id'

    ];

    public function etat() : BelongsTo {
        return $this->belongsTo(Etat::class,'etat_id','id');
    }

}
