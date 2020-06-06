@extends('layouts.app')

@section('content')
<div class="container h-100">
    <div class="brand">
        <img class="img-fluid" title="covoiturage" src="{{ asset('img/logo_app.png') }}" alt="logo_covoiturage">
    </div>
    <div class="row justify-content-center h-100">
        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    Envoyé le lien de confirmation <i class="typcn icon typcn-location-arrow ml-1"></i>
                                </button>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
