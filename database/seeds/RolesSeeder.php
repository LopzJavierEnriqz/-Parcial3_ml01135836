<?php

use Illuminate\Database\Seeder;
use App\Roles;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Roles();
        $role->nombre = 'Administrador';
        $role->descripcion = 'Administrator';

        $role->save();
        $role = new Roles();
        $role->nombre = 'Profesor';
        $role->descripcion = 'Profesor';
        $role->save();

        $role->save();
        $role = new Roles();
        $role->nombre = 'Alumno';
        $role->descripcion = 'Alumno';
        $role->save();
    }
}
