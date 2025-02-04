<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Direction extends Model
{
    use HasFactory;

    protected $fillable = [
        'street',
        'district',
        'pc',
        'city',
        'state',
    ];

    public function relation(): MorphTo {
        return $this->morphTo();
    }
}
