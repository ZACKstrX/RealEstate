<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Bien extends Model
{

    use HasFactory;

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
        'etat_id',
        "detail_id"

    ];

    public function etat() : BelongsTo {
        return $this->belongsTo(Etat::class,'etat_id','id');
    }

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

    public function bienDetail() : HasOne {
        return $this->HasOne(BienDetails::class,"detail_id","id");
    }

}
