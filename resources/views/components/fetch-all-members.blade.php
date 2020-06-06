<tr>
  <td><a href="{{ route('admin.members.show', $member->firstname) }}">#{{ $member->id }}</a></td>
  <td>{{ $member->category_name }}</td>
  <td><span class="badge badge-pill badge-warning">{{ $member->user_name }}</span></td>
  <td>{{ $member->firstname }}</td>
  <td>{{ $member->lastname }}</td>
  <td>{{ $member->CIN }}</td>
  <td>{{ $member->gender }}</td>
  <td>{{ $member->city }}</td>
  <td>{{ $member->phoneNumber }}</td>
  <td>{{ Str::limit($member->address, 15, $end='...') }}</td>
  <td>{{ $member->mail }}</td>
  <td>
    <p>
      <a class="text-info text-md" href="{{ route('admin.members.show', $member->firstname) }}"><i class="typcn icon typcn-eye"></i></a>
      <a class="text-dark text-md" href="{{ route('admin.members.edit', $member->firstname) }}"><i class="typcn icon typcn-edit"></i></a>
      <a class="text-danger text-md" href="{{ route('admin.members.destroy', $member->firstname) }}"><i class="typcn icon typcn-trash"></i></a>
    </p>
  </td>
</tr>

