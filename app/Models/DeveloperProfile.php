<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class DeveloperProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'summary',
        'skills',
        'experience',
        'education',
        'certifications',
        'github_url',
        'linkedin_url',
        'portfolio_url',
        'preferred_work_type',
        'expected_salary',
        'is_available',
    ];

    protected $casts = [
        'skills' => 'array',
        'experience' => 'array',
        'education' => 'array',
        'certifications' => 'array',
        'is_available' => 'boolean',
        'expected_salary' => 'decimal:2',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeAvailable($query)
    {
        return $query->where('is_available', true);
    }

    public function scopeHasSkills($query, array $skills)
    {
        return $query->where(function ($q) use ($skills) {
            foreach ($skills as $skill) {
                $q->whereJsonContains('skills', $skill);
            }
        });
    }

    public function scopeByPreferredWorkType($query, $type)
    {
        return $query->where('preferred_work_type', $type);
    }

    public function scopeSalaryExpectation($query, $maxBudget)
    {
        return $query->where('expected_salary', '<=', $maxBudget);
    }
}
