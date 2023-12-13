<?php

namespace App\Models;

use App\Traits\MorphFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Coupon extends Model implements TranslatableContract
{
    use HasFactory, Translatable,MorphFile;
    protected $table = 'coupons';
    protected $guarded = [];
    public $translatedAttributes = ['title'];
    public $timestamps = true;
    
    public function getImageAttribute(){
        return  $this->file?asset($this->file->url): asset('default.jpg');
   }

   public function marketer(){
    return $this->belongsTo(Marketer::class,'marketer_id');
   }
   public function users(){
    return $this->hasMany(Order::class,'user_id');
   }
   public function orders(){
    return $this->hasMany(Order::class,'coupon_id');
   }
   
}
