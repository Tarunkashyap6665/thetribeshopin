<?php

namespace App;

use Darryldecode\Cart\CartCollection;

class WishlistDatabase {

public function has($key)
{
    return WishlistStorage::find($key);
}

public function get($key)
{
    if($this->has($key))
    {
        return new CartCollection(WishlistStorage::find($key)->cart_data);
    }
    else
    {
        return [];
    }
}

public function put($key, $value)
{
    if($row = WishlistStorage::find($key))
    {
        // update

        $row->cart_data = $value;
        $row->save();
    }
    else
    {
        WishlistStorage::create([
            'id' => $key,
            'cart_data' => $value
        ]);
    }
}
}