<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Banner;
use Bluemmb\Faker\PicsumPhotosProvider;
use Faker\Generator as Faker;

$factory->define(Banner::class, function (Faker $faker) {
    $faker->addProvider(new PicsumPhotosProvider($faker));
    return [
        'image'=>$faker->image('public/storage/images',1170,170),
        'title'=>$faker->firstName(),
        'link'=>$faker->url,
    ];
});
