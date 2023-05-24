<?php

namespace App\Http\Resources;

use App\Models\Program;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProgramResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var Program $this */

        return [
            'title' => $this->title,
            'date' => $this->date,
            'need_paid' => Carbon::now()->format('Y-m-d') >= Carbon::parse($this->date),  //(Carbon::now()->format('Y-m-d') <= Carbon::parse($this->date_before)) ?? false,
        ];
    }
}
