@extends('layouts.app')

@include('layouts.partials._navbar')

@section('content')
<div class="container-fluid">
    <div class="row-fluid">
      <div class="card border-secondary mb-3">
        <div class="card-header text-uppercase"><i class="mr-1 typcn icon typcn-database"></i>gestion des membres</div>
        <div class="card-body">
          <h4 class="card-title"><a href="{{ route('admin.members.create') }}" class="btn btn-primary text-uppercase">
            Ajouter membre<i class="typcn icon typcn-plus ml-1"></i></a></h4>
            <div class="table-responsive">

              <table class="dataTable table table-striped table-hover dt-responsive display nowrap">
                <thead class="text-truncate">
                    <tr>
                        <th>ID</th>
                        <th>Catégorie</th>
                        <th>Nom du compte</th>
                        <th>Nom d'utilisateur</th>
                        <th>Prénom d'utilisateur</th>
                        <th>Identifiant national</th>
                        <th>sexe</th>
                        <th>Ville</th>
                        <th>Téléphone</th>
                        <th>Adresse</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-truncate">
                  @foreach ($members as $member)
                    <x-fetch-all-members :member="$member"/>
                  @endforeach
                </tbody>
                <tfoot class="text-truncate">
                    <tr>
                        <th>ID</th>
                        <th>Catégorie</th>
                        <th>Nom du compte</th>
                        <th>Nom d'utilisateur</th>
                        <th>Prénom d'utilisateur</th>
                        <th>Identifiant national</th>
                        <th>sexe</th>
                        <th>Ville</th>
                        <th>Téléphone</th>
                        <th>Adresse</th>
                        <th>Email</th>
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
