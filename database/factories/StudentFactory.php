<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        "name" => $faker->name(),
        "surname"=>$faker->lastName(),
        "group_id"=> $faker->randomDigit(),
        "image_url"=> $faker->imageUrl(300,300, "animals", true )
    ];

});

