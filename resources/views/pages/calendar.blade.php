@extends('layouts.master')
@section('content')

    @foreach($workshop_users as $workshop_user)
        <div class = "calendar">
            <h3>{{$workshop_user->name}}</h3>
        </div>
    @endforeach



    @foreach($event_users as $event_user)
        <div class="calendar">
            <h2>{{ $event_user->name}}</h2>
        </div>
    @endforeach


@stop