<?php

use Illuminate\Database\Seeder;
use App\Group;

class Group_Seeder extends Seeder
{
    public function run()
    {
        $formation = new Group();
        $formation->name = 'West Point';
        $formation->description = 'West Point to formacja taneczna działająca w szeroko pojętym tańcu Hip Hop. Grupa powstała w 2015 roku w Poznaniu, prowadzi ją Grzegorz Kuciak i Łukasz Ludwiczak. Skupiamy się na tworzeniu pokazów gdzie ruch, muzyka i przekaz łączą się w jeden punkt. Siedziba - Point Dance Studio Poznań.
        Aktualny skład grupy: Joachim Uetake, Agata Andrysiak, Agata Błachowiak, Gabriela Tryba, Michalina Lamprecht, Agnieszka Szafrańska, Milena Chwiłka, Marcin Szafrański, Ania Kafarska, Ala Kurkowska, Martyna Armuszewska, Cyprian Rydlichowski, Gregory Kuciak (trener), Łukasz Ludwiczak (trener).';
        $formation->src = 'https://scontent.fpoz2-1.fna.fbcdn.net/v/t1.0-9/38666847_2394835227208183_1815771920591749120_n.jpg?_nc_cat=0&oh=1d7c16a21a7995b3e9aa43c4962b0d29&oe=5BCB4A61';
        $formation->save();
        $formation->events()->attach(2);


        $formation = new Group();
        $formation->name = 'Punie Crew';
        $formation->description = 'Punie Crew to grupa stworzona z siedmiu niesamowitych kobiet, których energia rozpala ogień na parkiecie.
        Aktualny skład grupy: Izabella Kamińska, Zuzanna Barańska, Justyna Wołkowicz, Dominika Jałoszyńska, Joanna Brzezińska, Kalina Dwornik, Michalina Lamprecht.';
        $formation->src = 'https://scontent.fpoz2-1.fna.fbcdn.net/v/t1.0-9/32847923_952739224903239_7937861979832582144_o.jpg?_nc_cat=0&oh=7c7c76aee3d004451d37f8fe9ed82a4c&oe=5BF8B399';
        $formation->save();
        $formation->events()->attach(4);


        $formation = new Group();
        $formation->name = 'First Point';
        $formation->description = 'Grupa First Point jest ekipą z Poznania, która wspólnie tworzy';
        $formation->src = 'https://scontent.fpoz2-1.fna.fbcdn.net/v/t31.0-8/29744239_1896732177027498_8474655908403729548_o.jpg?_nc_cat=0&oh=3329b069f24fa05e716a75100cc42885&oe=5BCF9A32';
        $formation->save();
        $formation->events()->attach(5);


        $formation = new Group();
        $formation->name = '3.0';
        $formation->description = 'Grupa 3.0 jest ekipą z Poznania, która wspólnie tworzy';
        $formation->src = 'https://scontent.fpoz2-1.fna.fbcdn.net/v/t1.0-9/38753039_2396876553670717_5314050932399407104_n.jpg?_nc_cat=0&oh=1d6d12459603f526d26509f94098e159&oe=5BCD0F25';
        $formation->save();
        $formation->events()->attach(6);


        $formation = new Group();
        $formation->name = 'No Point';
        $formation->description = 'No Point to formacja taneczna opierająca swoje choreografie na stylach pochodnych od hip-hopu. Grupa powstała we wrześniu 2016 roku w poznańskiej szkole tańca Point Dance Studio z inicjatywy założyciela studia Grzegorza Kuciaka.
        Aktualny skład grupy: Martin Szłapka, Kinga Sikorska, Martyna Janjić, Angelika Mierzwa, Magdalena Brudnicka Gosia Swinarska, Klaudia Kukowska, Julia Tomkiewicz, Ola Getka, Wiktoria Dyrka, Magdalena Teodorczyk, Tośka Nowicka, Gregory Kuciak (trener).';
        $formation->src='https://scontent.fpoz2-1.fna.fbcdn.net/v/t1.0-9/28685203_1695600607165859_5846885424931853631_n.jpg?_nc_cat=0&oh=c58b7aa26e76d647c6df1e744fc3f3d5&oe=5BFB0A1C';
        $formation->save();
        $formation->events()->attach(3);


        $formation = new Group();
        $formation->name = 'Pointony';
        $formation->description = 'Grupa Pointony jest ekipą z Poznania, która wspólnie tworzy';
        $formation->src = 'https://scontent.fpoz2-1.fna.fbcdn.net/v/t1.0-9/35629239_978813432295818_6429790011771584512_o.jpg?_nc_cat=0&oh=f0e8aada5c5b650ad53d11449d63a7da&oe=5C04B54E';
        $formation->save();
        $formation->events()->attach(7);


        $formation = new Group();
        $formation->name = 'Początkująca';
        $formation->description = 'Grupa Początkująca jest ekipą z Poznania, która wspólnie tworzy';
        $formation->src = 'https://scontent.fpoz2-1.fna.fbcdn.net/v/t1.0-9/38749082_2397230086968697_1424310412047810560_n.jpg?_nc_cat=0&oh=abab540e676513aca86883ebc1bd4035&oe=5C00AD27';
        $formation->save();
        $formation->events()->attach(8);
    }
}