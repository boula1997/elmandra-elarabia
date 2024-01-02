<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
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
            "logo" => $this->logo,
            "white_logo" => $this->white_logo,
            "map" => $this->map,
            "address1" => $this->address1,
            "address2" => $this->address2,
            "phones" => contacts('phone'),
            "socials" => contacts('social'),
            "emails" => contacts('email'),
            "tab" => $this->tab,
            "appointment1" => $this->appointment1,
            "copyright" => $this->copyright,
            "description" => $this->description,
            "meta_data" => $this->meta_data,
            "title" => $this->title,
            "taxes" => $this->taxes,
            "breadcrumb" => asset($this->breadcrumb),
        ];
    }
}
