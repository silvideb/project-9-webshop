
<div class="container">
    <h1>Gebruikers</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Naam</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>@foreach ($user->roles as $role)
                    {{ $role->name }}@if (!$loop->last), @endif
                    
                @endforeach</td>
               
                <td>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">Bekijken</a>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Bewerken</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Weet je zeker dat je deze gebruiker wilt verwijderen?')">Verwijderen</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
