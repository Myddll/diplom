<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Equip extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'equips';

    protected $fillable = [
        'type_id',
        'title',
        'specs',
    ];

    public function computers(): BelongsToMany
    {
        return $this->belongsToMany(Computer::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(TypeEquip::class);
    }
}
