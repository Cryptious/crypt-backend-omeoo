<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class images_product extends Model
{
    use HasFactory;

    protected $fillable = [
        'products_id',
        'img_name'
    ];

    public function getUrlAttribute($url){
        return config('app.url').Storage::url($url);
    }
}
