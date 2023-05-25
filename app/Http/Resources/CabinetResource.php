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
            'id' => $this->id,
            'number' => $this->number,
            'employer' => !$this->employer ? null : [
                'id' => $this->employer->id,
                'job_id' => $this->employer->job->title,
                'telephone' => $this->employer->telephone,
                'firstname' => $this->employer->firstname,
                'lastname' => $this->employer->lastname,
                'date_birth' => $this->employer->date_birth,
            ],
        ];
    }
}
