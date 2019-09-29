<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comics;
use Faker\Generator as Faker;

$factory->define(Comics::class, function (Faker $faker) {

    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'name' => $faker->word
    ];
});
