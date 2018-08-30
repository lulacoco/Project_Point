@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">Twój status</div>
            <div class="card-body">
                @if (Auth::user() !== null)
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>

                Już jesteś zalogowany!

                <div class="logout-button">
                    <a href="#" role="button">
                        {{ Auth::user()->name }}
                    </a>
                    <button type="submit" class="log-reg-button">

                        <a class="log-reg-button" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Wyloguj się') }}
                        </a>
                    </button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                @endif

            </div>
        </div>
    </div>
@endsection