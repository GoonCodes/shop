<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text(191),
        'price' => 500,
        'stock' => 4,
    ];
});
