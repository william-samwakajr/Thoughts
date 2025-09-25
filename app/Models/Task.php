<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Belongsto;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
    ];

    public function user():BelongsTo{
        return $this->belongsto(User::class);
    }
}

