<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

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
