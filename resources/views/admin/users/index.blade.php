@extends('layouts.app')

@include('layouts.partials._navbar')

@section('content')
<div class="container-fluid">
    <div class="row-fluid">
      <div class="card border-secondary mb-3">
        <div class="card-header text-uppercase"><i class="mr-1 typcn icon typcn-database"></i>gestion de profile utilisateurs</div>
        <div class="card-body">
          <h4 class="card-title">
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary text-uppercase">
            Ajouter nouveau<i class="typcn icon typcn-plus ml-1"></i>
            </a>
          </h4>
            <div class="table-responsive">

              <table class="dataTable table table-striped table-hover dt-responsive display nowrap">
                <thead class="text-truncate">
                    <tr>
                        <th>Avatar</th>
                        <th>Nom du compte</th>
                        <th>Nom du membre</th>
                        <th>Email</th>
                        <th>Statut_compte</th>
                        <th>Date création</th>
                        <th>Date vérification</th>
                        <th>Derniére connexion</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-truncate">
                  @foreach ($users as $user)
                    <x-fetch-all-users :user="$user"/>
                  @endforeach
                </tbody>
                <tfoot class="text-truncate">
                    <tr>
                        <th>Avatar</th>
                        <th>Nom du compte</th>
                        <th>Nom du membre</th>
                        <th>Email</th>
                        <th>Statut_compte</th>
                        <th>Date création</th>
                        <th>Date vérification</th>
                        <th>Dérniére connexion</th>
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
