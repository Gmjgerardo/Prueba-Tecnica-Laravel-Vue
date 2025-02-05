<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function teacher() : BelongsTo {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }

    public function students(): BelongsToMany {
        return $this->belongsToMany(Student::class);
    }
}
