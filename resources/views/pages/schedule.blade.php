@extends('layouts.master')
@section('content')

    <div class="schedule-panel">
        <div class="panel">
            <div id="schedule-headline">
                Grafik
            </div>
        </div>

        <table>
            <th>Dzień</th>
            <th>Data</th>
            <th>Godzina</th>
            <th>Lekcja</th>
            <th>Opis</th>
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
                    {{--<td>{{($event->start_date) . " - " . $event->end_date}}</td>--}}
                    <td>{{$event->name}}</td>
                    <td>{{$event->description}}</td>
                </tr>
            @endforeach
        </table>
    </div>

@stop