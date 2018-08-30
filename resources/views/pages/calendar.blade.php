@extends('layouts.master')
@section('content')

    <div class="calendar-panel">
        <div class="panel">
            <div id="events-headline">
                @foreach($event_users as $event_user)
                    {{$event_user->first_name. " to jest Twój grafik"}}
                    @break
                @endforeach
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-warning center-desc" id="alert">
                {{ session('status') }}
            </div>
        @endif

        <table class="calendar">
            <th>Dzień</th>
            <th>Data</th>
            <th>Godzina</th>
            <th>Lekcja</th>
            <th style="text-indent: 1.7%">Zapisy</th>

            @foreach($event_users as $event_user)
                <tr>
                    <script>
                        moment.locale('pl');
                        var startDate = {!! json_encode($event_user->start_date) !!};
                        var endDate = {!! json_encode($event_user->end_date) !!};
                        document.write("<td>" + moment(startDate).format("dddd") + "</td>");
                        document.write("<td>" + moment(startDate).format("LL") + "</td>");
                        document.write("<td>" + moment(startDate).format("LT") + " - " + moment(endDate).format("LT") + "</td>");
                    </script>
                    <td>{{$event_user->name}}</td>
                    <td>
                        <div class="sign-off-button-trigger">
                            <button class="event-sign-off-button" id="sign-off-button-{{$event_user->id}}"
                                    onclick="openEventSignOffs({{$event_user->id}})">
                                Wypisz się
                            </button>
                        </div>
                        <div class="event-sign-off" id="event-sign-off-{{$event_user->id}}">
                        </div>
                    </td>
                </tr>
            @endforeach

            @foreach($workshop_users as $workshop_user)
                <tr>
                    <script>
                        moment.locale('pl');
                        var startDate = {!! json_encode($workshop_user->start_date) !!};
                        var endDate = {!! json_encode($workshop_user->end_date) !!};
                        document.write("<td>" + moment(startDate).format("dddd") + "</td>");
                        document.write("<td>" + moment(startDate).format("LL") + "</td>");
                        document.write("<td>" + moment(startDate).format("LT") + " - " + moment(endDate).format("LT") + "</td>");
                    </script>
                    <td>{{$workshop_user->name}}</td>
                    <td>
                        <div class="sign-off-button-trigger">
                            <button class="workshop-sign-off-button" id="sign-off-button-{{$workshop_user->id}}"
                                    onclick="openWorkshopSignOffs({{$workshop_user->id}})">
                                Wypisz się
                            </button>
                        </div>
                        <div class="workshop-sign-off" id="workshop-sign-off-{{$workshop_user->id}}">
                        </div>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>


@stop