<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement($modelArray = array('Ford', 'Honda', 'Toyota')),
        'model'=> $faker->randomElement($makeArray = array('Convertable', 'Coupe', 'Suv', 'Crossover', 'Hatchback', 'Wagon')),
        'year' => $faker->year,
    ];
});
