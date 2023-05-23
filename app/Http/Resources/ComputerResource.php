<?php

namespace App\Http\Resources;

use App\Models\Computer;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ComputerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var Computer $this */
        return [
            'id' => $this->id,
            'cabinet' => $this->cabinet,
            'processor' => $this->processor,
            'motherboard' => $this->motherboard,
            'ram' => $this->ram,
            'power_unit' => $this->power_unit,
            'memory' => $this->memory,
            'videocard' => $this->videocard,
            'equip' => $this->equips,
        ];
    }
}
