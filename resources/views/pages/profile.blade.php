@extends('layouts.master')
@section('content')

    <div class="profile-container">
        <div class="profile-top-info">
            <div class="profile-top-info-content">
                <div class="profile-picture">
                        {{--<div class="add-profile-picture">--}}

                            @if ($message = Session::get('success'))
                                {{--<div class="alert alert-success alert-block">--}}
                                    {{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
                                    {{--<strong>{{ $message }}</strong>--}}
                                {{--</div>--}}
                                <img src="images/{{ Session::get('image') }}" id="profile-picture">
                            @endif

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Ups!</strong> Coś poszło nie tak.
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                                <div class="picture-buttons-panel">
                                    {!! Form::open(array('/profile','files'=>true, 'class' => 'form-control-desc')) !!}
                                    {!! Form::file('image', array('class' => 'form-control')) !!}
                                    <button type="submit" class="btn add-picture-btn">Dodaj</button>
                                    {!! Form::close() !!}
                                </div>
                        {{--</div>--}}
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
