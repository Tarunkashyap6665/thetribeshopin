<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    public function setImageAttribute($value){
        $this->attributes['image']=substr($value,7);
    }
}
