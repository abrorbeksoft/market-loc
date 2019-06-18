<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Kitob;
use Faker\Generator as Faker;

$factory->define(Kitob::class, function (Faker $faker) {
    $sentence=$faker->sentence(5);
    return [
        'name'=>substr($sentence,0,strlen($sentence)-1),
        'text'=>$faker->text(700),
        'picture'=>$faker->image(),
        'price'=>$faker->numberBetween(300,400),

    ];
//    $sentence = $faker->sentence(5);
//    return [
//        'title' => substr($sentence, 0, strlen($sentence) - 1),
//        'description' => $faker->paragraphs(5, true),
//    ];
});
