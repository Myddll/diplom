<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Cabinet
 *
 * @property int $id
 * @property int $number
 * @property int|null $employee_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Computer> $computers
 * @property-read int|null $computers_count
 * @property-read \App\Models\Employer|null $employer
 * @method static \Illuminate\Database\Eloquent\Builder|Cabinet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cabinet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cabinet query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cabinet whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cabinet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cabinet whereNumber($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Computer> $computers
 * @mixin \Eloquent
 */
class Cabinet extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'cabinets';

    protected $fillable = [
        'number',
        'employee_id',
    ];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class, 'employee_id', 'id');
    }

    public function computers(): HasMany
    {
        return $this->hasMany(Computer::class);
    }
}
