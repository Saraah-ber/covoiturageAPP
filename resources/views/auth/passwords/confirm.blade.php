@extends('layouts.app')

@section('content')
<div class="container h-100">
    <div class="brand">
        <img class="img-fluid" title="covoiturage" src="{{ asset('img/logo_app.png') }}" alt="logo_covoiturage">
    </div>
    <div class="row justify-content-center h-100">
        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">

                    Avant de continuer, veuillez confirmer votre mot de passe svp !.

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="control-label">Le nouveau mot de passe</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Votre nouveau mot de passe">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    Confirmer le nouveau mot de passe
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="float-right d-inline" href="{{ route('password.request') }}">
                                        J'ai oublié mon mot de passe !
                                    </a>
                                @endif
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
