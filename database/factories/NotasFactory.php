<?php
use App\Notas;
use Faker\Generator as Faker;

$factory->define(Notas::class, function (Faker $faker) {
    return [
        'nota1' => '10',
        'nota2' => '10',
        'nota3' => '10',
        'nota4' => '10',
        'promedio' => '10',
        'parcial' => '10',
        'idcurso' => '1',
        'idprofesor' => '1',
        'idalumno' => '1'
    ];
});