<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * App\Models\Computer
 *
 * @property int $id
 * @property int|null $cabinet_id
 * @property string $processor
 * @property string $motherboard
 * @property string $ram
 * @property string $videocard
 * @property string $memory
 * @property string $power_unit
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Cabinet|null $cabinet
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Equip> $equips
 * @property-read int|null $equips_count
 * @method static \Illuminate\Database\Eloquent\Builder|Computer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Computer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Computer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Computer whereCabinetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Computer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Computer whereMemory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Computer whereMotherboard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Computer wherePowerUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Computer whereProcessor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Computer whereRam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Computer whereVideocard($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Equip> $equips
 * @mixin \Eloquent
 */
class Computer extends Model
{
    use HasFactory, LogsActivity;

    public $timestamps = false;

    protected $table = 'computers';

    protected $fillable = [
        'cabinet_id',
        'processor',
        'motherboard',
        'ram',
        'videocard',
        'memory',
        'power_unit',
    ];

    public function equips(): HasMany
    {
        return $this->HasMany(Equip::class);
    }

    public function cabinet(): BelongsTo
    {
        return $this->belongsTo(Cabinet::class);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['*'])->logOnlyDirty();
    }
}
