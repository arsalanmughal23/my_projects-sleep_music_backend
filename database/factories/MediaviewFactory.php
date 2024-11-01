<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Mediaview;
use Faker\Generator as Faker;

$factory->define(Mediaview::class, function (Faker $faker) {

    return [
        'user_id' => $faker->word,
        'media_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});