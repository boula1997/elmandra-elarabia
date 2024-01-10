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
           return $q->where('price', request()->price);
       })->when(request()->year, function ($q) {
           return $q->whereYear('start_date', request()->year);
       })->when(request()->city_id, function ($q) {
           return $q->where('city_id', request()->city_id);
       })->when(request()->section_id, function ($q) {
           return $q->where('section_id', request()->section_id);
       })->when(request()->category_id, function ($q) {
        // dd( $q->where('category_id', request()->category_id)->get());
           return $q->where('category_id', request()->category_id);
       });
   }

    
}

