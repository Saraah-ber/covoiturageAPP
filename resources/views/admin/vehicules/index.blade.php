@extends('layouts.app')

@include('layouts.partials._navbar')

@section('content')
<div class="container-fluid">
  <div class="row-fluid">
    <div class="card border-secondary mb-3">
    <div class="card-header text-uppercase"><i class="mr-1 typcn icon typcn-database"></i>Liste des véhicules</div>
    <div class="card-body">
      <h4 class="card-title">
        <a href="{{ route('admin.vehicules.create') }}" class="btn btn-primary text-uppercase">
        Ajouter véhicule / assurance<i class="typcn icon typcn-plus ml-1"></i>
        </a>
      </h4>
      <div class="table-responsive">

        <table class="dataTable table table-striped table-hover dt-responsive display nowrap">
                <thead class="text-truncate">
                    <tr>
                        <th>#ID</th>
                        <th>police assurance</th>
                        <th>Marque</th>
                        <th>Type véhicule</th>
                        <th>Matricule</th>
                        <th>models</th>
                        <th>nb_place</th>
                        <th>Fin de validité d'assurance</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-truncate">
                  @foreach ($vehicules as $vehicule)
                    <x-fetch-all-vehicules :vehicule="$vehicule"/>
                  @endforeach
                </tbody>
                <tfoot class="text-truncate">
                    <tr>
                        <th>#ID</th>
                        <th>police assurance</th>
                        <th>Marque</th>
                        <th>Type véhicule</th>
                        <th>Matricule</th>
                        <th>models</th>
                        <th>nb_place</th>
                        <th>Fin de validité d'assurance</th>
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
