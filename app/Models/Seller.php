<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Seller extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    protected $table = 'sellers';  // TODO(Boula): make seller able to add order to client
    protected $guarded = [];
    public $translatedAttributes = ['title'];
    public $timestamps = true;

    public function users(){
        return $this->hasMany(User::class);
    }
    
}
