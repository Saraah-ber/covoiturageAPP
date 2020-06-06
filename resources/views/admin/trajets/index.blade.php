@extends('layouts.app')

@include('layouts.partials._navbar')

@section('content')
<div class="container-fluid">
  <div class="row-fluid">
    <div class="card border-secondary mb-3">
    <div class="card-header text-uppercase"><i class="mr-1 typcn icon typcn-database"></i>gestion des covoiturage</div>
    <div class="card-body">
      <h4 class="card-title">
        <a href="{{ route('admin.trajets.create') }}" class="btn btn-primary text-uppercase">
        Déposer une annonce<i class="typcn icon typcn-plus ml-1"></i>
        </a>
        <a href="{{ route('admin.vehicules.create') }}" class="btn btn-primary text-uppercase">
        Ajouter véhicule / assurance<i class="typcn icon typcn-plus ml-1"></i>
        </a>
        <a href="{{ route('admin.vehicules.index') }}" class="btn btn-primary text-uppercase">
            Liste des véhicules<i class="typcn icon typcn-th-list ml-1"></i>
        </a>
      </h4>
            <div class="table-responsive">

              <table class="dataTable table table-striped table-hover dt-responsive display nowrap">
                <thead class="text-truncate">
                    <tr>
                        <th>ID</th>
                        <th>Type trajet</th>
                        <th>Horaire départ</th>
                        <th>Horaire d'arrivée</th>
                        <th>Temps de pause</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-truncate">
                  @foreach ($trajets as $trajet)
                    <x-fetch-all-annonces-trajets :trajet="$trajet"/>
                  @endforeach
                </tbody>
                <tfoot class="text-truncate">
                    <tr>
                        <th>ID</th>
                        <th>Type trajet</th>
                        <th>Horaire départ</th>
                        <th>Horaire d'arrivée</th>
                        <th>Temps de pause</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
              </table>

            </div>
    </div>
    </div>
  </div>
</div>
@endsection
