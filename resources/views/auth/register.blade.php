@extends('layouts.app')

@section('content')
<div class="container h-100">
    <div class="brand">
        <img class="img-fluid" title="covoiturage" src="{{ asset('img/logo_app.png') }}" alt="logo_covoiturage">
    </div>
    <div class="row justify-content-center h-100">
        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="control-label">Nom</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Votre nom">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="control-label d-block">
                            Email
                            <a class="float-right d-inline" href="{{ route('login') }}">Vous avez déjà un compte ?</a>
                        </label>

                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Votre email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="control-label">Mot de passe</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Votre mot de passe">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="control-label">Mot de passe de confirmation</label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Votre mot de passe de confirmation">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                S'enregistrer<i class="ml-1 typcn icon typcn-user-add-outline"></i>
                            </button>
                        </div>
                    </form>

        </div>
    </div>
</div>
@endsection
