<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [

        'Make' =>$faker->randomElement($array = array ('ford','honda','toyota')),
        //'Make' =>$faker->name,//
        'Model' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'Year' =>$faker->year('now'),

    ];

});
