<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            "title" => $this->title.' '.$this->company->title,
            "products" => ProductResource::collection($this->products),
            "company_id" => $this->company_id,
        ];
    }
}
