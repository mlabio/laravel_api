<?php

use Faker\Generator as Faker;

$factory->define(App\Products::class, function (Faker $faker) {
    return [
        'product_name' => $faker->text(50),
        'product_description' => $faker->text(200)
    ];
});
