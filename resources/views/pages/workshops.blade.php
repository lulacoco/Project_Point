@extends('layouts.master')
@section('content')

    <div class="workshops-panel">

        <div class="actual-workshops-panel">
            <div id="actual-workshops-desc">
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
                                <div id="desc-button-trigger">
                                    <button id="description-button">
                                        Opis
                                    </button>
                                </div>
                                <div id="event-desc">
                                    {{$workshop->description}}
                                </div>
                                <div id="sign-up-button-trigger">
                                    <button id="sign-up-button">
                                        Zapisz się
                                    </button>
                                </div>
                                <div id="event-sign-up">
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
                                <div id="desc-button-trigger">
                                    <button id="description-button">
                                        Opis
                                    </button>
                                </div>
                                <div id="event-desc">
                                    To jest super event
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

    </div>
@stop