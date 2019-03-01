<?php

use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
      'name' => $faker->text($maxNbChars = 20) ,
      'description' => $faker->text($maxNbChars = 100),
      'price' => $faker->randomNumber(2),
    ];
});
