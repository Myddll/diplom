<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeEquip extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'types_equip';

    protected $fillable = [
        'type_equip',  // Название типа, например МФУ
        'specs_fields'
    ];

    public function equips(): HasMany
    {
        return $this->hasMany(Equip::class);
    }
}
