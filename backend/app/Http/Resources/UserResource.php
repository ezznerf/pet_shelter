<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'phoneNumber' => $this->phone_number,
            'userPicPath' => $this->user_pic_path,
            'isActive' => $this->is_active,
            'level' => $this->level,
            'balance' => $this->balance,
            'forms' => FormResource::collection($this->user_forms),
            'achivments' => AchivmentResource::collection($this->achivments),

        ];
    }
}
