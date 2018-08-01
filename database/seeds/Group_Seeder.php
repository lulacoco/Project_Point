<?php

use Illuminate\Database\Seeder;
use App\Group;

class Group_Seeder extends Seeder
{
    public function run()
    {
        $formation = new Group();
        $formation->name = 'West Point';
        $formation->description = 'Grupa West Point jest ekipą z Poznania, która wspólnie tworzy';
        $formation->save();
        $formation->events()->attach(2);


        $formation = new Group();
        $formation->name = 'No Point';
        $formation->description = 'Grupa No Point jest ekipą z Poznania, która wspólnie tworzy';
        $formation->save();
        $formation->events()->attach(3);


        $formation = new Group();
        $formation->name = 'Punie Crew';
        $formation->description = 'Grupa Punie Crew jest ekipą z Poznania, która wspólnie tworzy';
        $formation->save();
        $formation->events()->attach(4);


        $formation = new Group();
        $formation->name = 'First Point';
        $formation->description = 'Grupa First Point jest ekipą z Poznania, która wspólnie tworzy';
        $formation->save();
        $formation->events()->attach(5);

        $formation = new Group();
        $formation->name = '3.0';
        $formation->description = 'Grupa 3.0 jest ekipą z Poznania, która wspólnie tworzy';
        $formation->save();
        $formation->events()->attach(6);

        $formation = new Group();
        $formation->name = 'Pointony';
        $formation->description = 'Grupa Pointony jest ekipą z Poznania, która wspólnie tworzy';
        $formation->save();
        $formation->events()->attach(7);

        $formation = new Group();
        $formation->name = 'Początkująca';
        $formation->description = 'Grupa Początkująca jest ekipą z Poznania, która wspólnie tworzy';
        $formation->save();
        $formation->events()->attach(8);
    }
}