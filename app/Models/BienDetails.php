<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BienDetails extends Model
{
    protected $fillable = [
        'rooms',
        'baths',
        'parages',
        'balconies',
        'description',
        'phone_number',
        'email',
        'bien_id'
    ];
    use HasFactory;
}
