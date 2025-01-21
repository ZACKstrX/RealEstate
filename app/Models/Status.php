<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PhpParser\Node\Stmt\Return_;

class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function biens() : HasMany{
        return $this->hasMany(Bien::class,'status_id');
    }
}
