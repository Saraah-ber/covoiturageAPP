@extends('layouts.app')

@section('content')
<div class="container h-100">
    <div class="brand">
        <img class="img-fluid" title="covoiturage" src="{{ asset('img/logo_app.png') }}" alt="logo_covoiturage">
    </div>
    <div class="row justify-content-md-center h-100">
        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    @if (session('resent'))
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <div class="alert alert-success" role="alert">
                            <i class="typcn icon typcn-tick-outline mr-1"></i>{{ session('resent') }}
                        </div>
                    @endif
                     @if (session('verified'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <i class="typcn icon typcn-info-large mr-1"></i>{{ session('verified') }}
                        </div>
                    @endif
                    @if (session('info'))
                        <div class="alert alert-info" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <i class="typcn icon typcn-info-large mr-1"></i>{{ session('info') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="control-label">Email</label>


                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Votre email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group">
                            <label for="password" class="control-label d-block">
                            Mot de passe
                            @if (Route::has('password.request'))
                                <a class="float-right d-inline" href="{{ route('password.request') }}">
                                    J'ai oublié mon mot de passe !
                                </a>
                            @endif
                            </label>


                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="votre mot de passe">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="custom-control-label d-block" for="remember">
                                        Se souvenir de moi ?
                                        <a class="float-right d-inline" href="{{ route('register') }}">Créer nouveau compte !</a>
                                    </label>
                                </div>
                        </div>

                        <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    Se connecter <i class="ml-1 typcn icon typcn-lock-open-outline"></i>
                                </button>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
