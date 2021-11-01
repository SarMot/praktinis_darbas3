<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AttendanceGroup;
use Faker\Generator as Faker;

$factory->define(AttendanceGroup::class, function (Faker $faker) {
    $difficulty =array("easy", "medium", "hard");

    return [


        "name" => $faker->company(),
        "description"=>$faker->sentence(5),
        "difficulty"=> $difficulty[rand(0,2)],
        "school_id"=>rand(1,20)
    ];
});
