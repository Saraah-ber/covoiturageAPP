@extends('layouts.app')

@include('layouts.partials._navbar')

@section('content')
<div class="container-fluid">
    <div class="card border-secondary mb-3">
        <div class="card-header text-uppercase"><i class="mr-1 typcn icon typcn-database"></i>gestion des trajets (Les informations de trajet N°<strong>#{{ $trajet->id }}</strong>)
        </div>
        <div class="card-body">
          <h4 class="card-title">
            <a href="{{ route('admin.trajets.index') }}" class="btn btn-info text-uppercase">
            List annances trajet<i class="typcn icon typcn-th-list ml-1"></i>
            </a>
          </h4>

        <div class="d-flex flex-row">
            <div class="form-group col-4">
                <label for="typeTrajet" class="text-dark control-label">Le type de trajet</label>
                <select disabled name="type_id" id="typeTrajet" class="form-control">
                      <option value="{{ $trajet->type->id }}">{{ $trajet->type->name }}</option>
                </select>
            </div>
            <div class="form-group col-4">
                <label for="date_départ" class="control-label">Horaire départ</label>
                <input disabled id="date_départ" type="text" class="form-control" name="date_départ" placeholder="{{ $trajet->date_départ }}">
            </div>
            <div class="form-group col-4">
                <label for="date_arrivé" class="control-label">Horaire d'arrivé</label>
                <input disabled id="date_arrivé" type="text" class="form-control @error('date_arrivé') is-invalid @enderror" name="date_arrivé" placeholder="{{ $trajet->date_arrivé }}">
            </div>
        </div>

        <div class="d-flex flex-row">
            <div class="form-group col-4">
                <label for="Temps_pause" class="control-label">Temps pause</label>
                <input disabled id="Temps_pause" type="text" class="form-control" name="Temps_pause" placeholder="{{ $trajet->Temps_pause }}">
            </div>
            <div class="form-group col-4">
                <label for="Lieu_départ" class="control-label">Lieu départ</label>
                <input disabled id="Lieu_départ" type="text" class="form-control" name="Lieu_départ" placeholder="{{ $trajet->Lieu_départ }}">
            </div>
            <div class="form-group col-4">
                <label for="Lieu_arrivé" class="control-label">Lieu d'arrivé</label>
                <input disabled id="Lieu_arrivé" type="text" class="form-control" name="Lieu_arrivé" placeholder="{{ $trajet->Lieu_arrivé }}">
            </div>
        </div>

        <div class="d-flex flex-row">
            <div class="form-group col-4">
                <label for="Ville_départ" class="control-label">Ville départ</label>
                <input disabled id="Ville_départ" type="text" class="form-control" name="Ville_départ" placeholder="{{ $trajet->Ville_départ }}">
            </div>
            <div class="form-group col-4">
                <label for="Ville_arrivé" class="control-label">Ville d'arrivé</label>
                <input disabled id="Ville_arrivé" type="text" class="form-control" name="Ville_arrivé" placeholder="{{ $trajet->Ville_arrivé }}">
            </div>
            <div class="form-group col-4">
                <label for="pays_départ" class="control-label">Pays départ</label>
                <input disabled id="pays_départ" type="text" class="form-control" name="pays_départ" placeholder="{{ $trajet->pays_départ }}">
            </div>
        </div>

        <div class="d-flex flex-row">
            <div class="form-group col-4">
                <label for="pays_arrivé" class="control-label">Pays d'arrivé</label>
                <input disabled id="pays_arrivé" type="text" class="form-control" name="pays_arrivé" placeholder="{{ $trajet->pays_arrivé }}">
            </div>
        </div>

    </div>
</div>
@stop
