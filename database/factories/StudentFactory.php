<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\entities\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    
    return [
       'name' => $faker->firstName,
    ];
});