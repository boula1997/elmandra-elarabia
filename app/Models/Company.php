<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Company extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    protected $table = 'companys';
    protected $guarded = [];
    public $translatedAttributes = ['title'];
    public $timestamps = true;
    
}
