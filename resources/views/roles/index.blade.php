
<div class="container">
    <h1>Rollen Overzicht</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Aangemaakt op</th>
                <th>Bewerkt op</th>
            </tr>
        <style>
            .container {
                margin-top: 20px;
            }

            h1 {
                text-align: center;
                margin-bottom: 20px;
                color: #333;
            }

            .table {
                width: 100%;
                border-collapse: collapse;
            }

            .table th, .table td {
                text-align: center;
                padding: 10px;
                border: 1px solid #ddd;
            }

            .table th {
                background-color: #f4f4f4;
                color: #555;
            }

            .btn {
                margin: 5px;
            }

            .btn-danger {
                background-color: #d9534f;
                border-color: #d43f3a;
                color: white;
            }

            .btn-info {
                background-color: #5bc0de;
                border-color: #46b8da;
                color: white;
            }

            .btn:hover {
                opacity: 0.9;
            }
        </style> <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>{{ $role->created_at }}</td>
                <td>{{ $role->updated_at }}</td>
                <td>
                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Weet je zeker dat je deze rol wilt verwijderen?')">Verwijderen</button>
                    </form>

                </td>
                <td>
                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-info">bewerken</a>
            </tr>
        
            
            @endforeach
        </td> </table>
        
</div>
