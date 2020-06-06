@extends('layouts.app')

@include('layouts.partials._navbar')

@section('content')
<div class="container-fluid">
    <div class="card border-secondary mb-3">
        <div class="card-header text-uppercase"><i class="mr-1 typcn icon typcn-database"></i>gestion des trajets (éditer les informations du trajet N°_<strong>{{ $trajet->id }}</strong>)
        </div>
        <div class="card-body">
              <h4 class="card-title">
                <a href="{{ route('admin.trajets.index') }}" class="btn btn-primary text-uppercase">
                    Liste des trajets<i class="typcn icon typcn-th-list ml-1"></i>
                </a>
                <a href="{{ route('admin.trajets.create') }}" class="btn btn-success text-uppercase">
                    Créer nouveau<i class="typcn icon typcn-plus-outline ml-1"></i>
                </a>
              </h4>

                @include('admin.trajets.forms.form_update')

        </div>
    </div>
</div>
@endsection

