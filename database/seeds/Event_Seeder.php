<?php

use Illuminate\Database\Seeder;
use App\Event;

class Event_Seeder extends Seeder
{
    public function run()
    {
        $event = new Event();
        $event->name = 'Warsztaty Big Point';
        $event->description = 'Warsztaty taneczne, contest Waacking i obowiązkowe After Party';
        $event->public = 1;
        $event->start_date = '2018-09-01 10:00:00';
        $event->end_date = '2018-09-02 19:00:00';
        $event->save();

        $event = new Event();
        $event->name = 'Westy Trening';
        $event->description = 'Zamknięty trening Westów';
        $event->public = 0;
        $event->start_date = '2018-09-03 20:30:00';
        $event->end_date = '2018-09-03 22:00:00';
        $event->save();

        $event = new Event();
        $event->name = 'No Pointy trening';
        $event->description = 'Zamknięty trening No Pointów';
        $event->public = 0;
        $event->start_date = '2018-09-06 20:30:00';
        $event->end_date = '2018-09-06 22:00:00';
        $event->save();

        $event = new Event();
        $event->name = 'Punie trening';
        $event->description = 'Zamknięty trening Punie';
        $event->public = 0;
        $event->start_date = '2018-09-08 11:00:00';
        $event->end_date = '2018-09-08 14:00:00';
        $event->save();

        $event = new Event();
        $event->name = 'Firsty trening';
        $event->description = 'Zamknięty trening Firsty';
        $event->public = 0;
        $event->start_date = '2018-09-06 18:00:00';
        $event->end_date = '2018-09-06 20:20:00';
        $event->save();

        $event = new Event();
        $event->name = '3.0 trening';
        $event->description = 'Zamknięty trening 3.0';
        $event->public = 0;
        $event->start_date = '2018-09-05 18:00:00';
        $event->end_date = '2018-09-05 20:20:00';
        $event->save();

        $event = new Event();
        $event->name = 'Pointony trening';
        $event->description = 'Zamknięty trening Pointony';
        $event->public = 0;
        $event->start_date = '2018-09-07 16:30:00';
        $event->end_date = '2018-09-07 18:00:00';
        $event->save();

        $event = new Event();
        $event->name = 'Początkująca trening';
        $event->description = 'Zamknięty trening Początkująca';
        $event->public = 0;
        $event->start_date = '2018-09-07 18:00:00';
        $event->end_date = '2018-09-07 20:20:00';
        $event->save();
    }
}
