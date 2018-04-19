<?php


use App\Product;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph(),
        'quantity' => $faker->numberBetween(1, 10),
        'status' => $faker->randomElement([Product::AVAILABLE_PRODUCT, Product::UNAVAILABLE_PRODUCT]),
        'image' =>$faker->randomElement(['1.jpeg', '2.jpeg', '3.jpeg']),
        'seller_id'=> User::all()->random()->id,
    ];
});
