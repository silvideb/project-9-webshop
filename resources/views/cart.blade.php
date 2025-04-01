<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagen</title>
</head>
<body>
    <h1>Jouw Winkelwagen</h1>

    @if(session('cart') && count(session('cart')) > 0)
        <table>
            <thead>
                <tr>
                    <th>Productnaam</th>
                    <th>Prijs</th>
                    <th>Aantal</th>
                    <th>Subtotaal</th>
                    <th>Acties</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $total = 0;
                    $cart = session('cart');
                @endphp
                @foreach($cart as $id => $item)
                    @php
                        $subtotal = $item['price'] * $item['quantity'];
                        $total += $subtotal;
                    @endphp
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>€{{ number_format($item['price'], 2) }}</td>
                        <td>
                            <form action="{{ route('cart.updateItem', $id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" style="width: 60px;">
                                <button type="submit">Update</button>
                            </form>
                        </td>
                        <td>€{{ number_format($subtotal, 2) }}</td>
                        <td>
                            <form action="{{ route('cart.destroy', $id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je dit item wilt verwijderen?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Verwijderen</button>
                            </form>                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <br>
        <p><strong>Totaal: €{{ number_format($total, 2) }}</strong></p>

        @php
            // Voorbeeld berekening van verzendkosten: als totaal < €50 dan €5, anders gratis
            $shippingCost = $total < 50 ? 5.00 : 0.00;
        @endphp
        <p><strong>Verzendkosten: €{{ number_format($shippingCost, 2) }}</strong></p>
        <p><strong>Totaal met verzendkosten: €{{ number_format($total + $shippingCost, 2) }}</strong></p>

        <br>
        <a href="{{ route('checkout.index') }}">
            <button type="button">Ga naar de kassa</button>
        </a>
    @else
        <p>Je winkelwagen is leeg.</p>
    @endif
</body>
</html>
