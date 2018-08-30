<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class User_Seeder extends Seeder
{
    public function run()
    {
        $user = new User();
        $user->first_name = 'Grzegorz';
        $user->email = 'grzegorz.kuciak@gmail.com';
        $user->password = 'user1';
        $user->save();
        $user->roles()->attach(2);
        $user->events()->attach(1);
        $user->workshops()->attach(1);
        $user->groups()->attach(2);


        $user = new User();
        $user->first_name = 'Mariusz';
        $user->email = 'mariusz.lubawy@gmail.com';
        $user->password = 'user2';
        $user->save();
        $user->roles()->attach(2);
        $user->events()->attach(1);
        $user->workshops()->attach(1);
        $user->groups()->attach(2);


        $user = new User();
        $user->first_name = 'Dominika';
        $user->email = 'dominika.jałoszyńska@gmail.com';
        $user->password = 'user3';
        $user->save();
        $user->roles()->attach(2);
        $user->events()->attach(1);
        $user->workshops()->attach(1);
        $user->groups()->attach(2);


        $user = new User();
        $user->first_name = 'Marcin';
        $user->email = 'marcin.szafranski@gmail.com';
        $user->password = 'user4';
        $user->save();
        $user->roles()->attach(2);
        $user->events()->attach(1);
        $user->workshops()->attach(1);
        $user->groups()->attach(2);


        $user = new User();
        $user->first_name = 'Ania';
        $user->email = 'ania.kafarska@gmail.com';
        $user->password = 'user5';
        $user->save();
        $user->roles()->attach(3);
        $user->events()->attach(1);
        $user->workshops()->attach(1);
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