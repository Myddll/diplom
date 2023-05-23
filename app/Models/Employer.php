<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Employer
 *
 * @property int $id
 * @property int|null $job_id
 * @property string $telephone
 * @property string $firstname
 * @property string $lastname
 * @property string $date_birth
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Cabinet> $cabinets
 * @property-read int|null $cabinets_count
 * @property-read \App\Models\Job|null $job
 * @method static \Illuminate\Database\Eloquent\Builder|Employer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employer whereDateBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employer whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employer whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employer whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employer whereTelephone($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Cabinet> $cabinets
 * @mixin \Eloquent
 */
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
