@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Twój status</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                Już jesteś zalogowany!
            </div>
        </div>
    </div>
@endsection