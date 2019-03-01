<?php

use Faker\Generator as Faker;

$factory->define(App\Store::class, function (Faker $faker) {
    return [
      'name' => $faker->text($maxNbChars = 20) ,
      'address' => $faker->address,
      'description' => $faker->text($maxNbChars = 100),
    ];
});
