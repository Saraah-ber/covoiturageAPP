<tr>
  <td><a href="{{ route('admin.trajets.show', $trajet) }}">#{{ $trajet->id }}</a></td>
  <td><span class="badge badge-pill badge-success">{{ $trajet->type->name }}</span></td>
  <td>{{ $trajet->date_départ }}</td>
  <td>{{ $trajet->date_arrivé }}</td>
  <td>{{ $trajet->Temps_pause }}</td>
  <td>
    <p>
      <a class="text-info text-md" href="{{ route('admin.trajets.show', $trajet) }}"><i class="typcn icon typcn-eye"></i></a>
      <a class="text-dark text-md" href="{{ route('admin.trajets.edit', $trajet) }}"><i class="typcn icon typcn-edit"></i></a>
      <a class="text-danger text-md" href="{{ route('admin.trajets.destroy', $trajet) }}" onclick="event.preventDefault();document.getElementById('form-delete-{{$trajet->id}}').submit();">
        <i class="typcn icon typcn-trash"></i>
      </a>
      <form id="form-delete-{{$trajet->id}}" method="post" action="{{ route('admin.trajets.destroy', $trajet) }}" style="display: none !important;">
        @csrf
        @method('DELETE')
      </form>
    </p>
  </td>
</tr>

