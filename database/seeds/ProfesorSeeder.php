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
            'nombre' => 'leonel',
            'apellido' => 'garcia',
            'dui' => '059240267',
            'telefono' => '71286126',
            'email' => 'armand1515.lc@gmail.com',
            'password' => bcrypt('leonel1515')
        ]);

        // Profesor::create({
        //     'nombre' => 'leonel',
        //     'apellido' => 'garcia',
        //     'dui' => '059240267',
        //     'telefono' => '71286126',
        //     'email' => 'armand1515.lc@gmail.com',
        //     'password' => 'leonel1515'
        // });

        factory(Profesores::class, 18)->create();
    }
}