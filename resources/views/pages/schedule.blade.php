@extends('layouts.master')
@section('content')

    <div class="events-panel">
        <div class="panel">
            <div id="events-headline">
                Grafik
            </div>
        </div>

        <table>
            <th>Dzień</th>
            <th>Data</th>
            <th>Godzina</th>
            <th>Lekcja</th>
            <th>Opis</th>
            <th></th>
            <th>Zapisy</th>

            @foreach($events as $event)
                <tr>
                    <script>
                        moment.locale('pl');
                        var startDate = {!! json_encode($event->start_date) !!};
                        var endDate = {!! json_encode($event->end_date) !!};
                        document.write("<td>" + moment(startDate).format("dddd") + "</td>");
                        document.write("<td>" + moment(startDate).format("LL") + "</td>");
                        document.write("<td>" + moment(startDate).format("LT") + " - " + moment(endDate).format("LT") + "</td>");
                    </script>
                    <td>{{$event->name}}</td>
                    <td>{{$event->description}}</td>
                    <td class="event-desc-button">
                            <button class="event-description-button" id="event-button-{{$event->id}}" onclick="openEventDesc({{$event->id}})">
                                Opis
                            </button>
                        <div class="event-desc" id="event-desc-{{$event->id}}">
                            {{$event->description}}
                        </div>
                    </td>
                    <td>
                        <div class="sign-up-button-trigger">
                            <button class="event-sign-up-button" id="sign-up-button-{{$event->id}}"
                                    onclick="openEventSignUps({{$event->id}})">
                                Zapisz się
                            </button>
                        </div>
                        <div class="event-sign-up" id="event-sign-up-{{$event->id}}">
                            Tutaj są zapisy
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@stop