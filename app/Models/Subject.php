<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    protected $fillable = [
        'title'
    ];

    public function teacher() : BelongsTo {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }

    public function students(): HasMany {
        return $this->hasMany(Student::class);
    }
}
