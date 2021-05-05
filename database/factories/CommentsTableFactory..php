<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\model\Comment;
use App\model\Post;
use App\model\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'name'    => $faker->name,
        'email'   => $faker->email,
        'content' => $faker->paragraph(3),
        'post_id' => Post::all()->random()->id,
        'user_id' => User::all()->random()->id,
        'approved'=> $faker->boolean,
    ];
});
