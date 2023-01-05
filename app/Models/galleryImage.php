<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galleryImage extends Model
{
    use HasFactory;

    protected $table = 'gallery_image';


    protected $fillable = ['title_key','image','status'];

    
    public function getTitle()
    {
        return $this->belongsTo(imageTitle::class);
    }

}
