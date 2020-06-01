<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\POST;	//POST la model minh se khoi tao
use Faker\Generator as Faker;

$factory->define(POST::class, function (Faker $faker) {
    return [
        'title'=>$faker->text,
        'user_id'=>rand(1,10)
    ];
});
