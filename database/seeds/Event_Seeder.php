<?php

use Illuminate\Database\Seeder;
use App\Event;

class Event_Seeder extends Seeder
{
    public function run()
    {

        /* PONIEDZIAŁEK */
        $event = new Event();
        $event->name = 'Grupa 3.0';
        $event->description = 'Zamknięty trening 3.0';
        $event->public = 0;
        $event->start_date = '2018-09-03 16:40:00';
        $event->end_date = '2018-09-03 18:00:00';
        $event->save();

        $event = new Event();
        $event->name = 'Afro House/Kuduro';
        $event->description = 'Zajęcia prowadzone przez Manuelą';
        $event->public = 1;
        $event->start_date = '2018-09-03 18:00:00';
        $event->end_date = '2018-09-03 19:20:00';
        $event->save();

        $event = new Event();
        $event->name = 'New Age';
        $event->description = 'Zajęcia prowadzone przez Łukasza';
        $event->public = 1;
        $event->start_date = '2018-09-03 19:20:00';
        $event->end_date = '2018-09-03 20:40:00';
        $event->save();

        $event = new Event();
        $event->name = 'West Pointy trening';
        $event->description = 'Zamknięty trening West Pointów';
        $event->public = 0;
        $event->start_date = '2018-09-03 20:40:00';
        $event->end_date = '2018-09-03 22:00:00';
        $event->save();

        /* WTOREK */
        $event = new Event();
        $event->name = 'House grupa początkująca';
        $event->description = 'Zajęcia prowadzone przez Adama';
        $event->public = 1;
        $event->start_date = '2018-09-04 16:40:00';
        $event->end_date = '2018-09-04 18:00:00';
        $event->save();

        $event = new Event();
        $event->name = 'House grupa zaawansowana';
        $event->description = 'Zajęcia prowadzone przez Adama';
        $event->public = 1;
        $event->start_date = '2018-09-04 18:00:00';
        $event->end_date = '2018-09-04 19:20:00';
        $event->save();

        $event = new Event();
        $event->name = 'Pointony trening';
        $event->description = 'Zamknięty trening Pointonów';
        $event->public = 0;
        $event->start_date = '2018-09-04 18:00:00';
        $event->end_date = '2018-09-04 19:20:00';
        $event->save();

        $event = new Event();
        $event->name = 'Waacking grupa początkująca';
        $event->description = 'Zajęcia prowadzone przez Domę';
        $event->public = 1;
        $event->start_date = '2018-09-04 19:20:00';
        $event->end_date = '2018-09-04 20:40:00';
        $event->save();

        $event = new Event();
        $event->name = 'Waacking grupa zaawansowana';
        $event->description = 'Zajęcia prowadzone przez Domę';
        $event->public = 1;
        $event->start_date = '2018-09-04 20:40:00';
        $event->end_date = '2018-09-04 22:00:00';
        $event->save();

        /* ŚRODA */
        $event = new Event();
        $event->name = 'Hip-hop';
        $event->description = 'Nowy kurs';
        $event->public = 1;
        $event->start_date = '2018-09-05 16:40:00';
        $event->end_date = '2018-09-05 18:00:00';
        $event->save();

        $event = new Event();
        $event->name = 'Firsty trening';
        $event->description = 'Zamknięty trening Firsty';
        $event->public = 0;
        $event->start_date = '2018-09-05 18:00:00';
        $event->end_date = '2018-09-05 19:20:00';
        $event->save();

        $event = new Event();
        $event->name = 'Locking';
        $event->description = 'Zajęcia prowadzone przez Bestię';
        $event->public = 1;
        $event->start_date = '2018-09-05 18:00:00';
        $event->end_date = '2018-09-05 19:20:00';
        $event->save();

        $event = new Event();
        $event->name = 'Popping grupa początkująca';
        $event->description = 'Zajęcia prowadzone przez Mario';
        $event->public = 1;
        $event->start_date = '2018-09-05 19:20:00';
        $event->end_date = '2018-09-05 20:40:00';
        $event->save();

        $event = new Event();
        $event->name = 'Hip-hop';
        $event->description = 'Zajęcia prowadzone przez Piotrka Pi lub O-Shit';
        $event->public = 1;
        $event->start_date = '2018-09-05 20:40:00';
        $event->end_date = '2018-09-05 22:00:00';
        $event->save();

        /* CZWARTEK */
        $event = new Event();
        $event->name = 'Pointony';
        $event->description = 'Zamknięty trening Pointonów';
        $event->public = 0;
        $event->start_date = '2018-09-06 16:40:00';
        $event->end_date = '2018-09-06 18:00:00';
        $event->save();

        $event = new Event();
        $event->name = 'Hip-hop/Improwizacja';
        $event->description = 'Zajęcia prowadzone przez Gorzkiego';
        $event->public = 1;
        $event->start_date = '2018-09-06 18:00:00';
        $event->end_date = '2018-09-06 19:20:00';
        $event->save();

        $event = new Event();
        $event->name = 'New Age/Choreo';
        $event->description = 'Zajęcia prowadzone przez Gregorego';
        $event->public = 1;
        $event->start_date = '2018-09-06 19:20:00';
        $event->end_date = '2018-09-06 20:40:00';
        $event->save();

        $event = new Event();
        $event->name = 'No Point trening';
        $event->description = 'Zamknięty trening No Pointów';
        $event->public = 0;
        $event->start_date = '2018-09-06 20:40:00';
        $event->end_date = '2018-09-06 22:00:00';
        $event->save();

        /* PIĄTEK */
        $event = new Event();
        $event->name = 'Hip-hop';
        $event->description = 'Nowy kurs';
        $event->public = 1;
        $event->start_date = '2018-09-07 16:40:00';
        $event->end_date = '2018-09-07 18:00:00';
        $event->save();

        $event = new Event();
        $event->name = 'Firsty trening';
        $event->description = 'Zamknięty trening firstów';
        $event->public = 0;
        $event->start_date = '2018-09-07 18:00:00';
        $event->end_date = '2018-09-07 19:20:00';
        $event->save();

        $event = new Event();
        $event->name = 'Popping grupa średnio-zaawansowana';
        $event->description = 'Zajęcia prowadzone przez Mario';
        $event->public = 1;
        $event->start_date = '2018-09-07 19:20:00';
        $event->end_date = '2018-09-07 20:40:00';
        $event->save();

        $event = new Event();
        $event->name = 'Współczesny/przetwarzanie ruchu';
        $event->description = 'Zajęcia prowadzone przez Wojtka';
        $event->public = 1;
        $event->start_date = '2018-09-07 20:40:00';
        $event->end_date = '2018-09-07 22:00:00';
        $event->save();
    }
}
