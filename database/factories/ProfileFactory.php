<?php

use App\Models\Frontend\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {

    $religions = ['Islam', 'Buddhism', 'Christianity', 'Wicca', 'No religion', 'Other'];

    return [
//        'user_id' => \App\Models\Backend\User::inRandomorder()->first(),
        'age' => $faker->numberBetween(15, 50),
        'height' => $faker->numberBetween(5, 10),
        'weight' => $faker->numberBetween(40, 100),
        'race' => $faker->country,
        'mother' => $faker->country,
        'mothers_mother' => $faker->country,
        'mothers_father' => $faker->country,
        'father' => $faker->country,
        'fathers_mother' => $faker->country,
        'fathers_father' => $faker->country,
        'religion' => array_random($religions),
        'adopted' => $faker->boolean,
        'weight_change' => $faker->boolean,
        'amount_lost' => $faker->numberBetween(1, 20),
        'dexterity' => array_random(['right-handed', 'left-handed']),
        'bones' => array_random(['small', 'medium', 'large']),
        'complexion' => array_random(['dark brown', 'white', 'brown']),
        'tan' => 'slight',
        'skin' => 'medium',
        'dimples' => $faker->boolean,
        'eye_color' => array_random(['brown', 'blue', 'white']),
        'eye_set' => 'average',
        'eye_size' => 'average',
        'eye_shape' => 'round',
        'hair_color' => array_random(['black', 'gray', 'blond']),
        'hair_type' => array_random(['Straight', 'curly']),
        'hair_texture' => 'medium',
        'hair_fullness' => array_random(['thick', 'thin']),
        'baldness' => $faker->boolean,
        'baldness_family' => $faker->boolean,
        'graying' => $faker->boolean,
        'graying_age' => $faker->numberBetween(18, 40),
        'body_facial_features' => 'medium',
        'teeth' => array_random(['good', 'excellent']),
        'orthodontic_work' => $faker->boolean,
        'orthodontic_age' => $faker->numberBetween(15, 50),
        'hearing' => array_random(['good', 'excellent']),
        'vision' => array_random(['good', 'excellent']),
        'vision_prescription' => 'null',
        'glasses' => $faker->boolean,
        'vision_problem' => $faker->boolean,
        'vision_problem_mother' => $faker->boolean,
        'stigmatism' => $faker->boolean,
        'stigmatism_age' => $faker->numberBetween(15, 40),
        'donated' => $faker->boolean,
        'number_of_donations' => $faker->numberBetween(1, 5),
        'personal_message' => $faker->text,
        'photo_permission' => $faker->boolean,
        'knows_someone' => $faker->boolean,
        'rewarding' => $faker->boolean,
        'fascinating' => $faker->boolean,
        'need_money' => $faker->boolean,
        'other' => $faker->text
    ];
});
