<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ComplaintType;
use Faker\Generator as Faker;

$factory->define(ComplaintType::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'parent_id' => rand(1, 5),
        'position' => rand(1, 10),
        'status' => rand(0, 1)
    ];
});
