<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BienDetails extends Model
{
    protected $fillable = [
        'rooms',
        'baths',
        'parages',
        'balconies',
         'bien_id'
    ];
    public function bien() :BelongsTo{
        return $this->belongsTo(Bien::class,'bien_id');
    }
    use HasFactory;
}
