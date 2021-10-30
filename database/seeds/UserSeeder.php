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
        $user->carnet = 'GC01135846';
        $user->email = 'administrador@example.com';
        $user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach($role_admin);
        
        $user = new User();
        $user->nombre = 'Leonel';
        $user->carnet = 'GC01135836';
        $user->email = 'armand1515.lc@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_profesor);

        $user = new User();
        $user->nombre = 'Julio';
        $user->carnet = 'GC01135856';
        $user->email = 'armand1616.lc@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_alumno);
        
    }
    
}
