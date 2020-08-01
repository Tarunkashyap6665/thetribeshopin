<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class OrderProduct extends Model
{
    protected $guarded=[];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
