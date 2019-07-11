<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Picture;
use Faker\Generator as Faker;

$factory->define(Picture::class, function (Faker $faker) {
    return [
        'name'=>$faker->imageUrl(),
        'product_id'=>4,
    ];
});
