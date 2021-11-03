<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0 ');
        DB::table('profesor')->truncate();
        db::statement('SET FOREIGN_KEY_CHECKS = 1');

        DB::table('profesor')->insert([
            'nombre0' => 'Javier',
            'nombre1' => 'Enrique',
            'apellido0' => 'Moran',
            'apellido1' => 'Lopez',
            'carnet' => 'ml01135856',
            'dui' => '854962489',
            'genero' => 'M',
            'telefono' => '15487523',
            'email' => 'javilop.lm@gmail.com',
        ]);

        

        //factory(Profesores::class, 18)->create();
    }
}