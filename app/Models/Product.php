<?php

namespace App\Models;

use App\Traits\MorphFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;



class Product extends Model implements TranslatableContract
{
    use HasFactory, Translatable, MorphFile;
    protected $table = 'products';
    public $translatedAttributes = ['title'];
    protected $guarded = [];
    public $timestamps = true;

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getImageAttribute(){
        return  $this->file? asset($this->file->url): asset('default.jpg');
   }

   public function company()
   {
       return $this->belongsTo(Company::class, 'company_id');
   }
   public function storeProducts()
   {
       return $this->hasMany(StoreProduct::class,'product_id');
   }
    
}

