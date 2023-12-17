<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            "image" => $this->image,
            "title" => $this->title,
            "description" => $this->description,
            "category" => new ProductResource($this->category),
            "price" => $this->price,
            "kind" => $this->kind,
            "engineCapacity" => $this->engineCapacity,
            "suspensionType" => $this->suspensionType,
            "mileAge" => $this->mileAge,
            "manYear" => $this->manYear,
            "configuration" => $this->configuration,
            "gearBox" => $this->gearBox,
            "axelsNumber" => $this->axelsNumber,
        ];
    }
}
