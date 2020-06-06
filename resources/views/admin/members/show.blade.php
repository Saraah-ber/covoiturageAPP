@extends('layouts.app')

@include('layouts.partials._navbar')

@section('content')
<div class="container-fluid">
    <div class="card border-secondary mb-3">
        <div class="card-header text-uppercase"><i class="mr-1 typcn icon typcn-database"></i>gestion des membres (Les informations de
            <strong>{{ $member->firstname }} {{ $member->lastname }}</strong>)
        </div>
        <div class="card-body">
          <h4 class="card-title"><a href="{{ route('admin.members.index') }}" class="btn btn-primary text-uppercase">
            Liste des membres<i class="typcn icon typcn-th-list ml-1"></i></a></h4>
                <div class="d-flex flex-row">
                    <div class="form-group col-12">
                        <label for="category" class="text-dark control-label">La Catégorie de membre</label>
                        <select disabled="disabled" name="category_id" id="category" class="form-control @error('category_id') is-invalid @enderror">
                                <option value="{{ $member->category->id }}">{{ $member->category->name }}</option>
                        </select>
                        @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                <small class="form-text text-danger">{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="d-flex flex-row">
                        <div class="form-group col-4">
                            <label for="Nom" class="control-label">Nom</label>
                            <input disabled="disabled" id="Nom" type="text" class="form-control" name="Nom" placeholder="{{ $member->firstname }}">
                        </div>
                        <div class="form-group col-4">
                            <label for="Prénom" class="control-label">Prénom</label>
                            <input disabled="disabled" id="Prénom" type="text" class="form-control" name="Prénom" placeholder="{{ $member->lastname }}">
                        </div>
                        <div class="form-group col-4">
                            <label for="Cin" class="control-label">Cin</label>
                            <input disabled="disabled" id="Cin" type="text" class="form-control" name="Cin" placeholder="{{ $member->CIN }}">
                        </div>
                </div>
                <div class="d-flex flex-row">
                        <div class="form-group col-4">
                            <label for="Sexe" class="control-label">Sexe</label>
                            <input disabled="disabled" id="Sexe" type="text" class="form-control" name="Sexe" placeholder="{{ $member->gender }}">
                        </div>
                        <div class="form-group col-4">
                            <label for="Ville" class="control-label">Ville</label>
                            <input disabled="disabled" id="Ville" type="text" class="form-control" name="Ville" placeholder="{{ $member->city }}">
                        </div>
                        <div class="form-group col-4">
                            <label for="téléphone" class="control-label">Numéro de téléphone</label>
                            <input disabled="disabled" id="téléphone" type="text" class="form-control" name="téléphone" placeholder="{{ $member->phoneNumber }}">
                        </div>
                </div>
                <div class="d-flex flex-row">
                        <div class="form-group col-4">
                            <label for="Email" class="control-label">@ Email</label>
                            <input disabled="disabled" id="Email" type="text" class="form-control" name="Email" placeholder="{{ $member->mail }}">
                        </div>
                        <div class="form-group col-4">
                            <label for="Adresse" class="control-label">Adresse</label>
                            <textarea disabled="disabled" id="Adresse" type="text" class="text-truncate form-control" name="Adresse" placeholder="{{ $member->address }}"></textarea>
                        </div>
                        <div class="form-group col-4">
                            <label for="date" class="control-label">Date de création</label>
                            <input disabled="disabled" id="date" type="text" class="text-truncate form-control" name="created_at" placeholder="{{ $member->created_at }}">
                        </div>
                </div>
        </div>
    </div>
    <div class="card border-secondary mb-3">
        <div class="card-header text-uppercase"><i class="mr-1 typcn icon typcn-database"></i>Compte utilisateur de <strong>{{ $member->firstname }}</strong>
        </div>
        <div class="card-body">
          	<h4 class="card-title">
	            <a href="{{ route('admin.users.edit', $member->user->name) }}" class="btn btn-primary text-uppercase">
	            Modifier votre compte utilisateur<i class="typcn icon typcn-pencil ml-1"></i>
	            </a>
            </h4>
                <div class="d-flex flex-row">
                        <div class="form-group col-4">
                            <label for="Nom" class="control-label">Nom d'utilisateur</label>
                            <input disabled="disabled" id="Nom" type="text" class="form-control" name="Nom" placeholder="{{ $member->user->name }}">
                        </div>
                        <div class="form-group col-4">
                            <label for="email" class="control-label">@ Email d'utilisateur</label>
                            <input disabled="disabled" id="email" type="text" class="form-control" name="email" placeholder="{{ $member->user->email }}">
                        </div>
                        <div class="form-group col-4">
                            <label for="date" class="control-label">Date de création</label>
                            <input disabled="disabled" id="date" type="text" class="form-control" name="date" placeholder="{{ $member->user->created_at }}">
                        </div>
                </div>
                <div class="d-flex flex-row">
                        <div class="form-group col-4">
                            <label for="date" class="control-label">Date de derniere connexion</label>
                            <input disabled="disabled" id="date" type="text" class="form-control" name="date" placeholder="{{ $member->user->last_login_at }}">
                        </div>
                </div>
        </div>
    </div>
</div>
@endsection
