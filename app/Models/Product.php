<?php

namespace App\Models;

use App\Traits\MorphFile;
use App\Traits\MorphFiles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;



class Product extends Model implements TranslatableContract
{
    use HasFactory, Translatable, MorphFile,MorphFiles;
    protected $table = 'products';
    public $translatedAttributes = ['title','description'];
    protected $guarded = [];
    public $timestamps = true;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }


    public function getImageAttribute(){
        return  $this->file? asset($this->file->url): asset('default.jpg');
   }
   
   public function getImagesAttribute()
   {
       return  count($this->files)>0?$this->files:["default.jpg"];
   }


   public function scopeSearch($query)
   {
      
       $query->when(request()->title, function ($q) {
           return $q->whereHas('translations', function ($q2) {
               $q2->where('title', 'like', '%' . request()->title . '%');
           });
        })->when(request()->minPrice, function ($q) {
            return $q->where('price', '>=',request()->minPrice)->where('price', '<=',request()->maxPrice);
        })->when(request()->year, function ($q) {
            return $q->whereYear('start_date', request()->year);
        })->when(request()->city_id, function ($q) {
            return $q->where('city_id', request()->city_id);
        })->when(request()->section_id, function ($q) {
            return $q->where('section_id', request()->section_id);
        })->when(request()->category_id, function ($q) {
            return $q->whereIn('category_id', request()->category_id);
        })->when(request()->kind, function ($q) {
            return $q->whereIn('kind', request()->kind);
        })->when(request()->suspensionType, function ($q) {
            return $q->whereIn('suspensionType', request()->suspensionType);
        })->when(request()->axelsNumber, function ($q) {
            return $q->where('axelsNumber', request()->axelsNumber);
        })->when(request()->gearBox, function ($q) {
            return $q->whereIn('gearBox', request()->gearBox);
        })->when(request()->configuration, function ($q) {
            return $q->whereIn('configuration', request()->configuration);
        })->when(request()->engineCapacity, function ($q) {
            return $q->where('engineCapacity', request()->engineCapacity);
        })->when(request()->mileAge, function ($q) {
            return $q->where('mileAge', request()->mileAge);
        })->when(request()->number, function ($q) {
            return $q->where('number', request()->number);
        })->when(request()->promotions, function ($q) {
            return $q->where('promotions', request()->promotions);
        })->when(request()->emission_code, function ($q) {
            return $q->where('emission_code', request()->emission_code);
        })->when(request()->fuel_type, function ($q) {
            return $q->where('fuel_type', request()->fuel_type);
        })->when(request()->damaged, function ($q) {
            return $q->where('damaged', request()->damaged);
        })->when(request()->model_year, function ($q) {
            return $q->where('model_year', request()->model_year);
        })->when(request()->model, function ($q) {
            return $q->where('model', request()->model);
        })->when(request()->engine, function ($q) {
            return $q->where('engine', request()->engine);
        })->when(request()->wheelbase, function ($q) {
            return $q->where('wheelbase', request()->wheelbase);
        })->when(request()->cab, function ($q) {
            return $q->where('cab', request()->cab);
        })->when(request()->steering, function ($q) {
            return $q->where('steering', request()->steering);
        })->when(request()->transmission, function ($q) {
            return $q->where('transmission', request()->transmission);
        })->when(request()->rear_axles, function ($q) {
            return $q->where('rear_axles', request()->rear_axles);
        })->when(request()->frame, function ($q) {
            return $q->where('frame', request()->frame);
        })->when(request()->gcw, function ($q) {
            return $q->where('gcw', request()->gcw);
        })->when(request()->fuel_tanker, function ($q) {
            return $q->where('fuel_tanker', request()->fuel_tanker);
        })->when(request()->tires, function ($q) {
            return $q->where('tires', request()->tires);
        })->when(request()->battery, function ($q) {
            return $q->where('battery', request()->battery);
        })->when(request()->oversize, function ($q) {
            return $q->where('oversize', request()->oversize);
        })->when(request()->color, function ($q) {
            return $q->where('color', request()->color);
        });
   }
    

    
}
