<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
//text(800): texto de 800 caracteres

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'user_id' => 1,
        'title' => $faker->sentence,
        'body' => $faker->text(800),
        


    ];
});
