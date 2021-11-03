<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Roles;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Roles::where('nombre', 'Administrador')->first();
        $role_profesor= Roles::where('nombre', 'Profesor')->first();
        $role_alumno = Roles::where('nombre', 'Alumno')->first();

        $user = new User();
        $user->nombre = 'Administrador';
        $user->carnet = 'ML01135866';
        $user->email = 'javi.lc@gmail.com';
        $user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach($role_admin);
        
        $user = new User();
        $user->nombre = 'Javier';
        $user->carnet = 'Ml01135856';
        $user->email = 'Francisco.ml@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_profesor);

        $user = new User();
        $user->nombre = 'Marvin';
        $user->carnet = 'ML01135876';
        $user->email = 'Marvin.ml@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_alumno);
        
    }
    
}
