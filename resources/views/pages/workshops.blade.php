@extends('layouts.master')
@section('content')

    <div class="workshops-panel">

        <div class="actual-workshops-panel">
            <div class="actual-workshops-desc">
                Aktualne wydarzenia
            </div>
            @foreach($workshops as $workshop)
                @if(($workshop->start_date)>('2018-08-20'))
                    <div class="workshop-box">
                        <div class="actual-workshops-name">
                            {{$workshop->name}}
                            <b>
                                <script>
                                    moment.locale('pl');
                                    var startDate = {!! json_encode($workshop->start_date) !!};
                                    document.write(moment(startDate).format('LL'));
                                </script>
                            </b>
                        </div>
                        <div class="actual-workshops">
                            <div class="empty"></div>
                            <iframe src={{$workshop->src}} alt={{ $workshop->name }} allowfullscreen></iframe>
                            <div class="button-panel">
                                <div class="desc-button-trigger">
                                    <button class="description-button" id="event-button-{{$workshop->id}}" onclick="openDesc({{$workshop->id}})">
                                        Opis
                                    </button>
                                </div>
                                <div class="event-desc" id="event-desc-{{$workshop->id}}">
                                    {{$workshop->description}}
                                </div>
                                <div class="sign-up-button-trigger">
                                    <a href="{{ URL::to('workshops/sign-up') }}">
                                    <button class="sign-up-button" id="sign-up-button-{{$workshop->id}}">
                                        Zapisz się
                                    </button>
                                    </a>
                                </div>
                                <div class="event-sign-up" id="event-sign-up-{{$workshop->id}}">
                                    Tutaj są zapisy
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>


        <div class="past-workshops-panel">
            <div id="past-workshops-desc">
                Minione wydarzenia
            </div>
            @foreach($workshops as $workshop)
                @if(($workshop->start_date)<('2018-08-20'))
                    <div class="workshop-box">
                        <div class="actual-workshops-name">
                            {{$workshop->name}}
                            <b>
                                <script>
                                    moment.locale('pl');
                                    var startDate = {!! json_encode($workshop->start_date) !!};
                                    document.write(moment(startDate).format('LL'));
                                </script>
                            </b>
                        </div>
                        <div class="past-workshops">
                            <div class="empty"></div>
                            <iframe src={{$workshop->src}} alt={{ $workshop->name }} allowfullscreen></iframe>
                            <div class="button-panel">
                                <div class="desc-button-trigger">
                                    <button class="description-button" id="event-button-{{$workshop->id}}" onclick="openDesc({{$workshop->id}})">
                                        Opis
                                    </button>
                                </div>
                                <div class="event-desc" id="event-desc-{{$workshop->id}}">
                                    {{$workshop->description}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

    </div>
@stop