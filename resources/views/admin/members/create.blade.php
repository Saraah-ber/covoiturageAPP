@extends('layouts.app')

@include('layouts.partials._navbar')

@section('content')
<div class="container-fluid">
    <div class="card border-secondary mb-3">
        <div class="card-header text-uppercase"><i class="mr-1 typcn icon typcn-database"></i>gestion des membres (création de membre)
        </div>
        <div class="card-body">
              <h4 class="card-title">
                <a href="{{ route('admin.members.index') }}" class="btn btn-primary text-uppercase">
                    Liste des membres<i class="typcn icon typcn-th-list ml-1"></i>
                </a>
              </h4>

                @include('admin.members.forms.form_create')

        </div>
    </div>
</div>
@endsection
