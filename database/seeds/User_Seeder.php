<?php

use Illuminate\Database\Seeder;
use App\User;

class User_Seeder extends Seeder
{
    public function run()
    {
        $user = new User();
        $user->first_name = 'Marcin';
        $user->last_name = 'Szafrański';
        $user->display_name = 'Szafran';
        $user->e_mail = 'marcin.szafranski@gmail.com';
        $user->age = '24';
        $user->password = bcrypt('1234');
        $user->save();
        $user->roles()->attach(2);
        $user->events()->attach(1);
        $user->groups()->attach(2);


        $user = new User();
        $user->first_name = 'Ania';
        $user->last_name = 'Kafarska';
        $user->display_name = 'Popping Kafczi';
        $user->e_mail = 'ania.kafarska@gmail.com';
        $user->age = '21';
        $user->password = bcrypt('user2');
        $user->save();
        $user->roles()->attach(3);
        $user->events()->attach(1);
        $user->groups()->attach(2);
    }
}


//$faker = \Faker\Factory::create();
//
//$user = new Users();
//$user->first_name = $faker->firstName;
//$user->last_name = $faker->lastName;
//$user->display_name = $faker->userName;
//$user->e_mail = $faker->email;
//$user->age = '24';
//$user->password = $faker->password;
//$user->save();