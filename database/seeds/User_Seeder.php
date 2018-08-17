<?php

use Illuminate\Database\Seeder;
use App\User;

class User_Seeder extends Seeder
{
    public function run()
    {
        $user = new User();
        $user->first_name = 'Grzegorz';
        $user->last_name = 'Kuciak';
        $user->display_name = 'Gregory';
        $user->e_mail = 'grzegorz.kuciak@gmail.com';
        $user->age = '28';
        $user->password = bcrypt('user3');
        $user->description = 'Grzegorz “Gregory” Kuciak - tancerz, instruktor, choreograf. Założyciel Point Dance Studio. Związany z tańcem od 18 lat podczas których poznawał taniec towarzyski, hip hop, popping, locking, new age, jazz-funk i wiele innych.
        Od 10 lat prowadzi zajęcia z młodzieżą i dorosłymi podczas których kładzie nacisk na technikę ruchu, wiedzę z zakresu konkretnych stylistyk oraz muzykalność. Pośród mnogości poznanych stylów szuka ‘"centrum” które łączy je wszystkie na poziomie świadomości ciała.
        Od wielu lat na stałe współpracuje z ośrodkami kulturowymi i szkołami tańca w całej Polsce.';
        $user->src = 'https://scontent-frt3-1.xx.fbcdn.net/v/t1.0-0/p206x206/23844898_10213239778101532_7247512557113780518_n.jpg?_nc_cat=0&oh=79e5868ba0193451bff9d92046267e6f&oe=5BC7C47E';
        $user->save();
        $user->roles()->attach(2);
        $user->events()->attach(1);
        $user->workshops()->attach(1);
        $user->groups()->attach(2);


        $user = new User();
        $user->first_name = 'Mariusz';
        $user->last_name = 'Popping Mario';
        $user->display_name = 'Lubawy';
        $user->e_mail = 'mariusz.lubawy@gmail.com';
        $user->age = '27';
        $user->password = bcrypt('user2');
        $user->description = 'Mariusz “Popping  Mario” Lubawy - tancerz, instruktor tańca z Poznania. Współwłaściciel szkoły tańca Point Dance Studio.
        Wykładowca przedmiotu “Formy Uliczne” na kierunku Taniec na Wyższej Szkole Umiejętności Społecznych w roku 2015/2016  w Poznaniu.
        Szkolił się na warsztatach u najlepszych tancerzy z polski i zza granicy. Swoje doświadczenie zdobywał na turniejach, eventach, obozach tanecznych i podczas prowadzenia zajeć. Obecnie jeden z najlepszych popperów w Polce
        Na swojej drodze tanecznej miał również do czynienia z innymi stylami street dance: hip-hop, house, breaking, locking, a także z tańcem współczesnym, którego uczył się na zajęciach w Polskim Teatrze Tańca w Poznaniu.
        Otwarty na wszelkiego rodzaju taneczne przedsięwzięcia chce poznawać różne style i techniki, by nieustannie wzbogacać swój styl i znajdować nowe inspiracje.';
        $user->src = 'https://scontent-frt3-1.xx.fbcdn.net/v/t1.0-9/38829176_2401151646576541_2812738094619426816_o.jpg?_nc_cat=0&oh=c8e25d4107dd07f13ea959359fcf2492&oe=5BC5694A';
        $user->save();
        $user->roles()->attach(2);
        $user->events()->attach(1);
        $user->workshops()->attach(1);
        $user->groups()->attach(2);


        $user = new User();
        $user->first_name = 'Dominika';
        $user->last_name = 'Doma';
        $user->display_name = 'Jałoszyńska';
        $user->e_mail = 'dominika.jałoszyńska@gmail.com';
        $user->age = '26';
        $user->password = bcrypt('user3');
        $user->description = 'Tancerka, instruktor, choreograf, jako jedna z niewielu osób w Polsce wyspecjalizowała się w stylu znanym jako Waacking.
        Swoją przygodę z tańcem rozpoczęła w 2002r. próbując sił w szkole baletowej. Następnie doskonaliła się i pobierała warsztaty od najlepszych tancerzy z całego świata, w wielu różnych technikach, takich jak Hip Hop, Popping, Waacking czy House. Od 2013r. reprezentuje poznańską ekipę tancerek „Punie Crew”.
        Od wielu lat jest stale obecna na polskiej i zagranicznej scenie, biorąc czynny udział w zawodach i imprezach tanecznych, także jako sędzia. Jest współorganizatorem projektu „Polski Waacking”, który ma na celu szerzenie wiedzy na temat tego stylu tańca i rozpowszechnianie go wśród tancerzy. Konsekwentnie stara się rozwijać scenę waackingową i zarażać ludzi miłością do tego stylu tańca.';
        $user->src = 'https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-9/38797763_2399469743411398_8151191523661185024_n.jpg?_nc_cat=0&oh=bacf0b96d90faa98134f261377f0c79c&oe=5C0FA527';
        $user->save();
        $user->roles()->attach(2);
        $user->events()->attach(1);
        $user->workshops()->attach(1);
        $user->groups()->attach(2);


        $user = new User();
        $user->first_name = 'Marcin';
        $user->last_name = 'Szafrański';
        $user->display_name = 'Szafran';
        $user->e_mail = 'marcin.szafranski@gmail.com';
        $user->age = '24';
        $user->password = bcrypt('user4');
        $user->description = 'Z tańcem związany od najmłodszych lat, jednak ścisłą naukę rozpoczął w 2008 roku. Przez dłuższy czas poznawał taniec współczesny, następnie formy Street Dance takie jak hip-hop, popping, locking, house i wiele innych. Były tancerz teatru im. Juliusza Osterwy w Gorzowie Wielkopolskim.
        Na swoich zajęciach stara się łączyć elementy tańca współczesnego z formami streetowymi. Konsekwentnie stara się rozwijać. Wiecznie szuka nowych inspiracji by wzbogacać swój styl.';
        $user->src = 'https://static.wixstatic.com/media/e0a107_c0daa3c52b4e46e3b44b4035406afad8~mv2_d_2706_2713_s_4_2.jpg/v1/fill/w_616,h_760,al_c,q_85,usm_0.66_1.00_0.01/e0a107_c0daa3c52b4e46e3b44b4035406afad8~mv2_d_2706_2713_s_4_2.jpg';
        $user->save();
        $user->roles()->attach(2);
        $user->events()->attach(1);
        $user->workshops()->attach(1);
        $user->groups()->attach(2);


        $user = new User();
        $user->first_name = 'Ania';
        $user->last_name = 'Kafarska';
        $user->display_name = 'Popping Kafczi';
        $user->e_mail = 'ania.kafarska@gmail.com';
        $user->age = '21';
        $user->password = bcrypt('user5');
        $user->description = 'Po prostu Ania';
        $user->src = 'https://scontent.fpoz2-1.fna.fbcdn.net/v/t1.0-9/11709687_866057973473796_564061892021832582_n.jpg?_nc_cat=0&oh=c046cda2b0e8d293868e1e8e26b0b9f0&oe=5C06D389';
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