<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductAttribute extends Model
{
    public function product()
    {
       return $this->belongsTo(Product::class);
    }
}
