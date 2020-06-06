@extends('layouts.app')

@section('content')
<div class="container h-100">
    <div class="brand">
        <img class="img-fluid" title="covoiturage" src="{{ asset('img/logo_app.png') }}" alt="logo_covoiturage">
    </div>
    <div class="row justify-content-center h-100">
        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Un lien de verification à été envoyer à votre boite email.
                        </div>
                    @endif

                        Avant de procéder, merci de vérifier votre boite email à prôpos de lien de vérification.
                        Si vous n'avez recever aucun lien ,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">un simple click pour recevoir un autre !</button>.
                    </form>
        </div>
    </div>
</div>
@endsection
