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
@stop
