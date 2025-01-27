<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function comment(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
