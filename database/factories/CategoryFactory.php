<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});

$factory->define(\App\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'image' => $faker->image()
    ];
});

$factory->define(\App\Models\CategoryAndProduct::class, function (Faker $faker) {
    return [
        'category_id' => $faker->numberBetween(1, 10),
        'product_id' => $faker->numberBetween(1, 10)
    ];
});

