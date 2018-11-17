<?php

use App\Models\Frontend\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'path' => $faker->imageUrl(600, 500)
    ];
});
