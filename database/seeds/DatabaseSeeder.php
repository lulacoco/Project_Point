<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(Role_Seeder::class); //ten musi uruchomić się pierwszy bo Users korzysta później z roli
        $this->call(Event_Seeder::class);
        $this->call(Workshop_Seeder::class);
        $this->call(Group_Seeder::class);
        $this->call(User_Seeder::class);
    }
}