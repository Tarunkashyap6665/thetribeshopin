<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductImage;
use Bluemmb\Faker\PicsumPhotosProvider;
use Faker\Generator as Faker;

$factory->define(ProductImage::class, function (Faker $faker) {
    $faker->addProvider(new PicsumPhotosProvider($faker));
    return [
        'product_id'=>$faker->numberBetween(1,20),
        'image'=>$faker->image('public/storage/images',250,300),
    ];
});
