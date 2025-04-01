<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagen</title>
</head>
<body>
    <h1>Jouw winkelwagen</h1>
    
    @if(empty($cart))
        <p>Je winkelwagen is leeg.</p>
    @else
        <ul>
            @foreach($cart as $item)
                <li>{{ $item['name'] }} - €{{ $item['price'] }} - Aantal: {{ $item['quantity'] }}</li>
            @endforeach
        </ul>
    @endif

    <a href="/">Verder winkelen</a>
</body>
</html>
