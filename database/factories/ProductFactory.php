<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\Product;
use Faker\Generator as Faker;
use App\Categorie;

$factory->define(App\Product::class, function (Faker $faker) {
	$list_cate_id=Categorie::pluck('id');
    return [
        'name' => $faker->name,
        'quantity'=> $faker->randomDigitNot(5) ,
        'category_id'=> $faker->randomElement($list_cate_id),// ở đây vì khóa ngoại nên ta phải gọi class khóa chính vào cụ thể là Model Categorie
    ];
});
