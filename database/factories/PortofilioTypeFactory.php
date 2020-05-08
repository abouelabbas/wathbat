<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Portfolio_type::class, function (Faker $faker) {
    return [
        'en_type' => $faker->name,
        'ar_type' => $faker->name,
       
    ];
});
