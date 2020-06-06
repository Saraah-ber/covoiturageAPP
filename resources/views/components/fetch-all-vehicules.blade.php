<tr>
  <td><a href="">#{{ $vehicule->id }}</a></td>
  <td><span class="badge badge-pill badge-dark">{{ $vehicule->assurance->police }}</span></td>
  <td>{{ $vehicule->brand }}</td>
  <td>{{ $vehicule->type }}</td>
  <td>{{ $vehicule->matricule }}</td>
  <td>{{ $vehicule->Modele }}</td>
  <td>{{ $vehicule->nb_places }}</td>
  <td>{{ $vehicule->assurance->date_fin }}</td>
  <td>
    <p>
      <a href="{{ route('admin.vehicules.destroy', $vehicule) }}" onclick="event.preventDefault();document.getElementById('form-delete-{{$vehicule->brand}}').submit();" class="text-danger text-md">
        <i class="typcn icon typcn-trash"></i>
      </a>
      <form id="form-delete-{{$vehicule->brand}}" method="post" action="{{ route('admin.vehicules.destroy', $vehicule) }}" style="display: none !important;">
        @csrf
        @method('DELETE')
      </form>
    </p>
  </td>
</tr>

