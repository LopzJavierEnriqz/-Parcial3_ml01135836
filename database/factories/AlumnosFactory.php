<?php
use App\Alumnos;
use Faker\Generator as Faker;

$factory->define(Alumnos::class, function (Faker $faker) {
    return [
        'nombre0' => 'Julio',
        'nombre1' => 'Enrique',
        'apellido0' => 'Garcia',
        'apellido1' => 'Cortez',
        'carnet' => 'GC01135856',
        'fech_nac' => '10/02/2000',
        'direccion' => 'Las Lajas,Tapalhuaca,La Paz',
        'genero' => 'M',
        'telefono' => '71286126',
        'email' => 'armand1616.lc@gmail.com',
    ];
});