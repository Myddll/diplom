<?php

namespace App\Http\Resources;

use App\Models\Equip;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EquipResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var Equip $this */

        return [
            'title' => $this->title,
            'name_type' => $this->type->name_type,
            'status' => Equip::STATUS_EQUIP[$this->status] ?? 'Неизвестно',
            'computer' => $this->computer_id,
            'cabinet' => $this->cabinet ? [
                'id' => $this->cabinet->id,
                'number' => $this->cabinet->number
            ] : null,
            'specs' => $this->specs,
        ];
    }
}
