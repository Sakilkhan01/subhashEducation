<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imageTitle extends Model
{
    use HasFactory;

    protected $table = 'image_title';


    protected $fillable = ['title','status'];

    public function gallery() {
        return $this->hasMany(galleryImage::class);
    }


    public function getImages()
    {
        return $this->hasOne(galleryImage::class);
    }
    
}
