<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\OrderProduct;
class Order extends Model
{
    protected $guarded=[];

    // public function getIdAttribute($value)
    // {
    //     return 't3ags'.$value;
    // }

    public function haveOrderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }
}
