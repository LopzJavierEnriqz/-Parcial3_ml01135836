<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Alumnos;

class AlumnosSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0 ');
        DB::table('alumnos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        DB::table('alumnos')->insert([
            'nombre0' => 'Marvin',
            'nombre1' => 'Alexander',
            'apellido0' => 'Moran',
            'apellido1' => 'Lopez',
            'carnet' => 'ML01135876',
            'fech_nac' => '15/08/2001',
            'direccion' => 'Las Lajas,Tapalhuaca,La Paz',
            'genero' => 'M',
            'telefono' => '75815260',
            'email' => 'javi.lc@gmail.com',
        ]);
        factory(Alumnos::class, 18)->create();
        //seleccion de los datos de la tabla alumnos
    }
}
