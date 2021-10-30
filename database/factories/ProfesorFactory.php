<?php

use App\Profesores;
use Faker\Generator as Faker;

$factory->define(Profesores::class, function (Faker $faker) {
    return [
        'nombre' => 'Armando',
        'apellido' => 'Cortez',
        'dui' => '059240267',
        'genero' => 'm',
        'telefono' => '71286126',
        'email' => 'armand1616.lc@gmail.com',
        'password' => bcrypt('armando1616')
    ];
});