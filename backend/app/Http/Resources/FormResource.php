<?php

namespace App\Http\Resources;

use App\Http\Resources\ShelterResource;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FormResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'shelterId'=> $this->shelter_id,
            'volunteeringId'=> $this->volunteering_id,
            'shelter' =>  new ShelterResource($this->shelter),
            'volunteering' => new VolunteeringResource($this->volunteering),
            'name'=> $this->name,
            'surname'=> $this->surname,
            'patronymic'=> $this->patronymic,
            'time'=> $this->time,
            'date'=> $this->date,
            'car'=> $this->car,
            'aboutYourself'=> $this->about_yourself,
            'createdAt'=> $this->created_at,
            'updatedAt'=> $this->updated_at,
        ];
    }
}
