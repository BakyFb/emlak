<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function type(): HasMany
    {
        return $this->hasMany(Type::class);
    }
}
