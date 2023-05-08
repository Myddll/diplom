<?php

namespace App\Http\Resources;

use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var Employer $this */

        return [
            'id' => $this->id,
            'job' => $this->job->title,
            'telephone' => $this->telephone,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'date_birth' => $this->date_birth,
        ];
    }
}
