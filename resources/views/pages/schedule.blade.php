@extends('layouts.master')
@section('content')

    <div class="panel">
        <div id="schedule-headline">
            Grafik
        </div>
    </div>

    <table>

        {{--@foreach($events as $event)--}}
            {{--<script>--}}
                {{--console.log(moment('2018-09-07 18:00:00').format('LL'));--}}
                {{--<th>{{moment($event->start_date).format('LL')}}</th>--}}
            {{--</script>--}}
        {{--@endforeach--}}
        <th>Poniedzialek</th>
        <th>Lekcja</th>
        <th>Opis</th>
        <th></th>
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
                <td>{{($event->start_date) . " - " . $event->end_date}}</td>
                <td>{{$event->name}}</td>
                <td>{{$event->description}}</td>
            </tr>
        @endforeach
    </table>

@stop