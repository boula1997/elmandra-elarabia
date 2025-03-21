<?php

namespace App\Models;
use App\Traits\MorphFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Setting extends Model implements TranslatableContract
{

    use HasFactory, Translatable,MorphFile;
    protected $table = 'settings';
    protected $guarded = [];
    public $translatedAttributes = ['title', 'subtitle', 'description','copyright','address1','address2'];
    public $timestamps = true;


    public function getLogoAttribute($val)
    {
        return file_exists($val) ? asset($val) :  asset('default.jpg');
    }
    public function getTabAttribute($val)
    {
        return file_exists($val) ? asset($val) :  asset('default.jpg');
    }
    public function getWhiteLogoAttribute($val)
    {
        return file_exists($val) ? asset($val) :  asset('default.jpg');
    }
    public function getbreadcrumbAttribute($val)
    {
        return file_exists($val) ? asset($val) :  asset('default.jpg');
    }
}
