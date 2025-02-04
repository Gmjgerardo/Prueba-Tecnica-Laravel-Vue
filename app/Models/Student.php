<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'age',
    ];

    public function subjects(): HasMany {
        return $this->hasMany(Subject::class);
    }

    public function direction(): MorphOne {
        return $this->morphOne(Direction::class, 'relation');
    }
}
