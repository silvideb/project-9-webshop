
<div class="container">
    <h1>Gebruiker Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Naam: {{ $user->name }}</h5>
            <p class="card-text">E-mail: {{ $user->email }}</p>
            <p class="card-text">Geregistreerd op: {{ $user->created_at->format('d-m-Y H:i') }}</p>
            <p><td>@foreach ($user->roles as $role)
                {{ $role->name }}@if (!$loop->last), @endif
                
            @endforeach</td>
           </p>
        </div>
    </div>
    <a href="{{ route('users.index') }}" class="btn btn-primary mt-3">Terug naar overzicht</a>
</div>
<div class="card mt-3">
    <div class="card-body">
       
    </div>
</div>