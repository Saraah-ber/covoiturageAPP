@extends('layouts.app')

@include('layouts.partials._navbar')

@section('content')
<div class="container-fluid">
    <div class="card border-secondary mb-3">
        <div class="card-header text-uppercase"><i class="mr-1 typcn icon typcn-database"></i>gestion des utilisateurs (création d'utilisateur)
        </div>
        <div class="card-body">
              <h4 class="card-title">
                <a href="{{ route('admin.users.index') }}" class="btn btn-primary text-uppercase">
                    Liste des utilisateurs<i class="typcn icon typcn-th-list ml-1"></i>
                </a>
              </h4>

                @include('admin.users.forms.form_create')

        </div>
    </div>
</div>
@endsection
