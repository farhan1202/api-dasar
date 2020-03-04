<?php

namespace App\Http\Resources\v2;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'full_name' => $this->first_name . ' ' . $this->last_name,
            'phone_number' => $this->phone,
            'create_at' => $this->created_at->diffForHumans()
        ];
    }
}
