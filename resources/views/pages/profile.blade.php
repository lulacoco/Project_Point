@extends('layouts.master')
@section('content')

    <div class="profile-container">

        @if (count($errors) > 0)
            <div class="alert alert-danger center-desc" id="login-alert"
                <strong>Ups!</strong> Coś poszło nie tak.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="profile-top-info">
            <div class="profile-top-info-content">
                <div class="profile-picture">
                    <div class="add-profile-picture">

                        @if ($message = Session::get('success'))
                            <img src="{{$profile->first()->src}}" id="profile-picture">
                        @endif

                        {{--@if(!empty($profile->first()->id))--}}
                            @if(($profile->first()->src!=null))
                            <div class="picture-with-button">
                                <img src="{{$profile->first()->src}}" id="profile-picture">
                                <button class="edit-picture-button"> Edytuj zdjęcie </button>
                            </div>

                            {{--NIE WIEM CZY TO ZOSTANIE!!!--}}
                            {{--<div class="delete-picture-trigger">--}}
                            {{--<button class="delete-picture-button" id="delete-button-{{$profile->user_id}}"--}}
                            {{--onclick="deletePicture({{$profile->user_id}})">--}}
                            {{--Usuń zdjęcie--}}
                            {{--</button>--}}
                            {{--</div>--}}
                            {{--<div class="picture-delete" id="picture-delete-{{$profile->user_id}}">--}}
                            {{--</div>--}}
                        @else
                            <div class="picture-buttons-panel">
                                {!! Form::open(array('/profile','files'=>true, 'class' => 'form-control-desc')) !!}
                                {!! Form::file('image', array('class' => 'form-control-profile')) !!}
                                <button type="submit" class="btn add-picture-btn">Dodaj</button>
                                {!! Form::close() !!}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="profile-description-panel">
                    {{--<div class="profile-name">--}}
                        First Name
                        <form class="" action="{{URL::to('/profile')}}" method="post">
                            {{csrf_field()}}
                            <input type="text" name="display_name">
                        </form>
                    {{--</div>--}}
                    <div class="profile-description">
                        Edytuj swój opis...
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-content">
            <div class="profile-content-icons">
                <div id="profile-calendar-icon">
                    <a href="calendar">
                        <i class="far fa-calendar-alt profile-content-icon">
                        </i>
                    </a>
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