<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'age',
    ];

    public function subjects(): BelongsToMany {
        return $this->belongsToMany(Subject::class);
    }

    public function direction(): MorphOne {
        return $this->morphOne(Direction::class, 'relation');
    }
}
