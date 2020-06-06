<tr>
  <td>
    @if (count($user->members) > 0)
      @foreach ($user->members as $obj)
        @if ($obj->gender == 'homme')
          <a href="{{ route('admin.members.show', $obj->firstname) }}">
            <img width="35px" class="border rounded-circle" src="{{ secure_asset('img/male-user-avatar.png') }}" alt="male-user-avatar">
          </a>
        @else
        <a href="{{ route('admin.members.show', $obj->firstname) }}">
            <img width="35px" class="border rounded-circle" src="{{ secure_asset('img/Woman-user-avatar.png') }}" alt="Woman-user-avatar">
        </a>
        @endif
      @endforeach
    @else
        <span class="badge badge-info">N'est pas member !</span>
    @endif
  </td>
  <td>{{ $user->name }}</td>
  <td>
    @if (count($user->members) > 0)
      @foreach ($user->members as $obj)
        <a href="{{ route('admin.members.show', $obj->firstname) }}">{{ $obj->firstname }} {{ $obj->lastname }}<i class="typcn icon typcn-eye ml-1"></i></a>
      @endforeach
    @else
        <span class="badge badge-info">N'est pas member !</span>
    @endif
  </td>
  <td>{{ $user->email }}</td>
  <td>
    @if (Auth::user()->email_verified_at != NULL)
      <span class="badge badge-pill badge-success">Verifié<i class="typcn icon typcn-thumbs-up ml-1"></i></span>
    @else
      <span class="badge badge-pill badge-danger">Non Verifié<i class="typcn icon typcn-thumbs-down ml-1"></i></span>
    @endif
  </td>
  <td>{{Auth::user()->created_at }}</td>
  <td>{{Auth::user()->email_verified_at }}</td>
  <td>
    @if (Auth::user()->last_login_at != NULL)
      {{ Auth::user()->last_login_at }}
    @else
      <span class="badge badge-pill badge-info">Aucune connexion<i class="typcn icon typcn-info-large-outline ml-1"></i></span>
    @endif
  </td>
  <td>
    <p>
      <a class="text-dark text-md" href="{{ route('admin.users.edit', $user->name) }}">
        <i class="typcn icon typcn-edit"></i>
      </a>
      <a href="{{ route('admin.users.destroy', $user) }}" onclick="event.preventDefault();document.getElementById('form-delete-{{$user->name}}').submit();" class="text-danger text-md">
        <i class="typcn icon typcn-trash"></i>
      </a>
      <form id="form-delete-{{$user->name}}" method="post" action="{{ route('admin.users.destroy', $user) }}" style="display: none !important;">
        @csrf
        @method('DELETE')
      </form>
    </p>
  </td>
</tr>

