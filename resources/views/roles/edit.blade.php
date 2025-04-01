
<div class="container">
    <h1>Bewerk Rol</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('roles.update', $role->id) }}" method="POST">
        @csrf
       

        <div class="mb-3">
            <label for="name" class="form-label">Naam</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $role->name) }}" required>
        </div>

        {{-- <div class="mb-3">
            <label for="permissions" class="form-label">Permissies</label>
            <select name="permissions[]" id="permissions" class="form-control" multiple>
                @foreach ($permissions as $permission)
                    <option value="{{ $permission->id }}" 
                        {{ in_array($permission->id, $rolePermissions) ? 'selected' : '' }}>
                        {{ $permission->name }}
                    </option>
                @endforeach
            </select>
        </div> --}}

        <button type="submit" class="btn btn-primary">Opslaan</button>
        <a href="{{ route('roles.index') }}" class="btn btn-secondary">Annuleren</a>
    </form>
</div>
