<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductAttribute;
use Faker\Generator as Faker;

$factory->define(ProductAttribute::class, function (Faker $faker) {
    return [
        'size'=>$faker->numberBetween(10,20),
        'color'=>$faker->colorName,
    ];
});
