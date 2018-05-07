<?php

use Faker\Generator as Faker;

$factory->define(App\Journal::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(rand(10,20)),
        'creator' => $faker->name,
        'subject' => $faker->word,
        'description' => $faker->paragraph,
        'publisher' => $faker->company,
        'contributor' => $faker->company,
        'date' => $faker->year,
        'type' => '',
        'format' => '',
        'identifier' => $faker->url,
        'source' => '',
        'language' => $faker->languageCode,
        'relation' => '',
        'coverage' => '',
        'rights' => '',
    ];
});
