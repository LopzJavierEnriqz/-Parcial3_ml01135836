<?php
use App\Alumnos;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        ]);
        factory(Alumnos::class, 18)->create();
        //seleccion de los datos de la tabla alumnos
    }
}