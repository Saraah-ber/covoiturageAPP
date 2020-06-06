@extends('layouts.app')

@include('layouts.partials._navbar')

@section('content')

  <div class="container-fluid">
    <div class="row justify-content-center">
      <div style="background-image: radial-gradient( circle farthest-corner at 50.3% 44.5%,  rgba(116,147,179,1) 0%, rgba(62,83,104,1) 100.2% );" class="p-3 text-center col-2 mr-3">
        <i style="font-size: 70px;" class="typcn icon typcn-database text-light font-weight-bold"></i>
        <h3 class="mt-3 text-uppercase text-light font-weight-light">{{ $users }} Utilisateur{{ ($users > 1) ? 's' : '' }}</h3>
      </div>
      <div style="background-image: radial-gradient( circle farthest-corner at 50.3% 44.5%,  rgba(116,147,179,1) 0%, rgba(62,83,104,1) 100.2% );" class="p-3 text-center col-2 mr-3">
        <i style="font-size: 70px;" class="typcn icon typcn-database text-light font-weight-bold"></i>
        <h3 class="mt-3 text-uppercase text-light font-weight-light">{{ $members }} Membre{{ ($members > 1) ? 's' : '' }}</h3>
      </div>
      <div style="background-image: radial-gradient( circle farthest-corner at 50.3% 44.5%,  rgba(116,147,179,1) 0%, rgba(62,83,104,1) 100.2% );" class="p-3 text-center col-2 mr-3">
        <i style="font-size: 70px;" class="typcn icon typcn-database text-light font-weight-bold"></i>
        <h3 class="mt-3 text-uppercase text-light font-weight-light">{{ $assurances }} Assurance{{ ($assurances > 1) ? 's' : '' }}</h3>
      </div>
      <div style="background-image: radial-gradient( circle farthest-corner at 50.3% 44.5%,  rgba(116,147,179,1) 0%, rgba(62,83,104,1) 100.2% );" class="p-3 text-center col-2">
        <i style="font-size: 70px;" class="typcn icon typcn-database text-light font-weight-bold"></i>
        <h3 class="mt-3 text-uppercase text-light font-weight-light">{{ $vehicules }} Véhicule{{ ($vehicules > 1) ? 's' : '' }}</h3>
      </div>
    </div>
  </div>

@endsection
