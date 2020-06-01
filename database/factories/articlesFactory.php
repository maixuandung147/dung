<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use App\categories;

$factory->define(App\articles::class, function (Faker $faker) {
	$list_cate_id=categories::pluck('id');
    return [
        'name' => $faker->name,
        'description'=> $faker->company ,
        'content'=> $faker->text($maxNbChars = 200),
        'category_id'=> $faker->randomElement($list_cate_id),
    ];
});
