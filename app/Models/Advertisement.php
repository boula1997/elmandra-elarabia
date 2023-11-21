<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Advertisement extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    protected $table = 'advertisements';
    protected $guarded = [];
    public $translatedAttributes = ['title'];
    public $timestamps = true;
    
}
