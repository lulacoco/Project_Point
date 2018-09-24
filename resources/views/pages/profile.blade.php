@extends('layouts.master')
@section('content')


    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading"><h2>Laravel 5.5 image upload example</h2></div>
            <div class="panel-body">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    <img src="images/{{ Session::get('image') }}">
                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    {!! Form::open(array('/profile','files'=>true)) !!}
                    <div class="row">
                    <div class="col-md-6">
                        {!! Form::file('image', array('class' => 'form-control')) !!}
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>






    <div class="profile-container">
        <div class="profile-top-info">
            <div class="profile-top-info-content">
                <div class="profile-picture">
                    {{--@if (Auth::user() !== null)--}}
                        {{--@foreach($profile as $profile)--}}
                            {{--{{ $profile->src }}--}}
                        {{--@break--}}
                        {{--@endforeach--}}
                    {{--@else--}}
                        <div class="add-profile-picture">
                            Dodaj zdjęcie
                        </div>
                    {{--@endif--}}
                </div>
                <div class="profile-description-panel">
                    <div class="profile-name">
                        lala
                    </div>
                    <div class="profile-description">
                        Edytuj swój opis...
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-content">
            <div class="profile-content-icons">
                <div id="profile-calendar-icon">
                    <i class="far fa-calendar-alt profile-content-icon"></i>
                </div>
                <div id="profile-statistics-icon">
                    <i class="far fa-chart-bar profile-content-icon"></i>
                </div>
                <div id="profile-notes-icon">
                    <i class="far fa-clipboard profile-content-icon"></i>
                    {{--<i class="far fa-file profile-content-icon"></i>--}}
                </div>
                <div id="profile-edit-icon">
                    <i class="fas fa-sliders-h profile-content-icon"></i>
                </div>
            </div>
        </div>
    </div>
@stop
