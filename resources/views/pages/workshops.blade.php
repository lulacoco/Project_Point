@extends('layouts.master')
@section('content')

    <div class="workshops-panel">
        <div id="actual-workshops-desc">
            Aktualne wydarzenia
        </div>
        <div class ="actual-workshops-panel">
        @foreach($workshops as $workshop)
            @if(($workshop->start_date)>('2018-08-20'))

                <div class="actual-workshops">
                    <iframe src={{$workshop->src}} alt={{ $workshop->name }} allowfullscreen></iframe>
                </div>
            @endif
        @endforeach
        </div>

        <div id="past-workshops-desc">
            Minione wydarzenia
        </div>
        <div class="past-workshops-panel">
        @foreach($workshops as $workshop)
            @if(($workshop->start_date)<('2018-08-20'))

                <div class="past-workshops">
                    <iframe src={{$workshop->src}} alt={{ $workshop->name }} allowfullscreen></iframe>
                </div>
            @endif
        @endforeach
        </div>
    </div>
@stop