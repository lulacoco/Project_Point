<?php

use Illuminate\Database\Seeder;
use App\Workshop;

class Workshop_Seeder extends Seeder
{
    public function run()
    {
        $workshop = new Workshop();
        $workshop ->name = 'Big Point';
        $workshop ->description = 'Z okazji 3 urodzin Pointa zapraszamy na konkretny event do Poznania. Warsztaty taneczne, contest Waacking i obowiązkowe After Party:) Świętujemy 3 urodziny Point Dance Studio i 5 urodziny ekipy Punie Crew. ';
        $workshop ->public = 1;
        $workshop ->start_date = '2018-04-14 10:00:00';
        $workshop ->end_date = '2018-04-15 18:00:00';
        $workshop ->save();
    }
}
