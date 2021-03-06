<?php

use Faker\Generator as Faker;

$factory->define(App\Mrkd\Folder::class, function (Faker $faker) {
    return [
        'slug'        => $faker->unique()->slug,
        'title'       => $faker->word,
        'description' => $faker->paragraph(2),
        'notes'       => $faker->paragraph(3),
        'is_archived' => $faker->boolean(10),
        'top_folder'  => false,
        'order_index' => rand(0, 100),
        'user_id'     => function () {
            return factory(App\Accounts\User::class)->create()->id;
        }
    ];
});
