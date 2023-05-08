<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Computer extends Model
{
    use HasFactory;

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

    public function equips(): BelongsToMany
    {
        return $this->belongsToMany(Equip::class);
    }

    public function cabinet(): BelongsTo
    {
        return $this->belongsTo(Cabinet::class);
    }
}
