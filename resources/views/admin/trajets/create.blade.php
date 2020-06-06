@extends('layouts.app')

@include('layouts.partials._navbar')

@section('content')
<div class="container-fluid">
    <div class="card border-secondary mb-3">
        <div class="card-header text-uppercase"><i class="mr-1 typcn icon typcn-database"></i>gestion des trajets (création de nouveau trajet)
        </div>
        <div class="card-body">

                @include('admin.trajets.forms.form_create')

        </div>
    </div>
</div>
@endsection
