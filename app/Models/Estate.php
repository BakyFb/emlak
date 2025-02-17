<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    /**
     * @return HasMany
     */
    public function estate(): HasMany
    {
        return $this->hasMany(Estate::class);
    }
}
