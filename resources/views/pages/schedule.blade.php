@extends('layouts.master')
@section('content')

    <div class="panel">
        <div id="schedule-headline">
            Grafik
        </div>
    </div>

    <table>
        <th>Dzień</th>
        <th>Data</th>
        <th>Lekcja</th>
        <th>Opis</th>
        @foreach($events as $event)
            {{--<div id="day-name">--}}
            {{--@if(($event->start_date)=="16:40")--}}
            {{--<th>--}}
            {{--<script>--}}
            {{--console.log("script loaded");--}}
            {{--let weekdays = ['Wtorek', 'Środa', 'Czwartek', 'Piątek'];--}}
            {{--// console.log(weekdays,"weekdays");--}}
            {{--// for (var i = 0; i < weekdays.length; i++) {--}}
            {{--//     document.write(weekdays[i]);--}}
            {{--document.write("lalala");--}}

            {{--// console.log(weekdays[i]);--}}
            {{--// }--}}
            {{--</script>--}}
            {{--</th>--}}
            {{--<th></th>--}}
            {{--<th></th>--}}

            {{--@endif--}}
            {{--</div>--}}

            <tr>
                <script src="js/date.js"></script>
                <td>{{($event->start_date) . " - " . $event->end_date}}</td>
                {{--<td>{{(moment($event->start_date).format("LLLL")) . " - " . $event->end_date}}</td>--}}
                <td>{{$event->name}}</td>
                <td>{{$event->description}}</td>
            </tr>
        @endforeach
    </table>

@stop


