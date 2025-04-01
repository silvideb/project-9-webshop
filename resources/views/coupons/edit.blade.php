
    <h1>Kortingsbon bewerken</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('coupons.update', $coupon->id) }}" method="POST">
        @csrf
        @method('PUT') 
        <div>
            <label for="code">Kortingscode:</label>
            <input type="text" id="code" name="code" value="{{ old('code', $coupon->code) }}" required>
        </div>
        <div>
            <label for="discount_type">Type korting:</label>
            <select id="discount_type" name="discount_type" required>
                <option value="percentage" {{ $coupon->discount_type == 'percentage' ? 'selected' : '' }}>Percentage</option>
                <option value="fixed" {{ $coupon->discount_type == 'fixed' ? 'selected' : '' }}>Vast bedrag</option>
            </select>
        </div>
        <div>
            <label for="discount_value">Kortingswaarde:</label>
            <input type="number" step="0.01" id="discount_value" name="discount_value" value="{{ old('discount_value', $coupon->discount_value) }}" required>
        </div>
        <div>
            <label for="start_date">Startdatum:</label>
            <input type="date" id="start_date" name="start_date" value="{{ old('start_date', $coupon->start_date) }}">
        </div>
        <div>
            <label for="end_date">Einddatum:</label>
            <input type="date" id="end_date" name="end_date" value="{{ old('end_date', $coupon->end_date) }}">
        </div>
        <div>
            <label for="usage_limit">Gebruikslimiet:</label>
            <input type="number" id="usage_limit" name="usage_limit" value="{{ old('usage_limit', $coupon->usage_limit) }}">
        </div>
        <button type="submit">Bijwerken</button>
    </form>

    <form action="{{ route('coupons.destroy', $coupon->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je deze kortingsbon wilt verwijderen?');" style="margin-top: 20px;">
        @csrf
        @method('DELETE')
        <button type="submit" style="background-color: red; color: white;">Verwijderen</button>
    </form>

