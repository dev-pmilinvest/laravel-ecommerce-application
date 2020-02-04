<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
        'logo'          =>  $faker->image(),
        'name'   =>  $faker->name,
        'slug'     =>   $faker->slug(),

    ];
});
