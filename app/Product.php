<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use  Laravel\Scout\Searchable;
class Product extends Model
{
    use Searchable;
    protected $guraded=[];

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs() 
    {
        return 'name';
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function haveImages(){
        return $this->hasMany(ProductImage::class);
    }

    public function haveAttribute(){
        return $this->hasOne(ProductAttribute::class);
    }
}
