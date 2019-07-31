<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use Faker\Generator as Faker;
use App\Random;

$factory->define(Random::class, function (Faker $faker) {
    return [
        'description' => $faker->text(20)
    ];
});
