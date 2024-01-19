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
    public $translatedAttributes = ['title'];
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
        })->when(request()->price, function ($q) {
            return $q->where('price', '>=',request()->minPrice)->where('price', '<=',request()->maxPrice);
        })->when(request()->year, function ($q) {
            return $q->whereYear('start_date', request()->year);
        })->when(request()->city_id, function ($q) {
            return $q->where('city_id', request()->city_id);
        })->when(request()->section_id, function ($q) {
            return $q->where('section_id', request()->section_id);
        })->when(request()->category_id, function ($q) {
            return $q->where('category_id', request()->category_id);
        })->when(request()->kind, function ($q) {
            return $q->where('kind', request()->kind);
        })->when(request()->suspensionType, function ($q) {
            return $q->where('suspensionType', request()->suspensionType);
        })->when(request()->axelsNumber, function ($q) {
            return $q->where('axelsNumber', request()->axelsNumber);
        })->when(request()->gearBox, function ($q) {
            return $q->where('gearBox', request()->gearBox);
        })->when(request()->configuration, function ($q) {
            return $q->where('configuration', request()->configuration);
        })->when(request()->engineCapacity, function ($q) {
            return $q->where('engineCapacity', request()->engineCapacity);
        })->when(request()->mileAge, function ($q) {
            return $q->where('mileAge', request()->mileAge);
        })->when(request()->number, function ($q) {
            return $q->where('number', request()->number);
        })->when(request()->manYear, function ($q) {
            return $q->where('manYear', request()->manYear);
        })->when(request()->promotions, function ($q) {
            return $q->where('promotions', request()->promotions);
        })->when(request()->emission_code, function ($q) {
            return $q->where('emission_code', request()->emission_code);
        })->when(request()->fuel_type, function ($q) {
            return $q->where('fuel_type', request()->fuel_type);
        })->when(request()->damaged, function ($q) {
            return $q->where('damaged', request()->damaged);
        })->when(request()->dutch_trucks, function ($q) {
            return $q->where('dutch_trucks', request()->dutch_trucks);
        });
   }

    
}
