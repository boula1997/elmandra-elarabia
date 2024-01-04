<?php

namespace App\Http\Resources;

use Database\Seeders\CategorySeeder;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "count" => $this->count,
            "categories" =>CategoryResource::collection($this->categories),
            "description" => $this->description,
            "address" => $this->address,
            "owner" => $this->owner,
            "phone" => $this->phone,
        ];
    }
}
