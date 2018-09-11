@extends('layouts.master')
@section('content')
    <div class="profile-container">
        <div class="profile-top-info">
            <div class="profile-top-info-content">
                <div class="profile-picture">
                    @if (Auth::user() !== null)
                        @foreach($profile as $profile)
                            {{ $profile->src }}
                        @break
                        @endforeach
                    @else
                        <div class="add-profile-picture">
                            Dodaj zdjęcie
                        </div>
                    @endif
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