<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AssessmentSubject extends Model
{
    use HasFactory;

    protected $table = 'assessment_subject';

    protected $fillable = [
        'assessment_id',
        'subject_id',
    ];

    public function subjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class)
            ->using(AssessmentSubject::class)
            ->withPivot('score');
    }
}
