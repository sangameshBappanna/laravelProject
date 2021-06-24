<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Program;
use Faker\Generator as Faker;

$factory->define(Program::class, function (Faker $faker) {
    return [
        'program_id'=>$faker->unique()->numberBetween(1,100),
        'program_title'=>$faker->word(),
        "program_age_rating"=>$faker->numberBetween(1,10),
        "program_description"=>$faker->paragraph(),
        "program_type"=>$faker->word()
    ];
});
