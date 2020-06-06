@extends('layouts.app')

@include('layouts.partials._navbar')

@section('content')
<div class="container-fluid">
    <div class="card border-secondary mb-3">
        <div class="card-header text-uppercase"><i class="mr-1 typcn icon typcn-database"></i>
            Enregistrement d'assurance / véhicule
        </div>
        <div class="card-body">

                @include('admin.assurances.forms.form_create_assurance')

        </div>
    </div>
    <div class="card border-secondary mb-3">
        <div class="card-header text-uppercase"><i class="mr-1 typcn icon typcn-database"></i>Ajouter nouvelle véhicule
        </div>
        <div class="card-body">
              <h4 class="card-title">
                <a href="{{ route('admin.vehicules.index') }}" class="btn btn-primary text-uppercase">
                    Liste des véhicules<i class="typcn icon typcn-th-list ml-1"></i>
                </a>
              </h4>

                @include('admin.vehicules.forms.form_create')

        </div>
    </div>
</div>
@endsection
