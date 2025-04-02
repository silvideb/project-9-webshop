
<div class="container">
    <h1>Bewerk Gebruiker</h1>
    <form action="{{ route('users.update', $users->id) }}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="name">Naam</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $users->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $users->email }}" required>
        </div>

        <div class="form-group">
            <label for="role">Rol</label>
            <div id="role">
                @foreach($roles as $role)
                    <div class="form-check">
                        <input 
                            type="checkbox" 
                            name="roles[]" 
                            id="role_{{ $role->id }}" 
                            value="{{ $role->id }}" 
                            class="form-check-input" 
                            {{ $users->role_id == $role->id ? 'checked' : '' }} 
                       ]
                        >
                        <label for="role_{{ $role->id }}" class="form-check-label">
                            {{ $role->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
</div>
