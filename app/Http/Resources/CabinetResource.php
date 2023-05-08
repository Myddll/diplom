<?php

namespace App\Http\Resources;

use App\Models\Cabinet;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CabinetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var Cabinet $this */
        return [
            'number' => $this->number,
            'employer' => $this->employer,
        ];
    }
}
