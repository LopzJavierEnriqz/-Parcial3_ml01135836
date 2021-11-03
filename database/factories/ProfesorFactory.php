<?php

use App\Profesores;
use Faker\Generator as Faker;

$factory->define(Profesores::class, function (Faker $faker) {
    return [
        'nombre' => 'Alvaro',
        'apellido' => 'Moran',
        'dui' => '023546892',
        'genero' => 'm',
        'telefono' => '70151669',
        'email' => 'Alvaro.lc@gmail.com',
        'password' => bcrypt('Alvaro.lc')
    ];
});