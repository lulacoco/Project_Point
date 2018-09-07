<?php

use Illuminate\Database\Seeder;
use App\Workshop;

class Workshop_Seeder extends Seeder
{
    public function run()
    {

        $workshop = new Workshop();
        $workshop ->name = 'Casting/Nabór do West Point, No Point, Grupa 3.0, First Point';
        $workshop ->description = 'Cześć i czołem, zapraszamy wszystkich chętnych na casting do formacji i grup w Point Dance Studio :) W tym roku każdy ma szansę, aby dołączyć do:
        ■ WEST POINT, ■ NO POINT, ■ GRUPA 3.0, ■ FIRST POINT';
        $workshop ->public = 1;
        $workshop ->start_date = '2018-09-09 11:00:00';
        $workshop ->end_date = '2018-09-09 18:00:00';
        $workshop ->src = 'https://www.youtube.com/embed/b86uXELpzNk';
        $workshop ->save();


        $workshop = new Workshop();
        $workshop ->name = 'Dni Otwarte w Point Dance Studio';
        $workshop ->description = 'Siemanko cześć i czołem! W tym roku, jak co roku, koniec wakacji oznacza tylko tyle, że coś się kończy, a coś się zaczyna.
        U nas na przykład zaczyna się nowy sezon zajęć tanecznych. W związku z czym zapraszamy serdecznie do nas - do Pointa na Dni Otwarte! Sprawdź co się u nas dzieje :)';
        $workshop ->public = 1;
        $workshop ->start_date = '2018-09-01 13:00:00';
        $workshop ->end_date = '2018-09-02 20:00:00';
        $workshop ->src = 'https://www.youtube.com/embed/2gQb8ifyGBI';
        $workshop ->save();


        $workshop = new Workshop();
        $workshop ->name = 'Big ■ Point';
        $workshop ->description = 'Z okazji 3 urodzin Pointa zapraszamy na konkretny event do Poznania. Warsztaty taneczne, contest Waacking i obowiązkowe After Party:) Świętujemy 3 urodziny Point Dance Studio i 5 urodziny ekipy Punie Crew. ';
        $workshop ->public = 1;
        $workshop ->start_date = '2018-04-14 10:00:00';
        $workshop ->end_date = '2018-04-15 18:00:00';
        $workshop ->src = 'https://www.youtube.com/embed/09DWEIwK-Xo?rel=0';
        $workshop ->save();
    }
}
