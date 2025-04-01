<h1>Overzicht kortingsbonnen</h1>

    @if (session('success'))
        <div style="color:green;">{{ session('success') }}</div>
    @endif

    <a href="{{ route('coupons.create') }}">Nieuwe kortingsbon aanmaken</a>

    <table border="1" cellpadding="5" cellspacing="0" style="margin-top:20px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kortingscode</th>
                <th>Type</th>
                <th>Kortingswaarde</th>
                <th>Startdatum</th>
                <th>Einddatum</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coupons as $coupon)
                <tr>
                    <td>{{ $coupon->id }}</td>
                    <td>{{ $coupon->code }}</td>
                    <td>{{ ucfirst($coupon->discount_type) }}</td>
                    <td>{{ $coupon->discount_value }}</td>
                    <td>{{ $coupon->start_date ?? 'Onbekend' }}</td>
                    <td>{{ $coupon->end_date ?? 'Onbekend' }}</td>
                    <td>
                        
                        <a href="{{ route('coupons.edit', $coupon->id) }}">Bewerken</a>
                        
                        
                        <form action="{{ route('coupons.destroy', $coupon->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Weet je zeker dat je deze kortingsbon wilt verwijderen?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color: red; color: white; border: none; padding: 5px 10px;">Verwijderen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

