<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\TypeEquip
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Equip> $equips
 * @property-read int|null $equips_count
 * @method static \Illuminate\Database\Eloquent\Builder|TypeEquip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeEquip newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeEquip query()
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Equip> $equips
 * @mixin \Eloquent
 */
class TypeEquip extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'type_equip';

    protected $fillable = [
        'name_type',  // Название типа, например МФУ
        'specs_fields'
    ];

    protected $casts = [
        'specs_fields' => 'array'
    ];

    public function equips(): HasMany
    {
        return $this->hasMany(Equip::class);
    }
}
