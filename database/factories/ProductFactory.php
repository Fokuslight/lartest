<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Product;
use App\Tag;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->colorName,
        'image' => $faker->imageUrl(),
        'category_id' => random_int(1, 8),
        'price' => random_int(40, 150),
        'description' => $faker->text(50),
        'content' => $faker->text(300)
    ];
});


$factory->define(Tag::class, function (Faker $faker) {
    return [
        'title' => $faker->colorName,
    ];
});

$factory->define(Category::class, function (Faker $faker) {
    return [
        'title' => $faker->colorName,
    ];
});
