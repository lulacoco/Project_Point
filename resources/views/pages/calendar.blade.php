@extends('layouts.master')
@section('content')

    <div class="events-panel">
        <div class="panel">
            <div id="events-headline">
                @foreach($event_users as $event_user)
                    {{$event_user->first_name. " to jest Twój grafik"}}
                    @break
                @endforeach
            </div>
        </div>

        <table>
            <th>Dzień</th>
            <th>Data</th>
            <th>Godzina</th>
            <th>Lekcja</th>

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
                </tr>
            @endforeach

        </table>
    </div>


@stop