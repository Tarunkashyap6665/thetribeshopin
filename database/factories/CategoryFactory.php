<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Bluemmb\Faker\PicsumPhotosProvider;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $faker->addProvider(new PicsumPhotosProvider($faker));
    return [
        // 'parent_id'=>$faker->numberBetween(1,6),
        'name'=>$faker->name,
        'description'=>$faker->paragraph(),
        'image'=>$faker->image('public/storage/images',1920,700)
    ];
});
