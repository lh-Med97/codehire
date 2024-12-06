<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class JobListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'company_name',
        'location',
        'type',
        'experience_level',
        'salary_min',
        'salary_max',
        'required_skills',
        'benefits',
        'is_active',
    ];

    protected $casts = [
        'required_skills' => 'array',
        'benefits' => 'array',
        'is_active' => 'boolean',
        'salary_min' => 'decimal:2',
        'salary_max' => 'decimal:2',
    ];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByExperienceLevel($query, $level)
    {
        return $query->where('experience_level', $level);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function scopeSalaryRange($query, $min, $max)
    {
        return $query->where('salary_min', '>=', $min)
                    ->where('salary_max', '<=', $max);
    }
}
