<?php

use Illuminate\Database\Seeder;
use App\Role;

class Role_Seeder extends Seeder
{
    public function run()
    {
        $role = new Role();
        $role->role = 'Admin';
        $role->save();

        $role = new Role();
        $role->role = 'Teacher';
        $role->save();

        $role = new Role();
        $role->role = 'User';
        $role->save();
    }
}
