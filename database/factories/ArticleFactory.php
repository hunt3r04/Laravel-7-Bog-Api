<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(8),
        'body' => $faker->text(3000),
        'slug' => $faker->unique()->slug,
        'author'=> $faker->name(),
        'category_id'=> 1
    ];
});
