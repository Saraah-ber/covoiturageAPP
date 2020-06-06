@extends('layouts.app')

@include('layouts.partials._navbar')

@section('content')
<div class="container-fluid">
    <div class="card border-secondary mb-3">
        <div class="card-header text-uppercase"><i class="mr-1 typcn icon typcn-database"></i>gestion des utilisateurs (éditer les informations du compte <strong>{{ $user->name }}</strong>)
        </div>
        <div class="card-body">
              <h4 class="card-title">
                <a href="{{ route('admin.users.index') }}" class="btn btn-primary text-uppercase">
                    Liste des utilisateurs<i class="typcn icon typcn-th-list ml-1"></i>
                </a>
                <a href="{{ route('admin.users.create') }}" class="btn btn-success text-uppercase">
                    Créer nouveau<i class="typcn icon typcn-plus-outline ml-1"></i>
                </a>
              </h4>

                @include('admin.users.forms.form_update')

        </div>
    </div>
</div>
@endsection

