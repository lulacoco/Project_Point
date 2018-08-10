@extends('layouts.master')
@section('content')

    @foreach($users as $user)
        <div class="instructor-container">
            {{--<div class="first">--}}
            <div class="curtain">
                <div class="curtain__wrapper">
                    <input type="checkbox" checked>

                    @if(($user->id)%2==0)
                        <div class="curtain__panel curtain__panel--left">
                        </div>
                    @else
                        <div class="curtain__panel curtain__panel--left">
                            <h1> {{ $user->first_name . " " . "''" . $user->display_name . "''" . " " . $user->last_name }}</h1>
                        </div>
                    @endif

                    <div class="curtain__content">
                        <div id="empty"></div>
                        <img src={{$user->src}} alt={{ $user->first_name . " " . $user->display_name . " " . $user->last_name }}>
                        <hr></hr>
                        <h3>  {{ $user->first_name . " " . $user->display_name . " " . $user->last_name }} </h3>
                        <hr></hr>
                        <div id="instructor">
                            {{$user->description}}
                        </div>
                    </div>
                    @if(($user->id)%2==0)
                        <div class="curtain__panel curtain__panel--right">
                            <h1> {{ $user->first_name . " " . "''" . $user->display_name . "''" . " " . $user->last_name }}</h1>
                        </div>
                    @else
                        <div class="curtain__panel curtain__panel--right">
                        </div>
                    @endif
                </div>
            </div>
            {{--</div>--}}
            <br></br>
        </div>
    @endforeach

    {{--<div class="second">--}}
    {{--<div class="curtain">--}}
    {{--<div class="curtain__wrapper">--}}
    {{--<input type="checkbox" checked>--}}

    {{--<div class="curtain__panel curtain__panel--left">--}}
    {{--</div>--}}

    {{--<div class="curtain__content">--}}
    {{--<div id="empty"></div>--}}
    {{--<img id="Mario"--}}
    {{--src="https://scontent.fpoz2-1.fna.fbcdn.net/v/t1.0-9/38888246_2401151649909874_8233746911123734528_n.jpg?_nc_cat=0&oh=466eab317906fbaf28eac925e7ea8e49&oe=5C0134B3"--}}
    {{--alt="Mariusz 'Popping Mario' Lubawy">--}}
    {{--<hr></hr>--}}
    {{--<h2>Mariusz "Popping Mario" Lubawy</h2>--}}
    {{--<hr></hr>--}}
    {{--<div id="instructor">--}}
    {{--Mariusz “Popping Mario” Lubawy - tancerz, instruktor tańca z Poznania. Współwłaściciel--}}
    {{--szkoły tańca Point Dance Studio.--}}
    {{--Wykładowca przedmiotu “Formy Uliczne” na kierunku Taniec na Wyższej Szkole Umiejętności--}}
    {{--Społecznych w roku 2015/2016 w Poznaniu.--}}
    {{--Szkolił się na warsztatach u najlepszych tancerzy z polski i zza granicy. Swoje--}}
    {{--doświadczenie zdobywał na turniejach, eventach, obozach tanecznych i podczas prowadzenia--}}
    {{--zajeć. Obecnie jeden z najlepszych popperów w Polce.--}}
    {{--Na swojej drodze tanecznej miał również do czynienia z innymi stylami street dance:--}}
    {{--hip-hop,--}}
    {{--house, breaking, locking, a także z tańcem współczesnym, którego uczył się na zajęciach--}}
    {{--w--}}
    {{--Polskim Teatrze Tańca w Poznaniu.--}}
    {{--Otwarty na wszelkiego rodzaju taneczne przedsięwzięcia i projekty chce poznawać różne--}}
    {{--style--}}
    {{--i techniki, by nieustannie wzbogacać swój styl i znajdować nowe inspiracje.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="curtain__panel curtain__panel--right">--}}
    {{--<h1>Mariusz "Popping Mario" Lubawy</h1>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<br></br>--}}
    {{--<div class="third">--}}
    {{--<div class="curtain">--}}
    {{--<div class="curtain__wrapper">--}}
    {{--<input type="checkbox" checked>--}}

    {{--<div class="curtain__panel curtain__panel--left">--}}
    {{--<h1>Dominika "Doma" Jałoszyńska</h1>--}}
    {{--</div>--}}

    {{--<div class="curtain__content">--}}
    {{--<div id="empty"></div>--}}
    {{--<img src="https://scontent.fpoz2-1.fna.fbcdn.net/v/t1.0-9/38797763_2399469743411398_8151191523661185024_n.jpg?_nc_cat=0&oh=bacf0b96d90faa98134f261377f0c79c&oe=5C0FA527"--}}
    {{--alt="Dominika 'Doma' Jałoszyńska">--}}
    {{--<hr></hr>--}}
    {{--<h2>Dominika "Doma" Jałoszyńska</h2>--}}
    {{--<hr></hr>--}}
    {{--<div id="instructor">--}}
    {{--Tancerka, instruktor, choreograf, jako jedna z niewielu osób w Polsce wyspecjalizowała--}}
    {{--się w--}}
    {{--stylu znanym jako Waacking.--}}
    {{--Swoją przygodę z tańcem rozpoczęła w 2002r. próbując sił w szkole baletowej. Następnie--}}
    {{--doskonaliła się i pobierała warsztaty od najlepszych tancerzy z całego świata, w wielu--}}
    {{--różnych technikach, takich jak Hip Hop, Popping, Waacking czy House. Od 2013r.--}}
    {{--reprezentuje--}}
    {{--poznańską ekipę tancerek „Punie Crew”.--}}
    {{--Od wielu lat jest stale obecna na polskiej i zagranicznej scenie, biorąc czynny udział w--}}
    {{--zawodach i imprezach tanecznych, także jako sędzia. Jest współorganizatorem projektu--}}
    {{--„Polski--}}
    {{--Waacking”, który ma na celu szerzenie wiedzy na temat tego stylu tańca i--}}
    {{--rozpowszechnianie--}}
    {{--go wśród tancerzy. Konsekwentnie stara się rozwijać scenę waackingową i zarażać ludzi--}}
    {{--miłością do tego stylu tańca.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="curtain__panel curtain__panel--right">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

@stop
