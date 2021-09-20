<?php
use App\alumnos;
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
        db::statement('SET FOREIGN_KEY_CHECKS = 1');

        DB::table('alumnos')->insert([
            'nombre' => 'leonel',
            'apellido' => 'garcia',
            'fech_nac' => '10/02/2000',
            'direccion' => 'tapalhuaca',
            'genero' => 'm',
            'telefono' => '71286126',
            'email' => 'armand1515.lc@gmail.com',
            'password' => 'leonel1515'
        ]);
    }
}