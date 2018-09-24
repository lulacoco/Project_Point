@extends('layouts.master')
@section('content')

    <div class="workshops-panel">

        <div class="actual-workshops-panel">
            <div class="actual-workshops-desc">
                Aktualne wydarzenia
            </div>
            @if (session('status'))
                <div class="alert alert-success center-desc" id="alert">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger center-desc" id="negative-alert">
                    {{ session('error') }}
                </div>
            @endif
            @foreach($workshops as $workshop)
                @if(($workshop->start_date)>(date("Y-m-d")))
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
                                    <button class="description-button" id="workshop-button-{{$workshop->id}}"
                                            onclick="openWorkshopDesc({{$workshop->id}})">
                                        Opis
                                    </button>
                                </div>
                                <div class="workshop-desc" id="workshop-desc-{{$workshop->id}}">
                                    {{$workshop->description}}
                                </div>
                                <div class="sign-up-button-trigger">
                                    <button class="sign-up-button" id="sign-up-button-{{$workshop->id}}"
                                            onclick="openWorkshopSignUps({{$workshop->id}})">
                                        Zapisz się
                                    </button>
                                </div>
                                <div class="workshop-sign-up" id="workshop-sign-up-{{$workshop->id}}">
                                    {{--Tutaj są zapisy--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--@elseif(($workshop->start_date)>(date("Y-m-d")))--}}
                    {{--<div class="actual-workshops-desc-none">--}}
                    {{--Brak aktualnych wydarzeń...--}}
                    {{--</div>--}}
                    {{--@break--}}
                @endif
            @endforeach
        </div>


        <div class="past-workshops-panel">
            <div class="past-workshops-desc">
                Minione wydarzenia
            </div>
            @foreach($workshops as $workshop)
                @if(($workshop->start_date)<(date("Y-m-d")))
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
                                    <button class="description-button" id="workshop-button-{{$workshop->id}}"
                                            onclick="openWorkshopDesc({{$workshop->id}})">
                                        Opis
                                    </button>
                                </div>
                                <div class="workshop-desc" id="workshop-desc-{{$workshop->id}}">
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