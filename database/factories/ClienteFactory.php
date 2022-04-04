<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'cinit' => $faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
        'direccion' => $faker->address,
        'cel1' => $faker->ean8,
        'cel2' => $faker->ean8,
        'correo' => $faker->unique()->safeEmail,
        'estado' => rand(0,1)
    ];
});