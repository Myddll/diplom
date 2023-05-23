<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Job
 *
 * @property int $id
 * @property string $title
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Employer> $employers
 * @property-read int|null $employers_count
 * @method static \Illuminate\Database\Eloquent\Builder|Job newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job query()
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereTitle($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Employer> $employers
 * @mixin \Eloquent
 */
class Job extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'jobs';

    protected $fillable = [
        'title',
    ];

    public function employers(): HasMany
    {
        return $this->hasMany(Employer::class);
    }
}
