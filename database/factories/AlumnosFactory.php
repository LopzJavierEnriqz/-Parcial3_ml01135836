<?php
use App\Alumnos;
use Faker\Generator as Faker;

$factory->define(Alumnos::class, function (Faker $faker) {
    return [
        'nombre0' => 'Marvin',
        'nombre1' => 'Alexander',
        'apellido0' => 'Moran',
        'apellido1' => 'Lopez',
        'carnet' => 'ML01135876',
        'fech_nac' => '15/08/2001',
        'direccion' => 'Las Lajas,Tapalhuaca,La Paz',
        'genero' => 'M',
        'telefono' => '75815260',
        'email' => 'mar.lc@gmail.com',
    ];
});