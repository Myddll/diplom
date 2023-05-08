<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employer extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'employers';

    protected $fillable = [
        'job_id',
        'telephone',
        'firstname',
        'lastname',
        'date_birth',
    ];

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }

    public function cabinets(): HasMany
    {
        return $this->hasMany(Cabinet::class);
    }

    public function getDateBirthAttribute(string $date)
    {
        return Carbon::parse($date)->format('d.m.Y');
    }

    public function setDateBirthAttribute(string $date)
    {
        $this->attributes['date_birth'] = Carbon::parse($date)->format('Y-m-d');
    }
}
