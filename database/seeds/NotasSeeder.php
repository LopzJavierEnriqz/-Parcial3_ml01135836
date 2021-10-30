<?php

use App\Notas;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0 ');
        DB::table('notas')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        DB::table('notas')->insert([
            'nota1' => '10',
            'nota2' => '10',
            'nota3' => '10',
            'nota4' => '10',
            'promedio' => '10',
            'parcial' => '10',
            'idcurso' => '1',
            'idalumno' => '1'
        ]);

        //factory(Notas::class, 18)->create();
    }
}