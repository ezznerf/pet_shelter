<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use function Symfony\Component\Translation\t;

class VolunteeringResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'typeHelpId' => $this->type_help_id,
            'shelterId' => $this->shelter_id,
            'typeOfCar' => $this->type_of_car,
            'distance' => $this->distance,
            'durationOfWalk' => $this->duration_of_walk,
        ];
    }
}
