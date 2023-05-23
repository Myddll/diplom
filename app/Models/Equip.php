<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Equip
 *
 * @property int $id
 * @property int $type_equip_id
 * @property string $title
 * @property int $status
 * @property int|null $computer_id
 * @property int|null $cabinet_id
 * @property mixed $specs
 * @property-read \App\Models\Computer|null $computers
 * @property-read \App\Models\TypeEquip|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Equip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Equip newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Equip query()
 * @method static \Illuminate\Database\Eloquent\Builder|Equip whereCabinetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equip whereComputerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equip whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equip whereSpecs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equip whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equip whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equip whereTypeEquipId($value)
 * @property-read \App\Models\Cabinet|null $cabinet
 * @mixin \Eloquent
 */
class Equip extends Model
{
    use HasFactory;

    public $timestamps = false;

    public const NEW_STATUS = 1,
        GOOD_STATUS = 2,
        OK_STATUS = 3,
        BAD_STATUS = 4;

    public const STATUS_EQUIP = [
        self::NEW_STATUS => 'Новый',
        self::GOOD_STATUS => 'Хорошее',
        self::OK_STATUS => 'Нормальное',
        self::BAD_STATUS => 'Плохое'
    ];

    protected $table = 'equips';

    protected $fillable = [
        'type_equip_id',
        'title',
        'status',
        'computer_id',
        'cabinet_id',
        'specs',
    ];

    protected $casts = [
        'specs' => 'array'
    ];

    public function computers(): BelongsTo
    {
        return $this->belongsTo(Computer::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(TypeEquip::class, 'type_equip_id');
    }

    public function cabinet(): BelongsTo
    {
        return $this->belongsTo(Cabinet::class);
    }
}
