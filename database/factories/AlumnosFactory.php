<?php
use App\Alumnos;
use Faker\Generator as Faker;

$factory->define(Alumnos::class, function (Faker $faker) {
    return [
        'nombre' => 'armando',
        'apellido' => 'cortez',
        'fech_nac' => '10/02/2000',
        'direccion' => 'tapalhuaca',
        'genero' => 'M',
        'telefono' => '71286126',
        'email' => 'armand1616.lc@gmail.com',
        'password' => bcrypt('leonel1515')
    ];
});