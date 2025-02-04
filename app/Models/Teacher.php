<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'email',
    ];

    public function subject(): HasOne {
        return $this->hasOne(Subject::class);
    }

    public function direction(): MorphOne {
        return $this->morphOne(Direction::class, 'relation');
    }
}
