<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price'
    ];

    public function images(){
        return $this->hasMany(images_product::class,'products_id','id');
    }

}
