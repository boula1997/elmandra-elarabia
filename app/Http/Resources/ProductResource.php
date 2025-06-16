<?php

namespace App\Http\Resources;

use App\Models\Product;
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
            "category_id" => $this->category_id,
            "subcategory_id" => $this->subcategory_id,
            "subcategory_title" => $this->subcategory->title,
            "company_id" => $this->company_id,
            "price" => $this->price,
            "kind" => $this->kind,
            "engineCapacity" => $this->engineCapacity,
            "suspensionType" => $this->suspensionType,
            "mileAge" => $this->mileAge,
            "configuration" => $this->configuration,
            "gearBox" => $this->gearBox,
            "axelsNumber" => $this->axelsNumber,
            "number"=>$this->number,
            "used_car"=>$this->used_car,
            "year"=>$this->year,
            "model"=>$this->model,
            "engine"=>$this->engine,
            "wheelbase"=>$this->wheelbase,
            "cab"=>$this->cab,
            "steering"=>$this->steering,
            "rear_axles"=>$this->rear_axles,
            "frame"=>$this->frame,
            "gcw"=>$this->gcw,
            "fuel_tanker"=>$this->fuel_tanker,
            "tires"=>$this->tires,
            "battery"=>$this->battery,
            "oversize"=>$this->oversize,
            "color"=>$this->color,
            "transmission"=>$this->transmission,
            "images" => $this->images,
        
        ];
    }
}