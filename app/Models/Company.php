<?php

namespace App\Models;
use App\Traits\MorphFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Company extends Model implements TranslatableContract
{
    use HasFactory, Translatable,MorphFile;
    protected $table = 'companies';
    protected $guarded = [];
    public $translatedAttributes = ['title','description','address'];
    public $timestamps = true;

    public function categories(){
        return $this->hasMany(Category::class);
    }
    public function getImageAttribute(){
        return  $this->file? asset($this->file->url): asset('default.jpg');
   }
}
