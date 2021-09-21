<?php
use App\Alumnos;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0 ');
        DB::table('alumnos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        DB::table('alumnos')->insert([
            'nombre' => 'leonel',
            'apellido' => 'garcia',
            'fech_nac' => '10/02/2000',
            'direccion' => 'tapalhuaca',
            'genero' => 'M',
            'telefono' => '71286126',
            'email' => 'armand1515.lc@gmail.com',
            'password' => bcrypt('leonel1515')
        ]);


        factory(Alumnos::class, 18)->create();
        
        //seleccion de los datos de la tabla alumnos
        $seleccion = DB::select('select * from alumnos');
    }
}