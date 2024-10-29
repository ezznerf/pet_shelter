<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Route;

class ShelterResource extends JsonResource
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
            'needId' => $this->need_id,
            'name' => $this->name,
            'location' => $this->location,
            'phoneNumber' => $this->phone_number,
            'description' => $this->description,
            'email' => $this->email,

        ];
    }
}
