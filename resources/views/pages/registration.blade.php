@extends('layouts.master')
@section('content')

    <h2>Zarejestruj się</h2>
    <form method="POST" action="/register">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Imię:</label>
            <input type="text" class="form-control" id="first_name" name="first_name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="e_mail" name="e_mail">
        </div>

        <div class="form-group">
            <label for="password">Hasło:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Utwórz konto</button>
        </div>
        {{--@include('partials.formerrors')--}}
    </form>

@endsection
