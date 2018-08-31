@extends('layouts.master')
@section('content')

<div class="container">
    @if (session('status'))
        <div class="alert alert-warning center-desc" id="login-alert">
            {{ session('status') }}
        </div>
    @endif
            <div class="card">
                <div class="card-header">{{ __('Zaloguj się') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-3 ol-form-label text-md-right">{{ __('E-Mail:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Hasło:') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Zapamiętaj mnie') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-5">
                                <button type="submit" class = "log-reg-button">
                                    {{ __('Zaloguj się') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Zapomniałeś hasła?') }}
                                </a>
                            </div>
                        </div>
                    </form>

                    <div class="form-group row mb=0">
                        <div class="col-md-10 offset-md-5">
                        @guest
                                <button type="submit" class = "log-reg-button">
                                    <a href="{{ route('register')}}">{{ __('Zarejestruj się') }}</a>
                                </button>
                        </div>
                        @endguest
                    </div>

                </div>
            </div>
</div>
@endsection
