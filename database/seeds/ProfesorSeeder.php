<?php
use App\Profesores;
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
            'nombre0' => 'Leonel',
            'nombre1' => 'Armando',
            'apellido0' => 'Garcia',
            'apellido1' => 'Cortez',
            'carnet' => 'GC01135836',
            'dui' => '059240267',
            'genero' => 'M',
            'telefono' => '71286126',
            'email' => 'armand1515.lc@gmail.com',
        ]);

        

        //factory(Profesores::class, 18)->create();
    }
}