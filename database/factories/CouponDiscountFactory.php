<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CouponDiscount;
use Faker\Generator as Faker;

$factory->define(CouponDiscount::class, function (Faker $faker) {
    return [
        'name'=>$faker->word(),
        'type'=>'promo',
        'target'=>'total',
        'value'=>'25%',
        'attributes'=>[
            'discription'=>$faker->paragraph()
        ]
    ];
});
