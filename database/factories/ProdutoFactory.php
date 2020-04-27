<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App \Models\Produto;
use Faker\Generator as Faker;

$factory->define(Produto::class, function (Faker $faker) {
    return [
        //
        'codigo'=>$faker->unique()->randomNumber(8),
        'name'=>$faker->unique()->word,
        'price'=>randomFloat(2,0,3),
        'description'=>$faker->sentence(),
        'price'=> 12.5
        
    ];
});
